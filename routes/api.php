<?php

use App\Http\Controllers\AreaTematicaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LinhaExtensaoController;
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