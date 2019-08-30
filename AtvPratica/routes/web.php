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

Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/welcome', function(){
    return view('welcome');
});
Route::get('/geral','PaginasController@geral');
Route::get('/clientes', 'PaginasController@cliente');
Route::get('/adm', 'PaginasController@adm');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/tests', 'TestController');
Route::resource('/procedures', 'ProcedureController');
