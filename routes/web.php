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

Route::get('/', function () {
    $artists = \App\Artist::all();
    return view('welcome', ['artists' => $artists]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/artist', 'ArtistsController')->middleware('auth');
Route::resource('/album', 'AlbumController')->middleware('auth');
Route::resource('/music', 'MusicController')->middleware('auth');


Route::get('/login/spotify', 'SpotifyController@spotifyLogin')->name('login');
Route::get('/callback', 'SpotifyController@spotifyCallback');
Route::get('/denied', 'SpotifyController@denied');
Route::get('/login/refresh', 'SpotifyController@spotifyRefresh');