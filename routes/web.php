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

// home
Route::get('/','HomeController@home');
Route::get('/home','HomeController@home');
Route::get('/player','HomeController@player');

// musics
Route::resource('musics','MusicsController');

// artists
Route::get('/artists', 'ArtistsController@index');
Route::get('/artists/create', 'ArtistsController@create');
Route::post('/artists', 'ArtistsController@store');


// Route::get('/musics', 'MusicsController@index');
// Route::get('/musics/create', 'MusicsController@create');
// Route::get('/musics/{music}', 'MusicsController@show');
// Route::post('/musics', 'MusicsController@store');
// Route::get('/musics/{music}/edit', 'MusicsController@edit');
// Route::patch('/musics/{music}', 'MusicsController@update');
// Route::delete('/musics/{music}', 'MusicsController@destroy');

