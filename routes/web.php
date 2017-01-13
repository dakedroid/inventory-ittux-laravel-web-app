
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::resource('almacen/inventario', 'InventarioController');
Route::resource('almacen/herramienta','HerramientasController');
Route::resource('almacen/articulo','ArticulosController');
Route::resource('almacen/carrito', 'CarritoController');
Route::resource('almacen/salidas', 'SalidasController');
Route::get('/pdf', 'CarritoController@update');
Route::resource('almacen/historial_salida', 'Historial_salidasController');
Route::resource('almacen/historial_altas', 'Historial_altasController');
Route::resource('almacen/prestamo', 'PrestamoController');
Route::resource('almacen/acercade', 'acercadeController');
Route::resource('almacen/ayuda', 'AyudaController');