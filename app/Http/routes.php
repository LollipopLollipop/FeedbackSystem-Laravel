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

Route::get('/', function () {
    return view('index');
		#return 'Hello World';
});

Route::get('child', function () {
	return view('child');
});

Route::get('auth', 'FeedbackController@auth');
Route::post('create', 'FeedbackController@create');
Route::post('vote', 'FeedbackController@vote');
Route::get('presenter', 'FeedbackController@presenter');
Route::get('listener', 'FeedbackController@listener');

// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

