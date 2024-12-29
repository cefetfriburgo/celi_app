<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

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
        $atividadesEmAndamento = Atividade::where('status', 'Andamento')->get();
        // Busca a atividade com o id fornecido dentro das atividades em andamento
        $atividade = $atividadesEmAndamento->firstWhere('id', $id);
        // Retorna a atividade encontrada em formato JSON
        return response()->json($atividade);
    }

    // Função responsável por criar uma nova atividade
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
            'realizador_id' => 'required|exists:users,id',
            'descricao' => 'nullable|string',
            'status' => 'nullable|string',
            'objetivo' => 'nullable|string',
            'foco_inclusao' => 'nullable|string',
            'limite_participantes' => 'nullable|integer',
            'data_inicio' => 'required|date',
            'data_termino' => 'required|date',
            'metodologia_id' => 'nullable|exists:metodologias,id',
            'publico_alvo_id' => 'nullable|exists:publico_alvos,id',
            'endereco_id' => 'nullable|exists:enderecos,id',
            'categoria_id' => 'nullable|exists:categorias,id',
            'area_tematica_id' => 'nullable|exists:area_tematicas,id',
            'linha_extensao_id' => 'nullable|exists:linha_extensaos,id',
        ]);

        // Cria uma nova atividade com os dados validados da requisição
        $atividade = Atividade::create($request->all());

        // Retorna a atividade criada em formato JSON com o status HTTP 201 (Criado)
        return response()->json($atividade, 201);
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
        $atividade = Atividade::findOrFail($id);
        // Retorna a atividade encontrada em formato JSON
        return response()->json($atividade);
    }

    // Função responsável por atualizar uma atividade existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
            'realizador_id' => 'required|exists:users,id',
            'descricao' => 'nullable|string',
            'status' => 'nullable|string',
            'objetivo' => 'nullable|string',
            'foco_inclusao' => 'nullable|string',
            'limite_participantes' => 'nullable|integer',
            'metodologia_id' => 'nullable|exists:metodologias,id',
            'publico_alvo_id' => 'nullable|exists:publico_alvos,id',
            'endereco_id' => 'nullable|exists:enderecos,id',
            'categoria_id' => 'nullable|exists:categorias,id',
            'area_tematica_id' => 'nullable|exists:area_tematicas,id',
            'linha_extensao_id' => 'nullable|exists:linha_extensaos,id',
        ]);

        // Busca a atividade com o id fornecido. Se não for encontrada, retorna erro 404.
        $atividade = Atividade::findOrFail($id);
        // Atualiza os dados da atividade com os dados da requisição
        $atividade->update($request->all());

        // Retorna a atividade atualizada em formato JSON com status HTTP 200 (OK)
        return response()->json($atividade, 200);
    }

    // Função responsável por deletar uma atividade
    public function destroy($id)
    {
        // Busca a atividade com o id fornecido. Se não for encontrada, retorna erro 404.
        $atividade = Atividade::findOrFail($id);
        // Deleta a atividade do banco de dados
        $atividade->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
