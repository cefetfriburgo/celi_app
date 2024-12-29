<?php

namespace App\Http\Controllers;

use App\Models\Metodologia;
use Illuminate\Http\Request;

class MetodologiaController extends Controller
{
    // Função responsável por listar todas as metodologias
    public function index()
    {
        // Recupera todas as metodologias do banco de dados
        $metodologias = Metodologia::all();
        // Retorna uma resposta JSON com todas as metodologias encontradas
        return response()->json($metodologias);
    }

    // Função responsável por criar uma nova metodologia
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Cria uma nova metodologia com os dados validados da requisição
        $metodologia = Metodologia::create($request->all());

        // Retorna a metodologia criada em formato JSON com status HTTP 201 (Criado)
        return response()->json($metodologia, 201);
    }

    // Função responsável por exibir uma metodologia específica pelo seu id 
    public function show($id)
    {
        // Busca a metodologia com o id fornecido. Se não for encontrada, retorna erro 404
        $metodologia = Metodologia::findOrFail($id);
        // Retorna a metodologia encontrada em formato JSON
        return response()->json($metodologia);
    }

    // Função responsável por atualizar uma metodologia existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Busca a metodologia com o id fornecido. Se não for encontrada, retorna erro 404
        $metodologia = Metodologia::findOrFail($id);

        // Atualiza os dados da metodologia com os dados recebidos na requisição
        $metodologia->update($request->all());

        // Retorna a metodologia atualizada em formato JSON com status HTTP 200 (OK)
        return response()->json($metodologia, 200);
    }

    // Função responsável por deletar uma metodologia
    public function destroy($id)
    {
        // Busca a metodologia com o id fornecido. Se não for encontrada, retorna erro 404
        $metodologia = Metodologia::findOrFail($id);
        // Deleta a metodologia encontrada no banco de dados
        $metodologia->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
