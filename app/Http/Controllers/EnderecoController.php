<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    // Função responsável por listar todos os endereços
    public function index()
    {
        // Recupera todos os endereços do banco de dados
        $enderecos = Endereco::all();
        // Retorna uma resposta JSON com todos os endereços encontrados
        return response()->json($enderecos);
    }

    // Função responsável por criar um novo endereço
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'logradouro' => 'required|string',
            'numero' => 'nullable|string',
            'ponto_referencia' => 'nullable|string',
            'bairro_id' => 'required|exists:bairros,id',
        ]);

        // Cria um novo endereço com os dados validados da requisição
        $endereco = Endereco::create($request->all());

        // Retorna o endereço criado em formato JSON com status HTTP 201 (Criado)
        return response()->json($endereco, 201);
    }

    // Função responsável por exibir um endereço específico pelo seu id
    public function show($id)
    {
        // Busca o endereço com o id fornecido. Se não for encontrado, retorna erro 404
        $endereco = Endereco::findOrFail($id);
        // Retorna o endereço encontrado em formato JSON
        return response()->json($endereco);
    }
    
    // Função responsável por atualizar um endereço existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'logradouro' => 'required|string',
            'numero' => 'nullable|string',
            'ponto_referencia' => 'nullable|string',
            'bairro_id' => 'required|exists:bairros,id',
        ]);

        // Busca o endereço com o id fornecido. Se não for encontrado, retorna erro 404
        $endereco = Endereco::findOrFail($id);

        // Atualiza os dados do endereço com os dados recebidos na requisição
        $endereco->update($request->all());

        // Retorna o endereço atualizado em formato JSON com status HTTP 200 (OK)
        return response()->json($endereco, 200);
    }

    // Função responsável por deletar um endereço
    public function destroy($id)
    {
        // Busca o endereço com o id fornecido. Se não for encontrado, retorna erro 404
        $endereco = Endereco::findOrFail($id);
        // Deleta o endereço encontrado no banco de dados
        $endereco->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
