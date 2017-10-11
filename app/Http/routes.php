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

Route::get('/', 'startController@index')->middleware('avoidUser');

Route::get('/news', 'newsController@index')->middleware('avoidUser');
Route::get('/contact','contactController@index')->middleware('avoidUser');
Route::get('/tutorials','tutorialsController@index')->middleware('avoidUser');
Route::get('/maps', 'mapsController@index')->middleware('avoidUser');

Route::get('/credits', 'creditsController@index')->middleware('avoidUser');

Route::get('/formularioGeneral','cartaController@index')->middleware('studentComplete');

Route::get('/forms', 'formsController@index')->middleware('studentComplete');
Route::get('/lifeInsurance', 'lifeInsuranceController@index')->middleware('studentComplete');

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/signup','Auth\AuthController@getRegister');
Route::post('/signup', 'Auth\AuthController@postRegister');

Route::get('/logout','Auth\AuthController@getLogout');

Route::get('/profile', 'profileController@index')->middleware('studentComplete');
Route::get('/profile/newStudent', 'profileController@create')->middleware('student');
Route::post('/profile/newStudent', 'profileController@store')->middleware('student');
Route::post('/profile/check', 'profileController@checkPassword')->middleware('studentComplete');

Route::get('/profile/edit', 'profileController@edit')->middleware('studentComplete');
Route::post('/profile/edit', 'profileController@update')->middleware('studentComplete');
Route::post('/profile/photoDel', 'profileController@destroyPhoto')->middleware('studentComplete');
Route::post('/profile/photoUp', 'profileController@updatePhoto')->middleware('studentComplete');

Route::post('/profile/check1', 'profileController@checkPassword1')->middleware('studentComplete');
Route::get('/profile/edit1', 'profileController@edit1')->middleware('studentComplete');
Route::post('/profile/edit1', 'profileController@update1')->middleware('studentComplete');
// ---------------------------------------------------------------------------------------

Route::get('/admin', 'adminController@index');
Route::get('/admin/blog', 'adminController@blog');
Route::get('/admin/lists', 'adminController@lists');

Route::post('/admin/newMessage', 'adminController@newMessage'); ///////////////////////////////

Route::post('/admin/listsAll/pagination/{list}', 'adminController@pagination');

Route::get('/admin/student/{id}', 'cartaController@administrador');

Route::get('/admin/lists/{id}', 'adminController@show');
Route::post('/admin/lists/{id}', 'adminController@edit');
Route::delete('/admin/lists', 'adminController@destroy');

Route::get('/admin/add', 'adminController@addBlog');

Route::get('/admin/config', 'adminController@configIndex');
Route::post('/admin/config/{variable}', 'adminController@checkPassword');
Route::get('/admin/config/insert/{variable}', 'adminController@getRegisterWindow');
Route::post('/admin/config/insert/{variable}', 'adminController@insertRegister');
Route::patch('/admin/config/insert/{variable}', 'adminController@updateRegister');
Route::delete('/admin/config/insert/{variable}', 'adminController@deleteRegister');

Route::post('/admin/configs/extraConfig', 'adminController@specialFunctions');

Route::get('/admin/search', 'adminController@search');
Route::post('/admin/search', 'adminController@getSearch');

//-----------------

Route::post('/admin/add/info','adminController@updateInfo');
Route::delete('/admin/add/info','adminController@deletInfo');
Route::patch('/admin/add/info','adminController@newInfo');

Route::patch('/admin/add/images','adminController@newImage');
Route::post('/admin/add/images','adminController@updateImage');
Route::delete('/admin/add/images','adminController@deletImage');

Route::patch('/admin/add/video','adminController@newVideo');
Route::post('/admin/add/video','adminController@updateVideo');
Route::delete('/admin/add/video','adminController@deletVideo');

Route::patch('/admin/add/tutorials','adminController@newTuto');
Route::post('/admin/add/tutorials','adminController@updateTuto');
Route::delete('/admin/add/tutorials','adminController@deletTuto');

//-----------------

Route::get('/forgetPass','forgetPassController@search');
Route::post('/forgetPass','forgetPassController@getSearch');

Route::get('/forget/questionPass/{id}', 'forgetPassController@showInf');

Route::post('/questionPass/edit', 'forgetPassController@update2');
Route::post('/questionPass/edit1', 'forgetPassController@update3');

//--------------------

Route::get('/2016670126', 'backController@index');
Route::get('/blocked', 'startController@stop');

//--------------------

Route::get('/devel', 'develController@index');
Route::post('/devel', 'develController@test');
Route::get('/devel/test', 'develController@test2');

//--------------------

Route::get('/person/profile/{type}', 'shareController@profile');
Route::post('/person/profile/{type}', 'shareController@profilePassword');
Route::patch('/person/profile/{type}', 'shareController@editProfile');
Route::post('/person/photoDel/{type}', 'shareController@destroyPhoto');
Route::post('/person/photoUp/{type}', 'shareController@updatePhoto');

Route::post('/message', 'shareController@message');
Route::get('/person/messages/{type}', 'shareController@getMessages');
//Route::post('/person/newMessage', 'shareController@newMessage');
Route::post('/person/messageEdit/{message}', 'shareController@editMessage');
Route::post('/person/messageDel', 'shareController@destroyMessage');

//-----------------------

Route::get('/ExportExcel','ExcelController@exportUsers');
Route::get('/ExportExcelAll','ExcelController@All');