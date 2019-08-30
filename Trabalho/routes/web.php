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
Route :: get('/', 'PaginasController@index' );

Route :: get('/welcome','PaginasController@about');

Route :: get('/news','PaginasController@news');

Route :: get('/perfil','PaginasController@perfil');

Route :: resource('/usuarios', 'UsuarioController');

Route :: resource('/herois', 'HeroiController');

Route :: resource('/items', 'ItemController');

Route :: resource('/carteiras', 'CarteiraController');

Route :: resource('/itemuser', 'ItemuserController');

Route :: resource('/herouser', 'HerouserController');


//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
