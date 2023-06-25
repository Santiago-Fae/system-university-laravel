<?php

use App\Models\Universidade;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/universidade', function () {
    return Universidade::all(); 

});

Route::get('/aluno', [\App\Http\Controllers\AlunoController::class, 'index']);
Route::get('/aluno/{aluno}', [\App\Http\Controllers\AlunoController::class, 'show']);
Route::post('/aluno', [\App\Http\Controllers\AlunoController::class, 'store']);
Route::post('/aluno/{aluno}', [\App\Http\Controllers\AlunoController::class, 'update']);
Route::post('/aluno/delete/{aluno}', [\App\Http\Controllers\AlunoController::class, 'destroy']);

Route::get('/curso', [\App\Http\Controllers\CursoController::class, 'index']);
Route::get('/curso/{curso}', [\App\Http\Controllers\CursoController::class, 'show']);
Route::post('/curso', [\App\Http\Controllers\CursoController::class, 'store']);
Route::post('/curso/{curso}', [\App\Http\Controllers\CursoController::class, 'update']);
Route::post('/curso/delete/{curso}', [\App\Http\Controllers\CursoController::class, 'destroy']);

Route::get('/disciplina', [\App\Http\Controllers\DisciplinaController::class, 'index']);
Route::get('/disciplina/{disciplina}', [\App\Http\Controllers\DisciplinaController::class, 'show']);
Route::post('/disciplina', [\App\Http\Controllers\DisciplinaController::class, 'store']);
Route::post('/disciplina/{disciplina}', [\App\Http\Controllers\DisciplinaController::class, 'update']);
Route::post('/disciplina/delete/{disciplina}', [\App\Http\Controllers\DisciplinaController::class, 'destroy']);

Route::get('/matricula', [\App\Http\Controllers\MatriculaController::class, 'index']);
Route::get('/matricula/{matricula}', [\App\Http\Controllers\MatriculaController::class, 'show']);
Route::post('/matricula', [\App\Http\Controllers\MatriculaController::class, 'store']);
Route::post('/matricula/{matricula}', [\App\Http\Controllers\MatriculaController::class, 'update']);
Route::post('/matricula/delete/{matricula}', [\App\Http\Controllers\MatriculaController::class, 'destroy']);

//Route::get('/universidade', [\App\Http\Controllers\UniversidadeController::class, 'index']);
Route::get('/universidade/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'show']);
Route::post('/universidade', [\App\Http\Controllers\UniversidadeController::class, 'store']);
Route::post('/universidade/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'update']);
Route::post('/universidade/delete/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'destroy']);

Route::get('/curso', [\App\Http\Controllers\CursoController::class, 'index']);
