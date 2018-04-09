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

//Home
Route::get('/', function () {
    return view('index');
});

//About
Route::get('/about', 'PostController@about');

//Portfolio
Route::get('/portfolio', 'PostController@portfolio');

//Graphics
Route::get('/graphics', 'PostController@graphics');

//Contact
Route::get('/contact', 'PostController@contact');
