<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    $artists = \App\Artist::paginate(6);
    return view('welcome', ['artists' => $artists]);
});

Auth::routes();

Route::get('/user/{user}/edit', 'Auth\RegisterController@edit')->middleware('auth')->name('user.edit');
Route::delete('/user/{user}', 'Auth\RegisterController@delete')->middleware('auth')->name('user.delete');

Route::resource('/artist', 'ArtistsController')->middleware('auth')->except(['index', 'show']);
Route::resource('/album', 'AlbumController')->middleware('auth')->except(['index', 'show']);
Route::resource('/music', 'MusicController')->middleware('auth')->except(['index', 'show']);

// Rotas spotify
Route::get('/login/spotify', 'SpotifyController@spotifyLogin');
Route::get('/callback', 'SpotifyController@spotifyCallback');
Route::get('/denied', 'SpotifyController@denied');
Route::get('/login/refresh', 'SpotifyController@spotifyRefresh');
Route::get('/fetch', 'SpotifyController@retrieveData')->name('fetch');


// Rotas publicas
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/artist', 'ArtistsController@index')->name('artist.index');
Route::get('/artist/{artist}', 'ArtistsController@show')->name('artist.show');
Route::get('/album', 'AlbumController@index')->name('album.index');
Route::get('/album/{album}', 'AlbumController@show')->name('album.show');
Route::get('/music', 'MusicController@index')->name('music.index');
Route::get('/music/{music}', 'MusicController@show')->name('music.show');

Route::post('/search', 'SearchController@search')->name('search');