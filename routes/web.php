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
	if ( Auth::guest() ) {
    	return view('welcome');
	}
	else {
		return view('home');
	}
});


Route::get('/messages', ['as' => 'messages', 'uses' => 'HomeController@messages']);

Route::get('/newsfeed', ['as' => 'newsfeed', 'uses' => 'HomeController@newsfeed']);

Route::get('/photos', ['as' => 'photos', 'uses' => 'HomeController@photos']);

Route::get('/family', ['as' => 'family', 'uses' => 'HomeController@family']);

Route::get('/profile', ['as' => 'profile', 'uses' => 'HomeController@profile']);

Route::get('/help-and-settings', ['as' => 'help-and-settings', 'uses' => 'HomeController@help_and_settings']);

Auth::routes();

Route::get('/home', 'HomeController@index');
