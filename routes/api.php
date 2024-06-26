<?php

use App\Http\Controllers\AreaTematicaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LinhaExtensaoController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\PublicoAlvoController;
use App\Http\Controllers\BairroController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\AtividadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//AreaTematica
Route::get('area_tematica', [AreaTematicaController::class, 'index']);
Route::post('area_tematica', [AreaTematicaController::class, 'store']);
Route::get('area_tematica/{id}', [AreaTematicaController::class, 'show']);
Route::put('area_tematica/{id}', [AreaTematicaController::class, 'update']);
Route::delete('area_tematica/{id}', [AreaTematicaController::class, 'destroy']);

//Categoria
Route::get('categoria', [CategoriaController::class, 'index']);
Route::post('categoria', [CategoriaController::class, 'store']);
Route::get('categoria/{id}', [CategoriaController::class, 'show']);
Route::put('categoria/{id}', [CategoriaController::class, 'update']);
Route::delete('categoria/{id}', [CategoriaController::class, 'destroy']);

//LinhaExtensao
Route::get('linha_extensao', [LinhaExtensaoController::class, 'index']);
Route::post('linha_extensao', [LinhaExtensaoController::class, 'store']);
Route::get('linha_extensao/{id}', [LinhaExtensaoController::class, 'show']);
Route::put('linha_extensao/{id}', [LinhaExtensaoController::class, 'update']);
Route::delete('linha_extensao/{id}', [LinhaExtensaoController::class, 'destroy']);

//Metodologia
Route::get('metodologia', [MetodologiaController::class, 'index']);
Route::post('metodologia', [MetodologiaController::class, 'store']);
Route::get('metodologia/{id}', [MetodologiaController::class, 'show']);
Route::put('metodologia/{id}', [MetodologiaController::class, 'update']);
Route::delete('metodologia/{id}', [MetodologiaController::class, 'destroy']);

//Publico Alvo
Route::get('publico_alvo', [PublicoAlvoController::class, 'index']);
Route::post('publico_alvo', [PublicoAlvoController::class, 'store']);
Route::get('publico_alvo/{id}', [PublicoAlvoController::class, 'show']);
Route::put('publico_alvo/{id}', [PublicoAlvoController::class, 'update']);
Route::delete('publico_alvo/{id}', [PublicoAlvoController::class, 'destroy']);

//Bairro
Route::get('bairro', [BairroController::class, 'index']);
Route::post('bairro', [BairroController::class, 'store']);
Route::get('bairro/{id}', [BairroController::class, 'show']);
Route::put('bairro/{id}', [BairroController::class, 'update']);
Route::delete('bairro/{id}', [BairroController::class, 'destroy']);

//Endereço
Route::get('endereco', [EnderecoController::class, 'index']);
Route::post('endereco', [EnderecoController::class, 'store']);
Route::get('endereco/{id}', [EnderecoController::class, 'show']);
Route::put('endereco/{id}', [EnderecoController::class, 'update']);
Route::delete('endereco/{id}', [EnderecoController::class, 'destroy']);

//AtividadeController
Route::get('atividade', [AtividadeController::class, 'index']);
Route::post('atividade', [AtividadeController::class, 'store']);
Route::get('atividade/{id}', [AtividadeController::class, 'show']);
Route::put('atividade/{id}', [AtividadeController::class, 'update']);
Route::delete('atividade/{id}', [AtividadeController::class, 'destroy']);