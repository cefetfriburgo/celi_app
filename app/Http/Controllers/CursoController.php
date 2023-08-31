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
}
