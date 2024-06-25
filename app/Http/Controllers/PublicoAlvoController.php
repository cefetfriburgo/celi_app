<?php

namespace App\Http\Controllers;

use App\Models\PublicoAlvo;
use Illuminate\Http\Request;

class PublicoAlvoController extends Controller
{
    public function index()
    {
        $publicoAlvos = PublicoAlvo::all();
        return response()->json($publicoAlvos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $publicoAlvo = PublicoAlvo::create($request->all());

        return response()->json($publicoAlvo, 201);
    }

    public function show($id)
    {
        $publicoAlvo = PublicoAlvo::findOrFail($id);
        return response()->json($publicoAlvo);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
        ]);

        $publicoAlvo = PublicoAlvo::findOrFail($id);
        $publicoAlvo->update($request->all());

        return response()->json($publicoAlvo, 200);
    }

    public function destroy($id)
    {
        $publicoAlvo = PublicoAlvo::findOrFail($id);
        $publicoAlvo->delete();

        return response()->json(null, 204);
    }
}
