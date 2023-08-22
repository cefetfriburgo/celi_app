<?php

namespace App\Http\Controllers;

class CadastroController extends Controller
{
    public function cadastro()
    {
        return view('cadastro');
    }

    public function aluno(){
        return view('CadastroAluno');
    }

    public function proponente(){
        return view('CadastroProponente');
    }

    public function administrador(){
        return view('CadastroAdministrador');
    }


}