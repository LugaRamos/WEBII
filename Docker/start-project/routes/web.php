<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/eixo', 'App\Http\Controllers\EixoController');
Route::resource('/curso', 'App\Http\Controllers\CursoController');
Route::resource('/nivel', 'App\Http\Controllers\NivelController');
Route::resource('/permission', 'App\Http\Controllers\PermissionController');
Route::resource('/aluno', 'App\Http\Controllers\AlunoController');
Route::resource('/turma', 'App\Http\Controllers\TurmaController');
Route::resource('/categoria', 'App\Http\Controllers\CategoriaController');
Route::resource('/declaracao', 'App\Http\Controllers\DeclaracaoController');
Route::resource('/comprovante', 'App\Http\Controllers\ComprovanteController');
Route::resource('/user', 'App\Http\Controllers\UserController');

