<?php

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

Route::get('/aluno', [\App\Http\Controllers\AlunoController::class, 'index']);
Route::get('/aluno/{aluno}', [\App\Http\Controllers\AlunoController::class, 'show']);
Route::post('/aluno', [\App\Http\Controllers\AlunoController::class, 'store']);
Route::put('/aluno/{aluno}', [\App\Http\Controllers\AlunoController::class, 'update']);
Route::delete('/aluno/{aluno}', [\App\Http\Controllers\AlunoController::class, 'destroy']);

Route::get('/curso', [\App\Http\Controllers\CursoController::class, 'index']);
Route::get('/curso/{curso}', [\App\Http\Controllers\CursoController::class, 'show']);
Route::post('/curso', [\App\Http\Controllers\CursoController::class, 'store']);
Route::put('/curso/{curso}', [\App\Http\Controllers\CursoController::class, 'update']);
Route::delete('/curso/{curso}', [\App\Http\Controllers\CursoController::class, 'destroy']);

Route::get('/disciplina', [\App\Http\Controllers\DisciplinaController::class, 'index']);
Route::get('/disciplina/{disciplina}', [\App\Http\Controllers\DisciplinaController::class, 'show']);
Route::post('/disciplina', [\App\Http\Controllers\DisciplinaController::class, 'store']);
Route::put('/disciplina/{disciplina}', [\App\Http\Controllers\DisciplinaController::class, 'update']);
Route::delete('/disciplina/{disciplina}', [\App\Http\Controllers\DisciplinaController::class, 'destroy']);

Route::get('/matricula', [\App\Http\Controllers\MatriculaController::class, 'index']);
Route::get('/matricula/{matricula}', [\App\Http\Controllers\MatriculaController::class, 'show']);
Route::post('/matricula', [\App\Http\Controllers\MatriculaController::class, 'store']);
Route::put('/matricula/{matricula}', [\App\Http\Controllers\MatriculaController::class, 'update']);
Route::delete('/matricula/{matricula}', [\App\Http\Controllers\MatriculaController::class, 'destroy']);

Route::get('/universidade', [\App\Http\Controllers\UniversidadeController::class, 'index']);
Route::get('/universidade/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'show']);
Route::post('/universidade', [\App\Http\Controllers\UniversidadeController::class, 'store']);
Route::put('/universidade/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'update']);
Route::delete('/universidade/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'destroy']);
