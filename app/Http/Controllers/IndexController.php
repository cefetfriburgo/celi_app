<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Instrutor;
use App\Models\Local;

class IndexController extends Controller
{
    public function home() {
/*
        return ['cursos' => Curso::all(),
                'alunos' => Aluno::all(),
                'instrutores' => Instrutor::all(),
                'locais' => Local::all()];
                
        */
        return view('index')->with('cursos', Curso::all());
    }

    public function contatos(){
        return view('contatos');
    }
}
