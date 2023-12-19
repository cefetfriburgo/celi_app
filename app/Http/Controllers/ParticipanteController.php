<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Evento;
use PhpOption\None;
use Illuminate\Support\Facades\DB;

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
        $eventos = DB::table('eventos')
        ->join('aluno_tem_eventos', 'eventos.id', '=', 'aluno_tem_eventos.evento_id')
        ->where('aluno_tem_eventos.aluno_id', $aluno_id)
        ->select('eventos.*')
        ->get();
        return view('meusCursos', ['eventos' => $eventos]);
    }
    /**
     * Retorna a tela do perfil do participante
     */
    public function showPerfil(){
        //fazer lógica para pegar os dados do aluno do banco de dados
        return view('alunoPerfil');
    }

    /**
     * Retorna a tela inicial do participante
     */
    public function showTelaInicialAluno($idAluno){
        $aluno = Aluno::find($idAluno);
        $eventos = Evento::all();
        return view('telaInicialAluno', ['aluno' => $aluno, 'eventos' => $eventos]);
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
        //Pegar dados relativos ao histórico do aluno no banco de dados
        return view('telaHistoricoAluno');
    }
}
