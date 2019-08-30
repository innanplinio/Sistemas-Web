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
/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'PaginasController@index');

Route::get('/welcome', 'PaginasController@about');
Route::get('/geral', 'PaginasController@geral');
Route::get('/clientes', 'PaginasController@clientes');
Route::get('/adm', 'PaginasController@adm')->middleware('auth');

Route::resource('/cliente', 'ClienteController');
Route::resource('/tipo', 'TipoController');
Route::resource('/tran', 'TranController');

Route::post('/selectclient', 'TranController@selectClient')->name('select');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
