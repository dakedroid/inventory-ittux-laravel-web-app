
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
Route::get('/',function (){
  return view ('auth/login');
});
/*Route::get('/', 'HomeController@index');*/
Route::resource('almacen/inventario', 'InventarioController');
Route::resource('almacen/herramienta','HerramientasController');
Route::resource('almacen/articulo','ArticulosController');
Route::resource('almacen/carrito', 'CarritoController');
Route::resource('almacen/salidas', 'SalidasController');
Route::resource('almacen/salidas_prestamo', 'Salidas_prestamoController');
Route::get('/generar_salida','CarritoController@update');
Route::get('/terminar_salida','SalidasController@destroy');
Route::get('/pdf/prestamo','Salidas_prestamoController@store');
Route::get('/pdf/salida_depto','SalidasController@store');
Route::post('/pdf/salida_depto','SalidasController@store');
Route::resource('almacen/historial_salida', 'Historial_salidasController');
Route::resource('almacen/historial_altas', 'Historial_altasController');
Route::resource('almacen/prestamo', 'PrestamoController');
Route::resource('almacen/acercade', 'acercadeController');
Route::resource('almacen/ayuda', 'AyudaController');
Route::resource('almacen/usuario', 'UsuarioController');

/*Auth::routes();*/

Route:: auth();
Route::get('/home', 'HomeController@index');
