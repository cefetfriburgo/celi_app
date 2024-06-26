<?php

namespace App\Http\Controllers;

use App\Models\MaterialFisico;
use Illuminate\Http\Request;

class MaterialFisicoController extends Controller
{
    public function index()
    {
        $materiaisFisicos = MaterialFisico::all();
        return response()->json($materiaisFisicos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string',
            'quantidade' => 'required|integer',
            'infraestrutura_id' => 'required|exists:infraestruturas,id',
        ]);

        $materialFisico = MaterialFisico::create($request->all());

        return response()->json($materialFisico, 201);
    }

    public function show($id)
    {
        $materialFisico = MaterialFisico::findOrFail($id);
        return response()->json($materialFisico);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required|string',
            'quantidade' => 'required|integer',
            'infraestrutura_id' => 'required|exists:infraestruturas,id',
        ]);

        $materialFisico = MaterialFisico::findOrFail($id);
        $materialFisico->update($request->all());

        return response()->json($materialFisico, 200);
    }

    public function destroy($id)
    {
        $materialFisico = MaterialFisico::findOrFail($id);
        $materialFisico->delete();

        return response()->json(null, 204);
    }
}
