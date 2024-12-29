<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Função responsável por listar todas as categorias
    public function index()
    {
        // Recupera todas as categorias do banco de dados
        $categorias = Categoria::all();
        // Retorna uma resposta JSON com todas as categorias encontradas
        return response()->json($categorias);
    }

    // Função responsável por criar uma nova categoria
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Cria uma nova categoria com os dados validados da requisição
        $categoria = Categoria::create($request->all());

        // Retorna a categoria criada em formato JSON com status HTTP 201 (Criado)
        return response()->json($categoria, 201);
    }

    // Função responsável por exibir uma categoria específica pelo seu id
    public function show($id)
    {
        // Busca a categoria com o id fornecido. Se não for encontrada, retorna erro 404
        $categoria = Categoria::findOrFail($id);

        // Retorna a categoria encontrada em formato JSON
        return response()->json($categoria);
    }

    // Função responsável por atualizar uma categoria existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'nome' => 'required|string',
        ]);

        // Busca a categoria com o id fornecido. Se não for encontrada, retorna erro 404
        $categoria = Categoria::findOrFail($id);
        // Atualiza os dados da categoria com os dados recebidos na requisição
        $categoria->update($request->all());

        // Retorna a categoria atualizada em formato JSON com status HTTP 200 (OK)
        return response()->json($categoria, 200);
    }

    // Função responsável por deletar uma categoria
    public function destroy($id)
    {
        // Busca a categoria com o id fornecido. Se não for encontrada, retorna erro 404
        $categoria = Categoria::findOrFail($id);
        // Deleta a categoria encontrada no banco de dados
        $categoria->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
