<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::auth();

//Route::resource('/home', 'HomeController@index');
//Carga de Datos Via JSON

Route::get('/getEntidad', 'EntidadController@getEntidades');
Route::get('/getDepartamento', 'DepartamentoController@getDepartamentos');
Route::get('/getUnidad/{id}', 'EunidadController@getUnidades');
Route::get('/getProvincia/{id}', 'ProvinciaController@getProvincias');
Route::get('/getMunicipio/{id}', 'MunicipioController@getMunicipios');

//Rutas REST
Route::resource('/dashboard', 'DashboardController');
Route::resource('/aevaluar', 'ProyectoaevaluarController');
Route::resource('/entidad', 'EntidadController');
Route::resource('/unidad', 'EunidadController');
Route::resource('/provincia', 'ProvinciaController');
Route::resource('/municipio', 'MunicipioController');
