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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\Frontend\HomePageController@index')->name('frontend_homepage');
Route::get('/produtos', 'App\Http\Controllers\Frontend\ProdutoPageController@index')->name('frontend_produto_page');

Route::get('/sobre_nos', 'App\Http\Controllers\Frontend\PaginaController@index');
Route::get('/login', 'App\Http\Controllers\Frontend\ClienteAuthController@login');

Route::get('/produto/{categoria}/{produto}', 'App\Http\Controllers\Frontend\ExibirProdutoController@exibirProduto')->name('cliente_exibir_produto');


