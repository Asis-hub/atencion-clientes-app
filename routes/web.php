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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name("clientes.index");
Route::get('/clientes/form', 'App\Http\Controllers\ClientesController@form')->name("clientes.form");
Route::post('/clientes/create', 'App\Http\Controllers\ClientesController@store')->name("clientes.store");
Route::get('/clientes/{id}', 'App\Http\Controllers\ClientesController@show')->name("clientes.show");
Route::get('/clientes/{id}/edit', 'App\Http\Controllers\ClientesController@edit')->name("clientes.edit");
Route::put('/clientes/{id}/update', 'App\Http\Controllers\ClientesController@update')->name("clientes.update");
Route::delete('clientes/{id}', 'App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy');


Route::get('/solicitudes', 'App\Http\Controllers\SolicitudesController@index')->name("solicitudes.index");
Route::get('/solicitudes/form', 'App\Http\Controllers\SolicitudesController@form')->name("solicitudes.form");
Route::post('/solicitudes/create', 'App\Http\Controllers\SolicitudesController@store')->name("solicitudes.store");
Route::get('/solicitudes/{id}', 'App\Http\Controllers\SolicitudesController@show')->name("solicitudes.show");
Route::put('/solicitudes/{id}/edit', 'App\Http\Controllers\SolicitudesController@edit')->name("solicitudes.edit");
Route::get('/solicitudes/{id}/update', 'App\Http\Controllers\SolicitudesController@updateFields')->name("solicitudes.update");

/** *
 *   - Define las rutas y crea los controladores necesarios para gestionar las operaciones CRUD de clientes y solicitudes.
    * - Las rutas podrían ser: `clientes`, `clientes/create`, `clientes/{id}`, `clientes/{id}/edit`, `solicitudes`, `solicitudes/create`, `solicitudes/{id}`, `solicitudes/{id}/edit`.
 *  
*/