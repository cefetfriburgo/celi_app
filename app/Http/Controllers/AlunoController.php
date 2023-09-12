<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;

class AlunoController extends Controller
{
    public function all()
    {
        return view('aluno')->with('alunos', Aluno::all());
    }

    public function alunosId($aluno_id) {
        return view('aluno')->with('aluno', Aluno::find($aluno_id));
    }

    public function meusCursos($aluno_id) {

        return view('meusCursos');
    }

    public function alunoPerfil(){
        return view('alunoPerfil');
    }
    public function telaInicialAluno(){
        return view('telaInicialAluno');
    }
}
