<?php

namespace App\Http\Controllers;

use App\Models\MaterialFisico;
use Illuminate\Http\Request;

class MaterialFisicoController extends Controller
{
    // Função responsável por listar todos os materiais físicos
    public function index()
    {
        // Recupera todos os materiais físicos do banco de dados
        $materiaisFisicos = MaterialFisico::all();
        // Retorna uma resposta JSON com todos os materiais físicos encontrados
        return response()->json($materiaisFisicos);
    }

    // Função responsável por criar um novo material físico
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'descricao' => 'required|string',
            'quantidade' => 'required|integer',
            'infraestrutura_id' => 'required|exists:infraestruturas,id',
        ]);

        // Cria um novo material físico com os dados validados da requisição
        $materialFisico = MaterialFisico::create($request->all());

        // Retorna o material físico criado em formato JSON com status HTTP 201 (Criado)
        return response()->json($materialFisico, 201);
    }

    // Função responsável por exibir um material físico específico pelo seu id
    public function show($id)
    {
        // Busca o material físico com o id fornecido. Se não for encontrado, retorna erro 404
        $materialFisico = MaterialFisico::findOrFail($id);
        // Retorna o material físico encontrado em formato JSON
        return response()->json($materialFisico);
    }

    // Função responsável por atualizar um material físico existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'descricao' => 'required|string',
            'quantidade' => 'required|integer',
            'infraestrutura_id' => 'required|exists:infraestruturas,id',
        ]);

        // Busca o material físico com o id fornecido. Se não for encontrado, retorna erro 404
        $materialFisico = MaterialFisico::findOrFail($id);

        // Atualiza os dados do material físico com os dados recebidos na requisição
        $materialFisico->update($request->all());

        // Retorna o material físico atualizado em formato JSON com status HTTP 200 (OK)
        return response()->json($materialFisico, 200);
    }

    // Função responsável por deletar um material físico
    public function destroy($id)
    {
        // Busca o material físico com o id fornecido. Se não for encontrado, retorna erro 404
        $materialFisico = MaterialFisico::findOrFail($id);
        // Deleta o material físico encontrado no banco de dados
        $materialFisico->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
