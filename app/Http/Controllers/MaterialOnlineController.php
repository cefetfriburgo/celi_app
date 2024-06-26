<?php

namespace App\Http\Controllers;

use App\Models\MaterialOnline;
use Illuminate\Http\Request;

class MaterialOnlineController extends Controller
{
    public function index()
    {
        $materiaisOnline = MaterialOnline::all();
        return response()->json($materiaisOnline);
    }

    public function store(Request $request)
    {
        $request->validate([
            'link_pasta' => 'required|string',
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        $materialOnline = MaterialOnline::create($request->all());

        return response()->json($materialOnline, 201);
    }

    public function show($id)
    {
        $materialOnline = MaterialOnline::findOrFail($id);
        return response()->json($materialOnline);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'link_pasta' => 'required|string',
            'atividade_id' => 'required|exists:atividades,id',
        ]);

        $materialOnline = MaterialOnline::findOrFail($id);
        $materialOnline->update($request->all());

        return response()->json($materialOnline, 200);
    }

    public function destroy($id)
    {
        $materialOnline = MaterialOnline::findOrFail($id);
        $materialOnline->delete();

        return response()->json(null, 204);
    }
}
