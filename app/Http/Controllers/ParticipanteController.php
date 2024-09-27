<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Participante; // Adicionado
use App\Models\User;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    public function index(Request $request)
    {
        $materiaisFisicos = Participante::all();
        return response()->json($materiaisFisicos);
    }


    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:users,id',
            'atividade_id' => 'required|exists:atividades,id', // Corrigido
        ]);
    
        // Verificar se o participante já existe
        $exists = Participante::where('usuario_id', $request->usuario_id)
                              ->where('atividade_id', $request->atividade_id)
                              ->exists();
    
        if ($exists) {
            return response()->json(['message' => 'Inscrição já foi realizada.'], 409);
        }
    
        $participante = Participante::create($request->only(['usuario_id', 'atividade_id'])); // Modificado
        return response()->json($participante, 201);
    }
    
    public function getParticipantesPorAtividade($atividadeId)
    {
        // Obter os IDs dos participantes da atividade
        $participantes = Participante::where('atividade_id', $atividadeId)->pluck('usuario_id');

        // Obter os usuários correspondentes aos IDs dos participantes
        $usuarios = User::whereIn('id', $participantes)->get();

        // Retornar os usuários em formato JSON
        return response()->json($usuarios);
    }
}