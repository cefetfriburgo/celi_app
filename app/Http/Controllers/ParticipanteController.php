<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use PhpOption\None;

class ParticipanteController extends Controller
{
    public function index()
    {
        return view('aluno')->with('alunos', Aluno::all());
    }

    public function show($aluno_id) {
        return view('aluno')->with('aluno', Aluno::find($aluno_id));
    }

    public function showCursos($aluno_id) {

        return view('meusCursos');
    }

    public function showPerfil(){
        return view('alunoPerfil');
    }
    public function showTelaInicialAluno(){
        return view('telaInicialAluno');
    }

    /**
     * Retorna a tela de cadastro de alunos
     */
    public function create(){
        return view('cadastroAluno');
    }

    /**
     * Salva um novo aluno no banco de dados da aplicação
     */
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
    public function showTelaHistoricoAluno($aluno_id){
        return view('telaHistoricoAluno');
    }
}
