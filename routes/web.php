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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/causes', function () {
    return view('causes');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/give', function () {
    return view('give');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/single-causes', function () {
    return view('single-causes');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
