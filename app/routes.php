<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Patterns
Route::pattern('id', '[0-9]+');


Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::guest('auth/login');
});

Route::get('/', 'HomeController@index');

Route::get('spot/list','SpotController@liste');
Route::get('spot/show','SpotController@show');
Route::get('spot/info/{id}','SpotController@info');
Route::resource('comment','CommentController');
Route::resource('spot','SpotController');

Route::group(array('prefix' => 'user'), function(){
	Route::resource('','UserController');
	Route::get('/{id}','UserController@show');
	Route::post('/{id}/', 'UserController@update');
	Route::get('/{id}/photo', 'UserController@photo');
	Route::get('/{id}/{more}','UserController@show');
});



Route::group(array('before' => 'auth'), function(){
		Route::get('spot/create', 'SpotController@create');
		Route::put('photo/spot/{id}', 'PhotoController@spot');
		Route::get('profil','UserController@profil');
		Route::get('profil/edit', 'UserController@edit');
		Route::put('profil/edit','UserController@update');
		Route::get('profil/photo', 'UserController@photo');
});


Route::controller('auth', 'AuthController');
Route::controller('password', 'RemindersController');