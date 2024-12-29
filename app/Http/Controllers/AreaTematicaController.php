<?php

namespace App\Http\Controllers;

use App\Models\AreaTematica;
use Illuminate\Http\Request;

class AreaTematicaController extends Controller
{
    // Função responsável por listar todas as áreas temáticas
    public function index()
    {
        // Recupera todas as áreas temáticas do banco de dados
        $areaTematicas = AreaTematica::all();
        // Retorna uma resposta JSON com todos os registros encontrados
        return response()->json($areaTematicas);
    }

    // Função responsável por criar uma nova área temática
    public function store(Request $request)
    {
         // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);
        // Cria uma nova área temática no banco de dados com o nome fornecido na requisição
        $areaTematica = AreaTematica::create([
            'nome' => $request->nome,
        ]);

        // Retorna a área temática criada em formato JSON com o status HTTP 201 (Criado)
        return response()->json($areaTematica, 201);
    }

    // Função responsável por exibir uma área temática específica pelo seu id
    public function show($id)
    {
        // Busca a área temática com o id fornecido. Caso não exista, retorna erro 404.
        $areaTematica = AreaTematica::findOrFail($id);

        // Retorna a área temática encontrada em formato JSON
        return response()->json($areaTematica);
    }

     // Função responsável por atualizar uma área temática existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);
        // Busca a área temática com o id fornecido. Caso não exista, retorna erro 404.
        $areaTematica = AreaTematica::findOrFail($id);

        // Atualiza o nome da área temática com o valor fornecido na requisição
        $areaTematica->update([
            'nome' => $request->nome,
        ]);

        // Retorna a área temática atualizada em formato JSON com o status HTTP 200 (OK)
        return response()->json($areaTematica, 200);
    }


    // Função responsável por deletar uma área temática
    public function destroy($id)
    {
        // Busca a área temática com o id fornecido. Caso não exista, retorna erro 404.
        $areaTematica = AreaTematica::findOrFail($id);
        
        // Deleta a área temática encontrada no banco de dados
        $areaTematica->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}