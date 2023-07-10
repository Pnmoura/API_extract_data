<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Apresenta todos os dados
Route::get('/usuarios', [UsuariosController::class, 'index']);

//Salvar
Route::post('/usuarios', [UsuariosController::class, 'store']);

//Busca por id
Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);

//Atualiza as informações do usuario pelo ID
Route::put('/usuarios/{id}', [UsuariosController::class, 'update']);

//Deleta o usuário de acordo com o ID passado
Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);
