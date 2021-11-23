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

/* Rotas que retornam as views */

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/quem-somos', function () {
    return view('quem-somos');
})->name('quem_somos');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/adm', function () {
    return view('adm');
})->name('adm');

/* Fim das Rotas que retornam as views */

/* Rota que cadastra pedido de um cliente */
Route::post('/compre-agora','App\Http\Controllers\PedidosController@store')->name('pedido');
/* Fim da Rota que cadastra pedido de um cliente */

/* Rota que cadastra um usuário */
Route::post('/cadastro','App\Http\Controllers\UserController@store')->name('cadastrar');
/* Fim da Rota que cadastra um usuário */

/* Rota que loga o usuário */
Route::get('/compre-agora','App\Http\Controllers\UserController@login')->name('logar');
/* Fim da Rota que loga o usuário */

Route::post('/painel-adm', 'App\Http\Controllers\AdmsController@login')->name('painel');

