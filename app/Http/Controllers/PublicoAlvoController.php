<?php

namespace App\Http\Controllers;

use App\Models\PublicoAlvo;
use Illuminate\Http\Request;

class PublicoAlvoController extends Controller
{
    // Função responsável por listar todos os públicos-alvo
    public function index()
    {
        // Recupera todos os públicos-alvo no banco de dados
        $publicoAlvos = PublicoAlvo::all();
        // Retorna a lista de públicos-alvo em formato JSON
        return response()->json($publicoAlvos);
    }

    // Função responsável por criar um novo público-alvo
    public function store(Request $request)
    {
        // Valida os dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Cria um novo público-alvo com os dados recebidos
        $publicoAlvo = PublicoAlvo::create($request->all());

        // Retorna o público-alvo recém-criado em formato JSON com status HTTP 201 (Criado)
        return response()->json($publicoAlvo, 201);
    }

    // Função responsável por mostrar os dados de um público-alvo específico
    public function show($id)
    {
        // Recupera o público-alvo com o ID especificado ou retorna erro 404 se não encontrado
        $publicoAlvo = PublicoAlvo::findOrFail($id);
        // Retorna o público-alvo encontrado em formato JSON
        return response()->json($publicoAlvo);
    }

    // Função responsável por atualizar os dados de um público-alvo existente
    public function update(Request $request, $id)
    {
        // Valida os dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Recupera o público-alvo com o ID especificado ou retorna erro 404 se não encontrado
        $publicoAlvo = PublicoAlvo::findOrFail($id);
        // Atualiza o público-alvo com os novos dados recebidos
        $publicoAlvo->update($request->all());

        // Retorna o público-alvo atualizado em formato JSON com status HTTP 200 (OK)
        return response()->json($publicoAlvo, 200);
    }

    // Função responsável por deletar um público-alvo
    public function destroy($id)
    {
        // Recupera o público-alvo com o ID especificado ou retorna erro 404 se não encontrado
        $publicoAlvo = PublicoAlvo::findOrFail($id);
        // Deleta o público-alvo encontrado
        $publicoAlvo->delete();

        // Retorna uma resposta vazia com status HTTP 204 (Sem Conteúdo), indicando sucesso na remoção
        return response()->json(null, 204);
    }
}
