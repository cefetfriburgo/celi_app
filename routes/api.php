<?php

use App\Http\Controllers\AreaTematicaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('area_tematica', [AreaTematicaController::class, 'index']);
Route::post('area_tematica', [AreaTematicaController::class, 'store']);
Route::get('area_tematica/{id}', [AreaTematicaController::class, 'show']);
Route::put('area_tematica/{id}', [AreaTematicaController::class, 'update']);
Route::delete('area_tematica/{id}', [AreaTematicaController::class, 'destroy']);