<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Instrutor;

class InstrutorController extends Controller
{
    public function instrutorId($instrutor_id) {
        return view('instrutor')->with('instrutor', Instrutor::find($instrutor_id));
    }

    public function meusCursos() {
        return view('cursosInstrutor');
    }

    public function instrutorPerfil(){
        return view('instrutorPerfil');
    }
}
