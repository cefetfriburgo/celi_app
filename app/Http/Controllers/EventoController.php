<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Curso;

class EventoController extends Controller
{
    /**
     * Exibe todos os eventos cadastrados da aplicação na tela de eventos.
     */
    public function index() {
        $eventos = Curso::all();
        return view('eventos', ['eventos' => $eventos]);
    }

    public function get($curso_id){
        // return "ola mundo";

        $curso = Curso::find($curso_id);
        return $curso->turmas();

        //return view('curso')->with("curso", $curso);
    }

    /**
     * Retorna a tela de cadastro de um novo evento
     */
    public function create(){
        return view('cadastroEvento');//trocar o nome da view de "cadastrarCurso" para "cadastrarEvento"
    }


    /**
     * Salva um novo evento no banco de dados da aplicação
     */
    public function store(Request $request){
        $curso = new Curso(); //alterar nome da classe Curso para Evento
        $curso->nome = $request->nome;
        $curso->descricao = $request->descricao;
        $curso->carga_horaria = $request->cargaHoraria;
        $curso->tipo = $request->tipo;
        /*$curso->telefone = $request->telefone;
        $curso->endereco = $request->endereco;
        $curso->cpf = $request->cpf;*/

        $curso->save();

        return redirect('/');
    }

    /**
     * Retorna a tela de informações de um evento específico
     */
    public function showInformacoes(){
        return view ('eventoInformacao');
    }

    /**
     * Inscreve um participante na base de dados da aplicação e o relaciona com o evento correspondete
     */
    public function inscrever(){

    }
    public function alunosEmEventos(){
        $alunos = Aluno::all();
        return view('listaAlunosEvento', ['alunos' => $alunos]);
    }
}
