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

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/', 'WelcomeController@index')->name('welcome'); 


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');    



Route::get('/resultados', 'ResultadosController@view')->name('resultados');
Route::post('/resultados', 'ResultadosController@view')->name('resultadosup');
 
 Route::get('/propiedades', 'TodasPropiedadesController@view')->name('propiedades');
Route::get('/propiedad/{item}', 'PropiedadController@view')->name('propiedad');

Route::get('/contacto', 'ContactoController@view')->name('contacto');
Route::post('/contacto', 'ContactoController@send')->name('enviarmail');

Route::get('/innovacion', 'InnovacionController@view')->name('innovacion');
Route::get('/responsabilidad', 'ResponsabilidadController@view')->name('responsabilidad');
Route::get('/diferenciadores', 'DiferenciadoresController@view')->name('diferenciadores');
Route::get('/admin/publicar', 'publicarController@index')->name('publicar');
Route::post('/admin/publicar', 'publicarController@store')->name('publicarup');

Route::get('/admin/lista_propiedades', 'ListraPropiedadesController@index')->name('prop_list');
Route::get('/editar_propiedad/{item}', 'EditarPropiedadController@view')->name('editar_propiedad');
Route::post('/editar_propiedad/{item}', 'EditarPropiedadController@actualizar')->name('actualizar_propiedad');

Route::get('/admin/desactivadas', 'DesactivadasController@index')->name('desactivada');
Route::post('/admin/desactivadas', 'DesactivadasController@activar')->name('activar_prop'); 

Route::get('/admin/visuales', 'VisualesController@index')->name('visuales');
Route::post('/admin/visuales', 'VisualesController@store')->name('visualesup');
//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/acerca_de', 'ReglasController@acerca')->name('acerca');
Route::get('/terminos', 'ReglasController@terminos')->name('terminos');
Route::get('/politicas', 'ReglasController@politicas')->name('politicas');