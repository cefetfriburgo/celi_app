<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
    // Função responsável por listar todos os bairros
    public function index()
    {
        // Recupera todos os bairros do banco de dados
        $bairros = Bairro::all();
        // Retorna uma resposta JSON com todos os bairros encontrados
        return response()->json($bairros);
    }

    // Função responsável por criar um novo bairro
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Cria um novo bairro com os dados validados da requisição
        $bairro = Bairro::create($request->all());

        // Retorna o bairro criado em formato JSON com status HTTP 201 (Criado)
        return response()->json($bairro, 201);
    }

    // Função responsável por exibir um bairro específico pelo seu id   
    public function show($id)
    {
        // Busca o bairro com o id fornecido. Se não for encontrado, retorna erro 404
        $bairro = Bairro::findOrFail($id);
        // Retorna o bairro encontrado em formato JSON
        return response()->json($bairro);
    }


    // Função responsável por atualizar um bairro existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Busca o bairro com o id fornecido. Se não for encontrado, retorna erro 404
        $bairro = Bairro::findOrFail($id);
        // Atualiza os dados do bairro com os dados recebidos na requisição
        $bairro->update($request->all());

        // Retorna o bairro atualizado em formato JSON com status HTTP 200 (OK)
        return response()->json($bairro, 200);
    }

    // Função responsável por deletar um bairro
    public function destroy($id)
    {
        // Busca o bairro com o id fornecido. Se não for encontrado, retorna erro 404
        $bairro = Bairro::findOrFail($id);
        // Deleta o bairro encontrado no banco de dados
        $bairro->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
