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
    $albums = \App\Album::all();
    return view('welcome', ['albums' => $albums]);
});

Route::get('/music/new', function () {
    return view('music/new');
});

Route::get('/music/edit', function () {
    return view('music/edit');
});

Route::get('/music/show', function () {
    return view('music/show');
});

Route::get('/artist/new', function () {
    return view('music/new');
});

Route::get('/artist/edit', function () {
    return view('music/edit');
});

Route::get('/artist/show', function () {
    return view('music/show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
