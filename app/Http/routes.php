<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'HomeController@accueil']);
Route::get('accueil', ['uses' => 'HomeController@accueil']);
Route::get('contact', ['uses' => 'HomeController@contact']);

Route::post('sendMessage', ['uses' => 'HomeController@sendMessage']);

Route::get('imageJson/{id?}', ['uses' => 'Backend\UploadController@imageJson']);
Route::get('fileJson/{id?}', ['uses' => 'Backend\UploadController@fileJson']);

Route::post('uploadFileRedactor/{id?}', 'Backend\UploadController@uploadFileRedactor');
Route::post('uploadRedactor/{id?}', 'Backend\UploadController@uploadRedactor');

Route::resource('page', 'PageController');

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
    Route::get('/', ['uses' => 'Backend\AdminController@index']);

    Route::post('page/sorting', ['uses' => 'Backend\PageController@sorting']);
    Route::resource('page', 'Backend\PageController');
    Route::resource('bloc', 'Backend\BlocController');
    Route::resource('news', 'Backend\NewsController');
    Route::resource('config', 'Backend\ConfigController');

});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');