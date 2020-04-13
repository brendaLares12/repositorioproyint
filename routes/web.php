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


Route::get('/listado-papeleria', 'ProductoController@directory');

Route::get('/listado-papeleria/crear', 'ProductoController@create');

Route::post('/listado-papeleria', 'ProductoController@store');