<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Aluno;
use App\Models\AlunoTemEvento;
use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    private $id; //Atributo auxiliar para utilização da função showAlunosEmEventos
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
    public function showInformacoes($eventoID){
        $evento = Evento::find($eventoID);
        return view ('eventoInformacao', ['evento' => $evento]);
    }

    /**
     * Inscreve um participante na base de dados da aplicação e o relaciona com o evento correspondente
     */
    public function inscrever($eventoId, Request $request){
        //Implementar lógica para que não seja possível cadastrar um aluno em um evento que ele já está registrado como participante

        $alunoEvento = new AlunoTemEvento();
        $alunoEvento->aluno_id = $request->idAluno;
        $alunoEvento->evento_id = $eventoId;

        $alunoEvento->save();

        return redirect('/');
    
    }

    /**
     * Exibe todos os alunos inscritos em um determinado evento.
     */
    public function showAlunosEmEventos($eventoId){//Simplificar lógica
        $this->setId($eventoId);
        $alunos = DB::table('alunos')->join('aluno_tem_eventos', function (JoinClause $join){
            $join->on('alunos.id', '=', 'aluno_tem_eventos.aluno_id')
            ->where('aluno_tem_eventos.evento_id', '=', $this->getId());
        })->select('alunos.*')->get();

        $evento = Evento::find($eventoId);

        return view('listaAlunosEvento', ['alunos' => $alunos, 'evento' => $evento]);
    }

    private function setId($id){//Função auxiliar
        $this->id = $id;
    }

    private function getId(){//Função auxiliar
        return $this->id;
    }
}
