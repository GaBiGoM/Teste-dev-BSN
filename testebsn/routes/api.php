<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\LinguagemController;
use App\Http\Controllers\VagaController;
use App\Models\Linguagem;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Linguagem
Route::get('listarlinguagem', 'App\Http\Controllers\LinguagemController@getlinguagem');

Route::get('linguagems/{id}', [LinguagemController::class, 'getlinguagemId']);

Route::post('addLinguagem', [LinguagemController::class, 'addLinguagem']);

Route::put('updatelinguagem/{id}', [LinguagemController::class,'updateLinguagem']);

Route::delete('deleteLinguagem/{id}', [LinguagemController::class, 'deleteLinguagem']);

//Vaga
Route::get('listarvaga', 'App\Http\Controllers\VagaController@getlvaga');

Route::get('vaga/{id}', [VagaController::class, 'getvagaId']);

Route::post('addVaga', [VagaController::class, 'addVaga']);

Route::put('updatevaga/{id}', [VagaController::class,'updateVaga']);

Route::delete('deletevaga/{id}', [VagaController::class, 'deleteVaga']);

//Candidato
Route::get('listarcandidato', 'App\Http\Controllers\CandidatoController@getlinguagem');

Route::get('candidato/{id}', [CandidatoController::class, 'getcandidatoId']);

Route::post('addLinguagem', [CandidatoController::class, 'addCandidato']);

Route::put('updatecandidato/{id}', [CandidatoController::class,'updateCandidato']);

Route::delete('deleteCandidato/{id}', [CandidatoController::class, 'deleteCandidato']);
