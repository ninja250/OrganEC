<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();

Route::get('/home','HomeController@index');
Route::post('/home','HomeController@index');
Route::get('/detail','HomeController@detail');
Route::post('/cart','HomeController@cart');
Route::get('/cart','HomeController@cart2');
Route::post('/buy','HomeController@buy');
Route::get('/delete','HomeController@delete');
