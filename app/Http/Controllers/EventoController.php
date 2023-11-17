<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Aluno;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function eventos(){
        $eventos = Evento::all();
        return view('eventos', ['eventos' => $eventos]);
    }

    public function cadastrarEventos() {
        return view('cadastroEventos');
    }
    public function alunosEmEventos(){
        $alunos = Aluno::all();
        return view('listaAlunosEvento', ['alunos' => $alunos]);
    }
}
