<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| crearContacto editarContactos  $nombreContacto,$numeroTelefono,$area, $actividad, $empresa, $descripcion
*/

Route::get('login/{usr}/{pwd}','ControlladorUsuario@dbLogin')->middleware('cors');
Route::get('crearUsuario/{nombre}/{correo}/{pwd}/{tipoUsuario}','ControlladorUsuario@createUser')->middleware('cors'); 

Route::get('crearContacto/{nombreContacto}/{numeroTelefono}/{area}/{actividad}/{empresa}/{descripcion}','ControladorContacto@crearContacto')->middleware('cors');
Route::get('modificarContacto/{id}/{nombreContacto}/{numeroTelefono}/{area}/{actividad}/{empresa}/{descripcion}','ControladorContacto@editarContactos')->middleware('cors');

Route::get('listaUsuarios','ControladorContacto@listaUsuarios')->middleware('cors');

