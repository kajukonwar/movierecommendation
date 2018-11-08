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
use GuzzleHttp\Exception\GuzzleException;


Route::get('/', function () {

    
    return view('index');
});


Route::resource('genres', 'GenreController');

Route::get('movies/genre/{genre}', 'MovieController@getByGenre');
