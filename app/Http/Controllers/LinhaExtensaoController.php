<?php

namespace App\Http\Controllers;

use App\Models\LinhaExtensao;
use Illuminate\Http\Request;

class LinhaExtensaoController extends Controller
{
    // Função responsável por listar todas as linhas de extensão
    public function index()
    {
        // Recupera todas as linhas de extensão do banco de dados
        $linhasExtensao = LinhaExtensao::all();
        // Retorna uma resposta JSON com todas as linhas de extensão encontradas
        return response()->json($linhasExtensao);
    }

    // Função responsável por criar uma nova linha de extensão
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Cria uma nova linha de extensão com os dados validados da requisição
        $linhaExtensao = LinhaExtensao::create($request->all());

        // Retorna a linha de extensão criada em formato JSON com status HTTP 201 (Criado)
        return response()->json($linhaExtensao, 201);
    }

    // Função responsável por exibir uma linha de extensão específica pelo seu id
    public function show($id)
    {
        // Busca a linha de extensão com o id fornecido. Se não for encontrada, retorna erro 404
        $linhaExtensao = LinhaExtensao::findOrFail($id);
        // Retorna a linha de extensão encontrada em formato JSON
        return response()->json($linhaExtensao);
    }

    // Função responsável por atualizar uma linha de extensão existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Busca a linha de extensão com o id fornecido. Se não for encontrada, retorna erro 404
        $linhaExtensao = LinhaExtensao::findOrFail($id);
        // Atualiza os dados da linha de extensão com os dados recebidos na requisição
        $linhaExtensao->update($request->all());

        // Retorna a linha de extensão atualizada em formato JSON com status HTTP 200 (OK)
        return response()->json($linhaExtensao, 200);
    }

    // Função responsável por deletar uma linha de extensão
    public function destroy($id)
    {
        // Busca a linha de extensão com o id fornecido. Se não for encontrada, retorna erro 404
        $linhaExtensao = LinhaExtensao::findOrFail($id);
        // Deleta a linha de extensão encontrada no banco de dados
        $linhaExtensao->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
