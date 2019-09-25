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
    return view('welcome');
});

Route::get('/ListarArtistas','ArtistaController@get');
Route::get('/ListarConD','ArtistaController@D');
Route::post('/Creacion','ArtistaController@crear');
Route::put('/ActualizarDato','ArtistaController@Actualizar');
Route::post('/EliminarDato','ArtistaController@Eliminar');
Route::post('/BuscarDato','ArtistaController@buscarId');

