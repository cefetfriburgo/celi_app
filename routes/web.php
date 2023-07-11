<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LoginController;

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
Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/contatos', [IndexController::class,'contatos']);
Route::get('/comoParticipar', [IndexController::class,'comoParticipar'])->name('comoParticipar');
Route::get('/sobreNos', [IndexController::class,'sobreNos'])->name('sobreNos');
//ALUNOS
Route::get('/alunos', [AlunoController::class, 'all'])->name('alunos');
Route::get('/alunos/{aluno_id}', [AlunoController::class, 'alunosId'])->name('alunosId');
Route::get('/alunos/{aluno_id}/cursos', [AlunoController::class, 'listCursos'])->name('alunosCurso');
//CURSOS
Route::get('/cursos', [CursoController::class, 'cursos'])->name('cursos');
//LOGIN & Cadastro
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::get('/cadastro', [CadastroController::class,'cadastro'])->name('cadastro');

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