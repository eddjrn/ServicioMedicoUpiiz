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
Route::get('/tutorials','tutorialsController@index');

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/signup','Auth\AuthController@getRegister');
Route::post('/signup', 'Auth\AuthController@postRegister');

Route::get('/logout','Auth\AuthController@getLogout');

Route::get('/profile', 'profileController@index');
Route::get('/profile/newStudent', 'profileController@create');
Route::post('/profile/newStudent', 'profileController@store');
Route::get('/profile/edit', 'profileController@edit');
Route::post('/profile/edit', 'profileController@update');

// ---------------------------------------------------------------------------------------

Route::get('/admin', 'adminController@index');
Route::get('/admin/lists', 'adminController@lists');
Route::get('/admin/lists/{id}', 'adminController@show');
