<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    public function index()
    {
        $atividades = Atividade::all();
        return response()->json($atividades);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'realizador_id' => 'required|exists:users,id',
            'descricao' => 'nullable|string',
            'status' => 'nullable|string',
            'objetivo' => 'nullable|string',
            'foco_inclusao' => 'nullable|string',
            'limite_participantes' => 'nullable|integer',
            'data_inicio' => 'required|date',
            'data_termino' => 'required|date',
            'metodologia_id' => 'nullable|exists:metodologias,id',
            'publico_alvo_id' => 'nullable|exists:publico_alvos,id',
            'endereco_id' => 'nullable|exists:enderecos,id',
            'categoria_id' => 'nullable|exists:categorias,id',
            'area_tematica_id' => 'nullable|exists:area_tematicas,id',
            'linha_extensao_id' => 'nullable|exists:linha_extensaos,id',
        ]);

        $atividade = Atividade::create($request->all());

        return response()->json($atividade, 201);
    }

    public function show($id)
    {
        $atividade = Atividade::findOrFail($id);
        return response()->json($atividade);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'realizador_id' => 'required|exists:users,id',
            'descricao' => 'nullable|string',
            'status' => 'nullable|string',
            'objetivo' => 'nullable|string',
            'foco_inclusao' => 'nullable|string',
            'limite_participantes' => 'nullable|integer',
            'metodologia_id' => 'nullable|exists:metodologias,id',
            'publico_alvo_id' => 'nullable|exists:publico_alvos,id',
            'endereco_id' => 'nullable|exists:enderecos,id',
            'categoria_id' => 'nullable|exists:categorias,id',
            'area_tematica_id' => 'nullable|exists:area_tematicas,id',
            'linha_extensao_id' => 'nullable|exists:linha_extensaos,id',
        ]);

        $atividade = Atividade::findOrFail($id);
        $atividade->update($request->all());

        return response()->json($atividade, 200);
    }

    public function destroy($id)
    {
        $atividade = Atividade::findOrFail($id);
        $atividade->delete();

        return response()->json(null, 204);
    }
}
