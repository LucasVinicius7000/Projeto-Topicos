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
    return view('index');
})-> name('index');
/*
Route::get('/compre-agora', function () {
    return view('compre-agora');
})-> name('compre_agora');*/

Route::get('/compre-agora','App\Http\Controllers\ClientesController@create');
Route::post('/compre-agora','App\Http\Controllers\ClientesController@store')->name('compre-agora');

Route::get('/compre-agora','App\Http\Controllers\ProdutosController@create');
Route::post('/compre-agora','App\Http\Controllers\ProdutosController@store')->name('compre-agora');

Route::get('/quem-somos', function () {
    return view('quem-somos');
})-> name('quem_somos');

Route::get('/cadastro', function () {
    return view('cadastro');
}) -> name('cadastro');
