<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function cursos() {

        return view('cursos');
    }

    public function get($curso_id){
        // return "ola mundo";

        $curso = Curso::find($curso_id);
        return $curso->turmas();

        //return view('curso')->with("curso", $curso);
    }

    public function create(){
        return view('cadastrarCurso');
    }

    public function store(Request $request){
        $curso = new Curso();
        $curso->nome = $request->nome;
        $curso->descricao = $request->descricao;
        $curso->carga_horaria = $request->cargaHoraria;
        /*$curso->telefone = $request->telefone;
        $curso->endereco = $request->endereco;
        $curso->cpf = $request->cpf;*/

        $curso->save();

        return redirect('/');
    }

    public function getInformacoes(){
        return view ('eventoInformacao');
    }
}
