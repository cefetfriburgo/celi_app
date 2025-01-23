<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AreaTematicaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LinhaExtensaoController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\PublicoAlvoController;
use App\Http\Controllers\BairroController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\InfraestruturaController;
use App\Http\Controllers\MaterialFisicoController;
use App\Http\Controllers\MaterialOnlineController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('user', [UserController::class, 'store']);

Route::post('teste_login', [AuthenticatedSessionController::class, 'store']);

Route::get('/atividade_andamento', [AtividadeController::class, 'indexEmAndamento']);
Route::get('/atividade_andamento/{id}', [AtividadeController::class, 'showEmAndamento']);

Route::get('atividade', [AtividadeController::class, 'index']);
Route::get('atividade/{id}', [AtividadeController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    //Logout
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
});

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    //User
    Route::get('user', [UserController::class, 'index']);
    Route::get('user/{id}', [UserController::class, 'show']);
    Route::put('user/{id}', [UserController::class, 'update']);
    Route::delete('user/{id}', [UserController::class, 'destroy']);

    //Atividade
    Route::post('atividade', [AtividadeController::class, 'store']);
    Route::put('atividade/{id}', [AtividadeController::class, 'update']);
    Route::delete('atividade/{id}', [AtividadeController::class, 'destroy']);
    Route::put('atividade/{id}/status', [AtividadeController::class, 'atualizarStatus']); //Publicar Atividade

    //Participante
    Route::get('participante', [ParticipanteController::class, 'index']);
    Route::get('participantes/{atividadeId}', [ParticipanteController::class, 'getParticipantesPorAtividade']);
    Route::post('participante', [ParticipanteController::class, 'store']);
});


    //Adicionar nas próximas versões
    //AreaTematica
    // Route::get('area_tematica', [AreaTematicaController::class, 'index']);
    // Route::post('area_tematica', [AreaTematicaController::class, 'store']);
    // Route::get('area_tematica/{id}', [AreaTematicaController::class, 'show']);
    // Route::put('area_tematica/{id}', [AreaTematicaController::class, 'update']);
    // Route::delete('area_tematica/{id}', [AreaTematicaController::class, 'destroy']);

    //Categoria
    // Route::get('categoria', [CategoriaController::class, 'index']);
    // Route::post('categoria', [CategoriaController::class, 'store']);
    // Route::get('categoria/{id}', [CategoriaController::class, 'show']);
    // Route::put('categoria/{id}', [CategoriaController::class, 'update']);
    // Route::delete('categoria/{id}', [CategoriaController::class, 'destroy']);

    //LinhaExtensao
    // Route::get('linha_extensao', [LinhaExtensaoController::class, 'index']);
    // Route::post('linha_extensao', [LinhaExtensaoController::class, 'store']);
    // Route::get('linha_extensao/{id}', [LinhaExtensaoController::class, 'show']);
    // Route::put('linha_extensao/{id}', [LinhaExtensaoController::class, 'update']);
    // Route::delete('linha_extensao/{id}', [LinhaExtensaoController::class, 'destroy']);

    //Metodologia
    // Route::get('metodologia', [MetodologiaController::class, 'index']);
    // Route::post('metodologia', [MetodologiaController::class, 'store']);
    // Route::get('metodologia/{id}', [MetodologiaController::class, 'show']);
    // Route::put('metodologia/{id}', [MetodologiaController::class, 'update']);
    // Route::delete('metodologia/{id}', [MetodologiaController::class, 'destroy']);

    //Publico Alvo
    // Route::get('publico_alvo', [PublicoAlvoController::class, 'index']);
    // Route::post('publico_alvo', [PublicoAlvoController::class, 'store']);
    // Route::get('publico_alvo/{id}', [PublicoAlvoController::class, 'show']);
    // Route::put('publico_alvo/{id}', [PublicoAlvoController::class, 'update']);
    // Route::delete('publico_alvo/{id}', [PublicoAlvoController::class, 'destroy']);

    //Bairro
    // Route::get('bairro', [BairroController::class, 'index']);
    // Route::post('bairro', [BairroController::class, 'store']);
    // Route::get('bairro/{id}', [BairroController::class, 'show']);
    // Route::put('bairro/{id}', [BairroController::class, 'update']);
    // Route::delete('bairro/{id}', [BairroController::class, 'destroy']);

    //Endereço
    // Route::get('endereco', [EnderecoController::class, 'index']);
    // Route::post('endereco', [EnderecoController::class, 'store']);
    // Route::get('endereco/{id}', [EnderecoController::class, 'show']);
    // Route::put('endereco/{id}', [EnderecoController::class, 'update']);
    // Route::delete('endereco/{id}', [EnderecoController::class, 'destroy']);

    //Implementar posteriormente

    // //Infraestrutura
    // Route::get('infraestrutura', [InfraestruturaController::class, 'index']);
    // Route::post('infraestrutura', [InfraestruturaController::class, 'store']);
    // Route::get('infraestrutura/{id}', [InfraestruturaController::class, 'show']);
    // Route::put('infraestrutura/{id}', [InfraestruturaController::class, 'update']);
    // Route::delete('infraestrutura/{id}', [InfraestruturaController::class, 'destroy']);

    // //Material Fisico
    // Route::get('material_fisico', [MaterialFisicoController::class, 'index']);
    // Route::post('material_fisico', [MaterialFisicoController::class, 'store']);
    // Route::get('material_fisico/{id}', [MaterialFisicoController::class, 'show']);
    // Route::put('material_fisico/{id}', [MaterialFisicoController::class, 'update']);
    // Route::delete('material_fisico/{id}', [MaterialFisicoController::class, 'destroy']);

    // //Material Online
    // Route::get('material_online', [MaterialOnlineController::class, 'index']);
    // Route::post('material_online', [MaterialOnlineController::class, 'store']);
    // Route::get('material_online/{id}', [MaterialOnlineController::class, 'show']);
    // Route::put('material_online/{id}', [MaterialOnlineController::class, 'update']);
    // Route::delete('material_online/{id}', [MaterialOnlineController::class, 'destroy']);
    // Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);