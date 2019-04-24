<?php

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

Route::get('/', 'FuncionarioController@index');

Route::get('/novo', 'FuncionarioController@novo');

Route::post('/salvar', 'FuncionarioController@salvar');

Route::get('/editar/{url}', 'FuncionarioController@editar');

Route::put('/editarSalvar/{id}', 'FuncionarioController@editarSalvar');

Route::get('/excluir/{id}', "FuncionarioController@excluir");
