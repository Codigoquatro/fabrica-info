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
    return 'Sistema de Gestão de Tarefas';
});

Route::get('/tarefas', function () {
    return 'Lista todas as Tarefas';
});

Route::get('/tarefas/{id_tarefa}', function ($id) {
    return 'Tarefa = '.$id;
});

Route::resource('tarefa','TarefaController');