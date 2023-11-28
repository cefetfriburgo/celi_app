<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Instrutor;
use App\Models\Local;

class IndexController extends Controller
{
    /**
     * Retorna a página home da aplicação
     */
    public function showHome() {
/*
        return ['cursos' => Curso::all(),
                'alunos' => Aluno::all(),
                'instrutores' => Instrutor::all(),
                'locais' => Local::all()];
                
        */
        return view('index')->with('cursos', []);
        //return view('index')->with('cursos', Curso::all());
    }

    /**
     * Retorna a tela de informações de contato
     */
    public function showContatos(){
        return view('contatos');
    }

    /**
     * Retorna a tela de instruções de como participar
     */
    public function showComoParticipar(){
        return view('comoParticipar');
    }

    /**
     * Retorna a tela de informações sobre os colaboradores do CELi
     */
    public function showSobreNos(){
        return view('sobreNos');
    }

    /**
     * Retorna a tela de boas vindas do proponente
     */
    public function showTelaInicialProponente(){
        return view('telaInicialProponente');
    }

    /**
     * Retorna a tela de boas vindas do administrador
     */
    public function showTelaInicialAdmin(){
        return view('telaInicialAdmin');
    }
}
