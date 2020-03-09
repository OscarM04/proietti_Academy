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

// Home Route
Route::get('/','HomeController@index');


// Directivos Routes 
Route::resource('/directivos','DirectivoController');
Route::get('/directivos/{id}/confirmDelete','DirectivoController@confirmDelete');

// Atletas Routes

Route::resource('/atletas','AtletaController');
Route::get('/atletas/{id}/confirmDelete','AtletaController@confirmDelete');

// Representantes Routes
Route::get('/atletas/{CIAtleta}/representantes','RepresentanteController@index');
Route::get('/atletas/{CIAtleta}/representantes/create','RepresentanteController@create');
Route::post('/atletas/{CIAtleta}/representantes@store', 'RepresentanteController@store');
