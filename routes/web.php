<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AlunoController;



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


Route::get('/', [IndexController::class, 'home']);

Route::get('/alunos/{aluno_id}', [AlunoController::class, 'getById']);
Route::get('/alunos/{aluno_id}/cursos', [AlunoController::class, 'listCursos']);
