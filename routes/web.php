
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

Route::resource('almacen/herramienta','HerramientasController');
// esto estoy subiendo
Route::resource('almacen/articulo','ArticulosController');

	// mi comentario
<<<<<<< HEAD

// web.php
=======
	// segundo comentario
>>>>>>> 0e4a58d23ae95d230bfdc635a3cb7bc24c25a529

Route::resource('almacen/carrito', 'CarritoController');
 // que onda soy sixto y modifique dos lineas
// segunda linea
