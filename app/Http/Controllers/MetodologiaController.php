<?php

namespace App\Http\Controllers;

use App\Models\Metodologia;
use Illuminate\Http\Request;

class MetodologiaController extends Controller
{
    public function index()
    {
        $metodologias = Metodologia::all();
        return response()->json($metodologias);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $metodologia = Metodologia::create($request->all());

        return response()->json($metodologia, 201);
    }

    public function show($id)
    {
        $metodologia = Metodologia::findOrFail($id);
        return response()->json($metodologia);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $metodologia = Metodologia::findOrFail($id);
        $metodologia->update($request->all());

        return response()->json($metodologia, 200);
    }

    public function destroy($id)
    {
        $metodologia = Metodologia::findOrFail($id);
        $metodologia->delete();

        return response()->json(null, 204);
    }
}
