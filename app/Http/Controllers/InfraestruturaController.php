<?php

namespace App\Http\Controllers;

use App\Models\Infraestrutura;
use Illuminate\Http\Request;

class InfraestruturaController extends Controller
{
    // Função responsável por listar todas as infraestruturas
    public function index()
    {
        // Recupera todas as infraestruturas do banco de dados
        $infraestruturas = Infraestrutura::all();

        // Retorna uma resposta JSON com todas as infraestruturas encontradas
        return response()->json($infraestruturas);
    }

    // Função responsável por criar uma nova infraestrutura
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição  
        $request->validate([
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        // Cria uma nova infraestrutura com os dados validados da requisição
        $infraestrutura = Infraestrutura::create($request->all());

        // Retorna a infraestrutura criada em formato JSON com status HTTP 201 (Criado)
        return response()->json($infraestrutura, 201);
    }

    // Função responsável por exibir uma infraestrutura específica pelo seu id
    public function show($id)
    {
        // Busca a infraestrutura com o id fornecido. Se não for encontrada, retorna erro 404
        $infraestrutura = Infraestrutura::findOrFail($id);
        // Retorna a infraestrutura encontrada em formato JSON
        return response()->json($infraestrutura);
    }

    // Função responsável por atualizar uma infraestrutura existente
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        // Busca a infraestrutura com o id fornecido. Se não for encontrada, retorna erro 404
        $infraestrutura = Infraestrutura::findOrFail($id);
        // Atualiza os dados da infraestrutura com os dados recebidos na requisição
        $infraestrutura->update($request->all());

        // Retorna a infraestrutura atualizada em formato JSON com status HTTP 200 (OK)
        return response()->json($infraestrutura, 200);
    }

    // Função responsável por deletar uma infraestrutura
    public function destroy($id)
    {
        // Busca a infraestrutura com o id fornecido. Se não for encontrada, retorna erro 404
        $infraestrutura = Infraestrutura::findOrFail($id);
        // Deleta a infraestrutura encontrada no banco de dados
        $infraestrutura->delete();

        // Retorna uma resposta JSON com status HTTP 204 (Sem conteúdo), indicando que a operação foi bem-sucedida
        return response()->json(null, 204);
    }
}
