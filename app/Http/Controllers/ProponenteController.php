<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Instrutor;

class ProponenteController extends Controller
{
    
    public function show($instrutor_id) {
        return view('instrutor')->with('instrutor', Instrutor::find($instrutor_id));
    }

    /**
     * Retorna a tela de cursos a qual o proponente ministra ou participa
     */
    public function meusCursos() {
        return view('cursosInstrutor');
    }

    /**
     * Retorna a tela do perfil do instrutor
     */
    public function showPerfil(){
        return view('instrutorPerfil');
    }
    
}
