<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\LinguagemController;
use App\Http\Controllers\VagaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('linguagem', LinguagemController::class);

Route::resource('vaga', VagaController::class);

Route::resource('candidato', CandidatoController::class);

