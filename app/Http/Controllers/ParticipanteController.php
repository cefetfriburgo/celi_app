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

    /**
     * Retorna os cursos do participante
     */

    public function showCursos($aluno_id) {

        return view('meusCursos');
    }
    /**
     * Retorna a tela do perfil do participante
     */
    public function showPerfil(){
        return view('alunoPerfil');
    }

    /**
     * Retorna a tela inicial do participante
     */
    public function showTelaInicialAluno(){
        return view('telaInicialAluno');
    }

    /**
     * Retorna a tela de cadastro dos participantes
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
    /**
     * Retorna a tela de histórico do aluno
     */
    public function showTelaHistoricoAluno($aluno_id){
        return view('telaHistoricoAluno');
    }
}
