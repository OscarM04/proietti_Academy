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