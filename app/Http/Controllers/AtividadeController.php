<?php

namespace App\Http\Controllers;

use App\Models\AreaTematica;
use App\Models\Atividade;
use App\Models\Bairro;
use App\Models\Categoria;
use App\Models\Endereco;
use App\Models\LinhaExtensao;
use App\Models\Metodologia;
use App\Models\PublicoAlvo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtividadeController extends Controller
{
    // Função responsável por listar todas as atividades
    public function index()
    {
        // Recupera todas as atividades do banco de dados
        $atividades = Atividade::all();

        // Retorna uma resposta JSON com todos os registros de atividades
        return response()->json($atividades);
    }

    // Função responsável por listar todas as atividades em andamento
    public function indexEmAndamento()
    {
        // Recupera todas as atividades com status 'Andamento'
        $atividadesEmAndamento = Atividade::where('status', 'Andamento')->get();
        // Retorna uma resposta JSON com as atividades em andamento
        return response()->json($atividadesEmAndamento);
    }

    // Função responsável por exibir uma atividade em andamento específica pelo seu id
    public function showEmAndamento($id)
    {
        // Recupera todas as atividades com status 'Andamento'
        //$atividadesEmAndamento = Atividade::where('status', 'Andamento')->get();
        // Busca a atividade com o id fornecido dentro das atividades em andamento
        //$atividade = $atividadesEmAndamento->firstWhere('id', $id);
        // Retorna a atividade encontrada em formato JSON

	$atividade = Atividade::with([
            'categoria', 
            'areaTematica', 
            'linhaExtensao', 
            'metodologia', 
            'publicoAlvo', 
            'endereco.bairro' // Carrega endereço e bairro
        ])
        ->where('status', 'Andamento') // Garante que só pega se estiver em andamento
        ->findOrFail($id);


        return response()->json($atividade);
    }

    // Função responsável por criar uma nova atividade
    public function store(Request $request)
    {
        // 1. VALIDAÇÃO
        // Note que mudamos de 'exists:tabela,id' para 'nullable|string' 
        // porque agora recebemos o NOME (texto) e não o ID direto.
        $request->validate([
            'nome' => 'required|string',
            'realizador_id' => 'required|exists:users,id',
            'descricao' => 'nullable|string',
            'status' => 'nullable|string',
            'objetivo' => 'nullable|string',
            'limite_participantes' => 'nullable|integer|min:0',
            'data_inicio' => 'required', // Aceita string date ou datetime
            'data_termino' => 'required',
            
            // Campos que agora são textos para buscarmos o ID depois
            'metodologia' => 'nullable|string',
            'publico_alvo' => 'nullable|string',
            'categoria' => 'nullable|string',
            'area_tematica' => 'nullable|string',
            'linha_extensao' => 'nullable|string',
            
            // Endereço e Bairro agora são strings
            'endereco' => 'nullable|string',
            'bairro' => 'nullable|string',
        ]);

        try {
            DB::beginTransaction(); // Segurança para salvar tudo ou nada

            // 2. FUNÇÃO AUXILIAR (Igual a do Importar)
            // Transforma texto em ID (Busca ou Cria)
            $buscarOuCriar = function ($model, $valor) {
                if (empty($valor)) return null;
                $nomeNormalizado = mb_strtoupper(trim($valor), 'UTF-8');
                return $model::firstOrCreate(['nome' => $nomeNormalizado])->id;
            };

            // 3. CONVERTER OS TEXTOS EM IDs
            // O front manda 'categoria' (texto), nós geramos 'categoriaId' (número)
            $areaId = $buscarOuCriar(AreaTematica::class, $request->input('area_tematica'));
            $categoriaId = $buscarOuCriar(Categoria::class, $request->input('categoria'));
            $linhaId = $buscarOuCriar(LinhaExtensao::class, $request->input('linha_extensao'));
            $metodologiaId = $buscarOuCriar(Metodologia::class, $request->input('metodologia'));
            $publicoId = $buscarOuCriar(PublicoAlvo::class, $request->input('publico_alvo'));
            
            $bairroId = $buscarOuCriar(Bairro::class, $request->input('bairro'));

            // 4. TRATAMENTO INTELIGENTE DO ENDEREÇO
            $enderecoId = null;
            if ($request->filled('endereco')) {
                // Explode "Rua, Numero, Referencia"
                $partes = explode(',', $request->input('endereco'));
                
                $rua = isset($partes[0]) ? mb_strtoupper(trim($partes[0]), 'UTF-8') : 'ENDEREÇO MANUAL';
                $num = isset($partes[1]) ? mb_strtoupper(trim($partes[1]), 'UTF-8') : 'S/N';
                $ref = isset($partes[2]) ? mb_strtoupper(trim($partes[2]), 'UTF-8') : null;

                $endereco = Endereco::firstOrCreate(
                    [
                        'logradouro' => $rua,
                        'numero'     => $num,
                        'bairro_id'  => $bairroId ?? 1 // Usa o bairro digitado ou o ID 1 (Padrão)
                    ],
                    [
                        'ponto_referencia' => $ref
                    ]
                );
                $enderecoId = $endereco->id;
            }

            // 5. CRIAR A ATIVIDADE
            $atividade = Atividade::create([
                'nome' => $request->input('nome'),
                'descricao' => $request->input('descricao'),
                'status' => $request->input('status') ?? 'Em avaliação',
                'objetivo' => $request->input('objetivo'),
                
                // Definimos como null para evitar o erro de "Incorrect integer value"
                // Caso queira usar, certifique-se que o banco aceita string ou trate aqui
                'foco_inclusao' => null, 
                
                'limite_participantes' => $request->input('limite_participantes') ?? 0,
                'data_inicio' => $request->input('data_inicio'), 
                'data_termino' => $request->input('data_termino'),
                'realizador_id' => $request->input('realizador_id'),
                
                // Usamos os IDs que descobrimos/criamos acima
                'area_tematica_id' => $areaId,
                'categoria_id' => $categoriaId,
                'linha_extensao_id' => $linhaId,
                'metodologia_id' => $metodologiaId,
                'publico_alvo_id' => $publicoId,
                'endereco_id' => $enderecoId,
            ]);

            DB::commit();

            // Retorna a atividade criada em formato JSON com o status HTTP 201 (Criado)
            return response()->json($atividade, 201);

        } catch (\Exception $e) {
            DB::rollBack();
            // Retorna erro 500 para o front saber que falhou
            return response()->json(['message' => 'Erro ao salvar: ' . $e->getMessage()], 500);
        }
    }

    // Função responsável por atualizar o status de uma atividade para 'Andamento'
    public function atualizarStatus($id)
    {
        // Busca a atividade com o id fornecido. Retorna null se não encontrar.
        $atividade = Atividade::find($id);

        // Se a atividade não for encontrada, retorna uma mensagem de erro com status HTTP 404
        if (!$atividade) {
            return response()->json(['message' => 'Atividade não encontrada'], 404);
        }

        // Atualiza o status da atividade para 'Andamento'
        $atividade->status = 'Andamento';
        $atividade->save(); // Salva a alteração no banco de dados

         // Retorna uma mensagem de sucesso e a atividade atualizada
        return response()->json(['message' => 'Status atualizado com sucesso', 'atividade' => $atividade]);
    }

    // Função responsável por exibir uma atividade específica pelo seu id
    public function show($id)
    {
        // Busca a atividade com o id fornecido. Se não for encontrada, retorna erro 404.
        $atividade = Atividade::with([
        'categoria', 
        'areaTematica', 
        'linhaExtensao', 
        'metodologia', 
        'publicoAlvo', 
        'endereco.bairro'
    ])->findOrFail($id);
        // Retorna a atividade encontrada em formato JSON
        return response()->json($atividade);
    }

    // Função responsável por atualizar uma atividade existente
    public function update(Request $request, $id)
    {
        // 1. VALIDAÇÃO ATUALIZADA
        // Agora aceitamos strings (nomes) ao invés de IDs para as tabelas relacionadas
        $request->validate([
            'nome' => 'required|string',
            'realizador_id' => 'required|exists:users,id',
            'descricao' => 'nullable|string',
            'status' => 'nullable|string',
            'objetivo' => 'nullable|string',
            
            // Validação de segurança para não aceitar negativos
            'limite_participantes' => 'nullable|integer|min:0',
            
            'data_inicio' => 'required',
            'data_termino' => 'required',

            // Campos de Texto (Categoria, Metodologia, etc)
            'metodologia' => 'nullable|string',
            'publico_alvo' => 'nullable|string',
            'categoria' => 'nullable|string',
            'area_tematica' => 'nullable|string',
            'linha_extensao' => 'nullable|string',
            
            // Endereço e Bairro como string
            'endereco' => 'nullable|string',
            'bairro' => 'nullable|string',
        ]);

        try {
            DB::beginTransaction();

            // 2. BUSCAR A ATIVIDADE
            $atividade = Atividade::findOrFail($id);

            // 3. FUNÇÃO AUXILIAR (Busca ou Cria pelo Nome)
            $buscarOuCriar = function ($model, $valor) {
                if (empty($valor)) return null;
                $nomeNormalizado = mb_strtoupper(trim($valor), 'UTF-8');
                return $model::firstOrCreate(['nome' => $nomeNormalizado])->id;
            };

            // 4. PROCESSAR RELACIONAMENTOS (Texto -> ID)
            $areaId = $buscarOuCriar(AreaTematica::class, $request->input('area_tematica'));
            $categoriaId = $buscarOuCriar(Categoria::class, $request->input('categoria'));
            $linhaId = $buscarOuCriar(LinhaExtensao::class, $request->input('linha_extensao'));
            $metodologiaId = $buscarOuCriar(Metodologia::class, $request->input('metodologia'));
            $publicoId = $buscarOuCriar(PublicoAlvo::class, $request->input('publico_alvo'));
            
            $bairroId = $buscarOuCriar(Bairro::class, $request->input('bairro'));

            // 5. PROCESSAR ENDEREÇO (Lógica da Vírgula)
            // Se o usuário apagar o endereço do form, removemos a ligação (null)
            // Se ele mantiver ou alterar, buscamos/criamos o novo.
            $enderecoId = null;

            if ($request->filled('endereco')) {
                $partes = explode(',', $request->input('endereco'));
                
                $rua = isset($partes[0]) ? mb_strtoupper(trim($partes[0]), 'UTF-8') : 'ENDEREÇO MANUAL';
                $num = isset($partes[1]) ? mb_strtoupper(trim($partes[1]), 'UTF-8') : 'S/N';
                $ref = isset($partes[2]) ? mb_strtoupper(trim($partes[2]), 'UTF-8') : null;

                $endereco = Endereco::firstOrCreate(
                    [
                        'logradouro' => $rua,
                        'numero'     => $num,
                        'bairro_id'  => $bairroId ?? 1
                    ],
                    [
                        'ponto_referencia' => $ref
                    ]
                );
                $enderecoId = $endereco->id;
            }

            // 6. ATUALIZAR DADOS
            $atividade->update([
                'nome' => $request->input('nome'),
                'descricao' => $request->input('descricao'),
                'status' => $request->input('status'),
                'objetivo' => $request->input('objetivo'),
                
                // Mantendo null conforme suas regras para evitar erro de Inteiro
                'foco_inclusao' => null, 
                
                'limite_participantes' => $request->input('limite_participantes') ?? 0,
                'data_inicio' => $request->input('data_inicio'),
                'data_termino' => $request->input('data_termino'),
                'realizador_id' => $request->input('realizador_id'),

                // IDs atualizados
                'area_tematica_id' => $areaId,
                'categoria_id' => $categoriaId,
                'linha_extensao_id' => $linhaId,
                'metodologia_id' => $metodologiaId,
                'publico_alvo_id' => $publicoId,
                'endereco_id' => $enderecoId,
            ]);

            DB::commit();

            return response()->json($atividade, 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Erro ao atualizar atividade.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Nova função, Para Importar uma planilha
    public function importar(Request $request)
    {
        // Recebe a lista do Front-end
        $dados = $request->input('atividades');

        $importados = 0;
        $erros = [];

        foreach ($dados as $index => $item) {
            $linha = $index + 1; // Para referência no erro

            try {
                DB::beginTransaction(); // Inicia transação segura

		$limite = (int) ($item['limite_participantes'] ?? 0);
		if ($limite < 0) {
        	     throw new \Exception("O limite de participantes não pode ser negativo.");
    		}

                // 1. VERIFICAR O REALIZADOR (USUÁRIO)
                // O Front deve enviar o EMAIL do realizador para identificarmos
                if (empty($item['realizador_email'])) {
                    throw new \Exception('Email do realizador não informado.');
                }

                $user = User::where('email', $item['realizador_email'])->first();

                if (!$user) {
                    // REGRA: Se não existir, RETORNAR AVISO e pular esta atividade
                    throw new \Exception("Usuário com email '{$item['realizador_email']}' não encontrado.");
                }

		// ---------------------------------------------------------
            // 2. LÓGICA DA DESCRIÇÃO + OBSERVAÇÕES
            // ---------------------------------------------------------
            $descricaoFinal = $item['descricao'] ?? '';

            // Se houver observações na planilha, adiciona ao final
            if (!empty($item['observacoes'])) {
                // Adiciona duas quebras de linha e o prefixo solicitado
                $descricaoFinal .= "\n\nObservações: " . $item['observacoes'];
            }

                // 2. FUNÇÃO AUXILIAR PARA CRIAR/BUSCAR (NORMALIZANDO MAIÚSCULO)
                $buscarOuCriar = function ($model, $valor) {
                    if (empty($valor)) {
                        return null;
                    }
                    $nomeNormalizado = mb_strtoupper(trim($valor), 'UTF-8');
                    // Busca pelo nome ou cria
                    $obj = $model::firstOrCreate(['nome' => $nomeNormalizado]);

                    return $obj->id;
                };

                // 3. PREPARAR DADOS RELACIONADOS
                $areaId = $buscarOuCriar(AreaTematica::class, $item['area_tematica'] ?? null);
                $categoriaId = $buscarOuCriar(Categoria::class, $item['categoria'] ?? null);
                $linhaId = $buscarOuCriar(LinhaExtensao::class, $item['linha_extensao'] ?? null);
                $metodologiaId = $buscarOuCriar(Metodologia::class, $item['metodologia'] ?? null);
                $publicoId = $buscarOuCriar(PublicoAlvo::class, $item['publico_alvo'] ?? null);

                $bairroId = null;
                if (!empty($item['bairro'])) {
                    // Busca ou cria o Bairro (convertendo para maiúsculo)
                    $bairroId = $buscarOuCriar(Bairro::class, $item['bairro']);
                }

                $enderecoId = null;

                if (!empty($item['endereco'])) {
                    // 1. QUEBRAR A STRING (Explode)
                    // Transforma "Rua A, 10, Perto do X" em um array: ["Rua A", " 10", " Perto do X"]
                    $partesEndereco = explode(',', $item['endereco']);

                    // 2. ORGANIZAR CADA PARTE (Limpando espaços e colocando em Maiúsculo)

                    // Parte 0: Logradouro (Obrigatório)
                    $logradouro = isset($partesEndereco[0])
                        ? mb_strtoupper(trim($partesEndereco[0]), 'UTF-8')
                        : 'LOGRADOURO NÃO IDENTIFICADO';

                    // Parte 1: Número (Opcional - Se não tiver, vira S/N)
                    $numero = isset($partesEndereco[1])
                        ? mb_strtoupper(trim($partesEndereco[1]), 'UTF-8')
                        : 'S/N';

                    // Parte 2: Ponto de Referência (Opcional - Pode ser nulo)
                    $pontoReferencia = isset($partesEndereco[2])
                        ? mb_strtoupper(trim($partesEndereco[2]), 'UTF-8')
                        : null;

                    // 3. BUSCAR OU CRIAR NO BANCO
                    // Atenção: Um endereço é único pela combinação de (Logradouro + Número + Bairro)
                    $endereco = Endereco::firstOrCreate(
                        [
                            'logradouro' => $logradouro,
                            'numero' => $numero,
                            'bairro_id' => $bairroId ?? 1, // Usa o bairro da planilha ou o padrão (1)
                        ],
                        [
                            // Campos que não servem para diferenciar endereços (só preenche se estiver criando novo)
                            'ponto_referencia' => $pontoReferencia,
                        ]
                    );

                    $enderecoId = $endereco->id;
                }

                // 4. CRIAR A ATIVIDADE
                Atividade::create([
                    'nome' => $item['nome'],
                    'descricao' => $descricaoFinal ?? null,
                    'status' => $item['status'] ?? 'Em Análise',
                    'objetivo' => $item['objetivo'] ?? null,
                    'foco_inclusao' => $item['foco_inclusao'] ?? null,
                    'limite_participantes' => $item['limite_participantes'] ?? null,
                    'data_inicio' => $item['data_inicio'], // Certifique-se que o front manda YYYY-MM-DD
                    'data_termino' => $item['data_termino'],
                    'realizador_id' => $user->id,

                    // IDs descobertos acima
                    'area_tematica_id' => $areaId,
                    'categoria_id' => $categoriaId,
                    'linha_extensao_id' => $linhaId,
                    'metodologia_id' => $metodologiaId,
                    'publico_alvo_id' => $publicoId,
                    'endereco_id' => $enderecoId,
                ]);

                DB::commit(); // Salva se tudo deu certo
                ++$importados;
            } catch (\Exception $e) {
                DB::rollBack(); // Desfaz se deu erro
                $erros[] = "Linha $linha ({$item['nome']}): ".$e->getMessage();
            }
        }

        return response()->json([
            'message' => 'Processo finalizado.',
            'total_importados' => $importados,
            'erros' => $erros, // O front vai exibir isso num alerta
        ]);
    }

}
