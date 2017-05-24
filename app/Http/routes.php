<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'startController@index');

Route::get('/news', 'newsController@index');

Route::get('/contact','contactController@index');

Route::get('/register','registerController@index');
Route::post('/register', 'registerController@create');

