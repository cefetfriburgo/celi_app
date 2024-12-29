<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Participante;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    // Função responsável por listar todos os participantes
    public function index(Request $request)
    {
        // Recupera todos os participantes do banco de dados
        $materiaisFisicos = Participante::all();
        // Retorna os participantes encontrados em formato JSON
        return response()->json($materiaisFisicos);
    }

    // Função responsável por registrar um novo participante em uma atividade
    public function store(Request $request)
    {
        // Validação dos dados recebidos na requisição
        $request->validate([
            'usuario_id' => 'required|exists:users,id',
            'atividade_id' => 'required|exists:atividades,id',
        ]);
    
        // Verifica se o participante já está inscrito na atividade
        $exists = Participante::where('usuario_id', $request->usuario_id)
                              ->where('atividade_id', $request->atividade_id)
                              ->exists();
        // Se o participante já estiver inscrito, retorna uma resposta com status 409 (Conflito)
        if ($exists) {
            return response()->json(['message' => 'Inscrição já foi realizada.'], 409);
        }
    
        // Se o participante já estiver inscrito, retorna uma resposta com status 409 (Conflito)
        $participante = Participante::create($request->only(['usuario_id', 'atividade_id']));
        // Retorna o participante recém-criado em formato JSON com status HTTP 201 (Criado)
        return response()->json($participante, 201);
    }
    
    // Função responsável por listar todos os participantes de uma atividade específica
    public function getParticipantesPorAtividade($atividadeId)
    {
        // Recupera os IDs dos usuários que estão inscritos na atividade especificada
        $participantes = Participante::where('atividade_id', $atividadeId)->pluck('usuario_id');

        // Recupera os detalhes dos usuários que correspondem aos IDs encontrados
        $usuarios = User::whereIn('id', $participantes)->get();

        // Retorna a lista de usuários (participantes) em formato JSON
        return response()->json($usuarios);
    }
}