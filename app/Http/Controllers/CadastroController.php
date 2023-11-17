<?php

namespace App\Http\Controllers;

class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    /*public function aluno(){
        return view('CadastroAluno');
    }*/

    /**
     * Retorna a tela de cadastro do proponente
     */
    public function createProponente(){
        return view('cadastroProponente');
    }

    /**
     * Retorna a tela de cadastro do administrador
     */
    public function createAdministrador(){
        return view('cadastroAdministrador');
    }


}