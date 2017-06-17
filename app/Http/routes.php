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
Route::get('/maps', 'mapsController@index');

Route::get('/forms', 'formsController@index');
Route::get('/lifeInsurance', 'lifeInsuranceController@index');

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/signup','Auth\AuthController@getRegister');
Route::post('/signup', 'Auth\AuthController@postRegister');

Route::get('/logout','Auth\AuthController@getLogout');

Route::get('/profile', 'profileController@index');
Route::get('/profile/newStudent', 'profileController@create');
Route::post('/profile/newStudent', 'profileController@store');
Route::post('/profile/check', 'profileController@checkPassword');
Route::get('/profile/edit', 'profileController@edit');
Route::post('/profile/edit', 'profileController@update');

// ---------------------------------------------------------------------------------------

Route::get('/admin', 'adminController@index');
Route::get('/admin/lists', 'adminController@lists');
Route::get('/admin/lists/{id}', 'adminController@show');
Route::post('/admin/lists/{id}', 'adminController@edit');

Route::get('/admin/add', 'adminController@addBlog');

Route::get('/admin/profile', 'adminController@profile');
Route::post('/admin/profile', 'adminController@profilePassword');
Route::patch('/admin/profile', 'adminController@editProfile');

Route::get('/admin/config', 'adminController@configIndex');
Route::post('/admin/config/{variable}', 'adminController@checkPassword');
Route::get('/admin/config/insert/{variable}', 'adminController@getRegisterWindow');
Route::post('/admin/config/insert/{variable}', 'adminController@insertRegister');
Route::patch('/admin/config/insert/{variable}', 'adminController@updateRegister');
Route::delete('/admin/config/insert/{variable}', 'adminController@deleteRegister');

//-----------------

Route::post('/admin/add/info','adminController@updateInfo');
Route::delete('/admin/add/info','adminController@deletInfo');
Route::patch('/admin/add/info','adminController@newInfo');

Route::patch('/admin/add/images','adminController@newImage');