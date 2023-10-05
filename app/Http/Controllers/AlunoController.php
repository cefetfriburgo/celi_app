<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use PhpOption\None;

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
    public function create(){
        return view('CadastroAluno');
    }

    public function store(Request $request){
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->telefone = $request->telefone;
        $aluno->endereco = $request->endereco;
        $aluno->cpf = $request->cpf;
        //$aluno->matricula = $request->matricula;

        $aluno->save();
        return redirect('/');
    }
    public function telaHistoricoAluno($aluno_id){
        return view('telaHistoricoAluno');
    }
}
