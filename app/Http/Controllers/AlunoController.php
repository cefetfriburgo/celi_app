<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;

class AlunoController extends Controller
{
    //

    public function getById($aluno_id) {


        return view('aluno')->with('aluno', Aluno::find($aluno_id));
    }
}
