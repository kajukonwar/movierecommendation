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

Route::get('/', 'HomeController@index');

Route::post('rating', 'RatingController@store');

Route::resource('genres', 'GenreController');

Route::resource('movies', 'MovieController');

Route::get('movies/genre/{genre}', 'MovieController@getByGenre');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
