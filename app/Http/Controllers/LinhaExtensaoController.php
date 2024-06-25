<?php

namespace App\Http\Controllers;

use App\Models\LinhaExtensao;
use Illuminate\Http\Request;

class LinhaExtensaoController extends Controller
{
    public function index()
    {
        $linhasExtensao = LinhaExtensao::all();
        return response()->json($linhasExtensao);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $linhaExtensao = LinhaExtensao::create($request->all());

        return response()->json($linhaExtensao, 201);
    }

    public function show($id)
    {
        $linhaExtensao = LinhaExtensao::findOrFail($id);
        return response()->json($linhaExtensao);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $linhaExtensao = LinhaExtensao::findOrFail($id);
        $linhaExtensao->update($request->all());

        return response()->json($linhaExtensao, 200);
    }

    public function destroy($id)
    {
        $linhaExtensao = LinhaExtensao::findOrFail($id);
        $linhaExtensao->delete();

        return response()->json(null, 204);
    }
}
