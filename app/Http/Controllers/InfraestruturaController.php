<?php

namespace App\Http\Controllers;

use App\Models\Infraestrutura;
use Illuminate\Http\Request;

class InfraestruturaController extends Controller
{
    public function index()
    {
        $infraestruturas = Infraestrutura::all();
        return response()->json($infraestruturas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        $infraestrutura = Infraestrutura::create($request->all());

        return response()->json($infraestrutura, 201);
    }

    public function show($id)
    {
        $infraestrutura = Infraestrutura::findOrFail($id);
        return response()->json($infraestrutura);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        $infraestrutura = Infraestrutura::findOrFail($id);
        $infraestrutura->update($request->all());

        return response()->json($infraestrutura, 200);
    }

    public function destroy($id)
    {
        $infraestrutura = Infraestrutura::findOrFail($id);
        $infraestrutura->delete();

        return response()->json(null, 204);
    }
}
