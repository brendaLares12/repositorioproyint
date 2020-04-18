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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/plantilla', function(){
    return view("layouts.libreria");
});


//MUESTRA UNA LISTA DE PRODUCTOS
Route::get('/productos', 'ProductoController@directory');

//MUESTRA LA VISTA CON EL FORMULARIO PARA CREAR EL PRODUCTO
Route::get('/producto/crear', 'ProductoController@create');

//CREA Y ALMACENA UN PRODUCTO DENTRO DE LA BD
Route::post('/producto/crear', 'ProductoController@store');

//MUESTRA UN PRODUCTO ESPECÍFICO (POR SU ID)

Route::get('/producto/{id}', 'ProductoController@show');

//MUESTRA EL FORMULARIO PARA EDITAR UN PRODUCTO
Route::get('/producto/{id}/editar', 'ProductoController@edit');

//ACTUALIZA EL PRODUCTO EN LA BD (SE LO BUSCA POR SU ID)
Route::post('/producto/{id}', 'ProductoController@update');

//ELIMINA UN PRODUCTO ESPECÍFICO EN LA BD
Route::delete('/producto/{id}', 'ProductoController@destroy');

//Ruta de la vista que muestra la lista de literatura universal
Route::get()