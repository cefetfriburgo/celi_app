<?php

namespace App\Http\Controllers;

use App\Models\AreaTematica;
use Illuminate\Http\Request;

class AreaTematicaController extends Controller
{
    public function index()
    {
        $areaTematicas = AreaTematica::all();
        return response()->json($areaTematicas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $areaTematica = AreaTematica::create([
            'nome' => $request->nome,
        ]);

        return response()->json($areaTematica, 201);
    }

    public function show($id)
    {
        $areaTematica = AreaTematica::findOrFail($id);
        return response()->json($areaTematica);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $areaTematica = AreaTematica::findOrFail($id);
        $areaTematica->update([
            'nome' => $request->nome,
        ]);

        return response()->json($areaTematica, 200);
    }

    public function destroy($id)
    {
        $areaTematica = AreaTematica::findOrFail($id);
        $areaTematica->delete();

        return response()->json(null, 204);
    }
}
