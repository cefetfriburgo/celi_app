<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
    public function index()
    {
        $bairros = Bairro::all();
        return response()->json($bairros);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $bairro = Bairro::create($request->all());

        return response()->json($bairro, 201);
    }

    public function show($id)
    {
        $bairro = Bairro::findOrFail($id);
        return response()->json($bairro);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $bairro = Bairro::findOrFail($id);
        $bairro->update($request->all());

        return response()->json($bairro, 200);
    }

    public function destroy($id)
    {
        $bairro = Bairro::findOrFail($id);
        $bairro->delete();

        return response()->json(null, 204);
    }
}
