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

//Ruta de vista de literatura universal
Route::get('/litUniversal', 'ProductoController@litUniversal');

//Ruta de vista de literatura Infantil/Juvenil
Route::get('/litJuvenil', 'ProductoController@litJuvenil');

//Ruta de vista de literatura Historia universal
Route::get('/historiaUniversal', 'ProductoController@histUniversal');

//Ruta de vista de Útiles escolares
Route::get('/utiles', 'ProductoController@utiles');

//Ruta de vista de Libretas y agendas
Route::get('/libAgendas', 'ProductoController@libretasAgendas');

//Ruta de vista de Tarjetas personalizadas
Route::get('/tarjetas', 'ProductoController@tarjetas');

//Ruta de crud de productos
Route::get('/crud-productos','ProductoController@crudProductos');

/////////////////////////////////////////////////////////////////////////

//MUESTRA LA VISTA CON EL FORMULARIO PARA CREAR UNA CATEGORIA
Route::get('/categoria/crear', 'CategoriaController@create')->middleware(['auth', 'isAdmin']);

//CREA Y ALMACENA UNA CATEGORIA DENTRO DE LA BD
Route::post('/categoria/crear', 'CategoriaController@store');

//Ruta de crud de categorias
Route::get('/crud-categorias','CategoriaController@crudCategorias');

//MUESTRA EL FORMULARIO PARA EDITAR UNA CATEGORIA
Route::get('/categoria/{id}/editar', 'CategoriaController@edit');

//ACTUALIZA LA CATEGORIA EN LA BD (SE LO BUSCA POR SU ID)
Route::post('/categoria/{id}', 'CategoriaController@update');

//ELIMINA UNA CATEGORÍA EN LA BD
Route::delete('/categoria/{id}', 'CategoriaController@destroy');