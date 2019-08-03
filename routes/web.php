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

/*
Aprendible.com = Route::get('/', function) para responder a la raíz del sitio.

Aprendible.com/contacto = Route::get('/contacto', function) Para responder a la vista de contacto.

function es una función anónima o closure, lo que retornemos es lo que verá el usuario
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/contacto', function(){
	return "Hola desde la página de contacto";
});

Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
	return "Saludos " . $nombre;
});

/*
Name Routes
  	Aún si modificamos la ruta, siempre haremos rerefencia a través del nombre de la ruta.
	Esta NO es la manera correcta de devolver contenido HTML.
	Route::get('contactanos', function(){
		return "Sección de contactos";
	})->name('contactos');

	Route::get('/', function(){
		echo "<a href='" . route("contactos") . "'>Contactos 1</a><br>";
		echo "<a href='" . route("contactos") . "'>Contactos 2</a><br>";
		echo "<a href='" . route("contactos") . "'>Contactos 3</a><br>";	
		echo "<a href='" . route("contactos") . "'>Contactos 4</a><br>";
		echo "<a href='" . route("contactos") . "'>Contactos 5</a><br>";
	});

*/

/*Route::get('/', function(){
	$nombre = "Jorge";
	
		para returnar la variable a la vista podemos hacerlo de las siguientes maneras:
		view('home')->with('nombre', $nombre);
		view('home')->with(['nombre' => $nombre]); como array 
		view('home', ['nombre' => $nombre]); como segundo argumento o parámetro de la funciób view
		view('home', compact('nombre')); usando la función compact, siempre que el argumento de esta tenga el mismo nombre de la variable que se desea enviar. Nos devuelve ['nombre' => $nombre]
	
	return view('home', compact('nombre'));
})->name('home');	
*/



Route::view('/', 'home')->name('home'); //Mostrar vistas que no requieran mucha lógica.
Route::view('/about', 'about')->name('about'); 
Route::view('/portfolio', 'portfolio')->name('portfolio'); 
Route::view('/contact', 'contact')->name('contact'); 
