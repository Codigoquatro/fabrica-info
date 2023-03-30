<?php

use App\Http\Controllers\TarefaController;
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


//Route::resource('tarefa','TarefaController');
//Route::get('/tarefa', [TarefaController::class, 'create']);
Route::controller(TarefaController::class)->group(function () {
    Route::get('/tarefa', 'create');
    Route::post('/tarefa', 'store');
});
