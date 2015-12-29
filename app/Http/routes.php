<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, Get, put, delete
*/

//Examples
/*
Route::get('test', function () {
    return "HolA!";
});
Route::get('nombre/{nombre?}', function ($nombre = "Emanuel") {
    return "HolA!".$nombre;
});
*/
//Views Controllers
Route::get( '/', 'FrontController@index' );
Route::get( 'index', 'FrontController@index' );
Route::get( 'contact', 'FrontController@contact' );
Route::get( 'reviews', 'FrontController@review' );
Route::get( 'login', 'FrontController@login' );
Route::get( 'admin', 'FrontController@admin' );
Route::get( 'logout', 'LogController@logout' );

Route::get( 'listGenres', 'GenderController@listing' );
Route::resource( 'log', 'LogController' );
Route::resource( 'user', 'UsuarioController' );
Route::resource( 'genders', 'GenderController' );
// Route::get('ruta','TestController@start');
// Route::get('names/{name}','TestController@fname');
// Con esta declaracion genero multiples rutas
// Route::resource('movie', 'MovieController');
