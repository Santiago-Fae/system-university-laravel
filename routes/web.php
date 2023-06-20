<?php

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

Route::get('/universidade', [\App\Http\Controllers\UniversidadeController::class, 'index']);
Route::get('/universidade/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'show']);
Route::post('/universidade', [\App\Http\Controllers\UniversidadeController::class, 'store']);
Route::put('/universidade/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'update']);
Route::delete('/universidade/{universidade}', [\App\Http\Controllers\UniversidadeController::class, 'destroy']);


Route::get('/curso', [\App\Http\Controllers\CursoController::class, 'index']);
