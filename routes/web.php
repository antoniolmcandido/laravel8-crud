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

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('clientes', 'App\Http\Controllers\ClienteController@show');
Route::post('clientes/novo', 'App\Http\Controllers\ClienteController@store')->name('cadastro');
Route::get('clientes/novo', 'App\Http\Controllers\ClienteController@create')->name('cadastrar');
Route::get('clientes/editar/{id}', 'App\Http\Controllers\ClienteController@edit')->name('editar');
Route::post('clientes/editar/{id}', 'App\Http\Controllers\ClienteController@update')->name('atualizar');
Route::post('clientes/deletar/{id}', 'App\Http\Controllers\ClienteController@destroy')->name('excluir');