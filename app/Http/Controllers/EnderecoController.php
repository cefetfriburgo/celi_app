<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Endereco::all();
        return response()->json($enderecos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'logradouro' => 'required|string',
            'numero' => 'nullable|string',
            'ponto_referencia' => 'nullable|string',
            'bairro_id' => 'required|exists:bairros,id',
        ]);

        $endereco = Endereco::create($request->all());

        return response()->json($endereco, 201);
    }

    public function show($id)
    {
        $endereco = Endereco::findOrFail($id);
        return response()->json($endereco);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'logradouro' => 'required|string',
            'numero' => 'nullable|string',
            'ponto_referencia' => 'nullable|string',
            'bairro_id' => 'required|exists:bairros,id',
        ]);

        $endereco = Endereco::findOrFail($id);
        $endereco->update($request->all());

        return response()->json($endereco, 200);
    }

    public function destroy($id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();

        return response()->json(null, 204);
    }
}
