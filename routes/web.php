<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProponenteController;
use App\Http\Controllers\LoginController;
use App\Models\Evento;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//INDEX & VARIADAS
Route::get('/', [IndexController::class, 'showHome'])->name('showHome');
Route::get('/contatos', [IndexController::class,'showContatos']);
Route::get('/comoParticipar', [IndexController::class,'showComoParticipar'])->name('showComoParticipar');
Route::get('/sobreNos', [IndexController::class,'showSobreNos'])->name('showSobreNos');
Route::get('/telaInicialProponente',[IndexController::class,'showTelaInicialProponente']);
Route::get('/telaInicialAdmin',[IndexController::class,'showTelaInicialAdmin']);
//Route::get('/telaPropostaCursos',[IndexController::class,'telaPropostaCursos']); Não está funcionando

//ALUNOS
Route::get('/alunos', [ParticipanteController::class, 'index'])->name('index');
Route::get('/alunos/cadastrar', [ParticipanteController::class,'create']);
Route::post('/alunos/criar', [ParticipanteController::class,'store']);
Route::get('/alunos/{aluno_id}', [ParticipanteController::class, 'show'])->name('show');
Route::get('/alunos/{aluno_id}/perfil', [ParticipanteController::class, 'showPerfil'])->name('showPerfil');
Route::get('/alunos/{aluno_id}/cursos', [ParticipanteController::class, 'showCursos'])->name('showCurso');
Route::get('/alunos/{aluno_id}/telaInicial', [ParticipanteController::class, 'showTelaInicial'])->name('showTelaInicialAluno');
Route::get('/alunos/{aluno_id}/telaHistorico', [ParticipanteController::class,'showTelaHistoricoAluno']);

//Eventos
Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/cadastrar', [EventoController::class,'create']);
Route::post('/eventos/criar', [EventoController::class,'store']);
Route::get('/eventos/{evento_id}/informacao', [EventoController::class,'showInformacoes']);
Route::get('/eventos/{evento_id}', [EventoController::class, 'get'])->name('cursoId');
Route::post('/eventos/{evento_id}/{aluno_id}/inscrever', [EventoController::class, 'inscrever']);

//INSTRUTOR
Route::get('/proponente/{intrutor_id}', [ProponenteController::class, 'show'])->name('show');
Route::get('/proponente/{intrutor_id}/perfil', [ProponenteController::class, 'showPerfil'])->name('showPerfil');
Route::get('/proponente/{intrutor_id}/cursosInstrutor', [ProponenteController::class, 'showCursos'])->name('showCursos');
//LOGIN & Cadastro
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::get('/cadastro', [CadastroController::class,'create'])->name('create');
Route::get('/cadastro/proponente', [CadastroController::class,'createProponente'])->name('createProponente');
Route::get('/cadastro/administrador', [CadastroController::class,'createAdministrador'])->name('createAdministrador');

/*
Route::post();
Route::put();
Route::delete();
*/

/**
 * Regra para formação de rota:
 * referencia: https://www.brunobrito.net.br/api-restful-boas-praticas/
 *
 *  /[[modulo]]/[[recurso]]/[[operacao]]/[[params]]
 *  - módulo: o sistema é construído por módulos: RH, Atendidos, Patrimônio, Estoque, Sócios, etc
 *  - recurso: qualquer entidade manipulada no módulo referido. Por exemplo: rh/funcionario ou rh/voluntario
 *  - operação: apenas para navegação. Para realizar a operação, sinalize com o método HTTP referente:
 *      >> get: consulta e listagem.
 *          >>> Exemplo: pesquisar o funcionario id=1:
 *          No web.php
 *              Route::get('/rh/funcionarios/{id}', 'App\Http\Controllers\FuncionariosController@get');
 *          No FuncionariosController:
 *              public function get(id){ ... }
 *          Chamando no navegador: wegia.org/rh/funcionarios/1
 *
 *          >>> Exemplo: listar todos funcionarios:
 *          No web.php
 *              Route::get('/rh/funcionarios', 'App\Http\Controllers\FuncionariosController@list');
 *          No FuncionariosController:
 *              public function list(){ ... }
 *          Chamando no navegador: wegia.org/rh/funcionarios
 *
 *      >> post: cadastro
 *          >>> Exemplo: cadastrar funcionario:
 *          No web.php
 *              Route::post('/rh/funcionarios', 'App\Http\Controllers\FuncionariosController@save');
 *          No FuncionariosController:
 *              public function save(){ ... }
 *
 *      >> put: edição
 *          >>> Exemplo: alterar o funcionario id=1:
 *          No web.php
 *              Route::put('/rh/funcionarios/{id}', 'App\Http\Controllers\FuncionariosController@update');
 *          No FuncionariosController:
 *              public function update(id){ ... }
 *
 *      >> delete: exclusão
 *          >>> Exemplo: remover o funcionario id=1:
 *          No web.php
 *              Route::delete('/rh/funcionarios/{id}', 'App\Http\Controllers\FuncionariosController@delete');
 *          No FuncionariosController:
 *              public function delete(id){ ... }
 *
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
