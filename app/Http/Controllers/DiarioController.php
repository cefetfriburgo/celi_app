<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use Illuminate\Http\Request;

class DiarioController extends Controller
{
    public function index()
    {
        $diarios = Diario::all();
        return response()->json($diarios);
    }

    public function store(Request $request)
    {
        $request->validate([
            'carga_horaria' => 'required|numeric',
            'data_inicio' => 'required|date',
            'data_termino' => 'required|date',
            //'atividade_id' => 'required|exists:atividades,id',
        ]);

        $diario = Diario::create($request->all());

        return response()->json($diario, 201);
    }

    public function show($id)
    {
        $diario = Diario::findOrFail($id);
        return response()->json($diario);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'carga_horaria' => 'required|numeric',
            'data_inicio' => 'required|date',
            'data_termino' => 'required|date',
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        $diario = Diario::findOrFail($id);
        $diario->update($request->all());

        return response()->json($diario, 200);
    }

    public function destroy($id)
    {
        $diario = Diario::findOrFail($id);
        $diario->delete();

        return response()->json(null, 204);
    }
}
