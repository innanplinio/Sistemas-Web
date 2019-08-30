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
/*
Route::get('/', function () {

    $nome = "Fernando";
    $usuario="Innan";
    $alunos = ['Ana', 'Maria', 'Braga', 'Lokona'];
    return view('principal')
        ->with('nome', $nome)
        ->with('user', $usuario)
        ->with('alunos', $alunos);


});
*/

Route::get('/', 'PaginasController@index');
Route::get('/welcome', 'PaginasController@about');
Route::get('/alunos/listar', 'PaginasController@listar');

Route::resource('/estados', 'EstadoController');

/*
Route::get('/welcome', function(){
    return view('welcome');
});
*/
