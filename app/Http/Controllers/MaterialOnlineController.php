<?php

namespace App\Http\Controllers;

use App\Models\MaterialOnline;
use Illuminate\Http\Request;

class MaterialOnlineController extends Controller
{
    // Função responsável por listar todos os materiais online
    public function index()
    {
        // Recupera todos os materiais online do banco de dados
        $materiaisOnline = MaterialOnline::all();
        // Retorna uma resposta JSON com todos os materiais online encontrados
        return response()->json($materiaisOnline);
    }

    // Função responsável por criar um novo material online
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'link_pasta' => 'required|string',
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        // Cria um novo material online com os dados validados da requisição
        $materialOnline = MaterialOnline::create($request->all());

        // Retorna o material online criado em formato JSON com status HTTP 201 (Criado)
        return response()->json($materialOnline, 201);
    }

    // Função responsável por exibir um material online específico pelo seu id
    public function show($id)
    {
        // Busca o material online com o id fornecido. Se não for encontrado, retorna erro 404
        $materialOnline = MaterialOnline::findOrFail($id);
        // Retorna o material online encontrado em formato JSON
        return response()->json($materialOnline);
    }

    // Função responsável por atualizar um material online existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'link_pasta' => 'required|string',
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        // Busca o material online com o id fornecido. Se não for encontrado, retorna erro 404
        $materialOnline = MaterialOnline::findOrFail($id);
        // Atualiza os dados do material online com os dados recebidos na requisição
        $materialOnline->update($request->all());

        // Retorna o material online atualizado em formato JSON com status HTTP 200 (OK)
        return response()->json($materialOnline, 200);
    }

    // Função responsável por deletar um material online
    public function destroy($id)
    {
        // Busca o material online com o id fornecido. Se não for encontrado, retorna erro 404
        $materialOnline = MaterialOnline::findOrFail($id);
        // Deleta o material online encontrado no banco de dados
        $materialOnline->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
