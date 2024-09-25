<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Participante; // Adicionado
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
}