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
    return view('auth.login');
});
//Route::resource('/', 'ClientesController');
Route::resource('clientes', 'ClientesController');
Route::resource('operadores', 'OperadoresController');
Route::resource('provedores', 'ProvedoresController');
Route::resource('rutas', 'RutasController');
Route::resource('unidades', 'UnidadesController');
Route::resource('datosFacturacions', 'DatosFacturacionController');
Route::resource('usuarios', 'UsuariosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
