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


Route::get('/invite', ['as' => 'invite', 'uses' => 'HomeController@invite']);

Route::get('/referral/{id}', ['as' => 'referral', 'uses' => 'HomeController@referral']);

Route::post('/referral/confirm', ['as' => 'confirm_referral', 'uses' => 'HomeController@confirm_referral']);

Route::get('/messages', ['as' => 'messages', 'uses' => 'HomeController@messages']);

Route::get('/newsfeed', ['as' => 'newsfeed', 'uses' => 'HomeController@newsfeed']);

Route::get('/text_post/new', ['as' => 'new_text_post', 'uses' => 'PostController@new_text_post']);

Route::post('/text_post/new/submit', ['as' => 'submit_new_text_post', 'uses' => 'PostController@submit_new_text_post']);

Route::get('/image_post/new', ['as' => 'new_image_post', 'uses' => 'PostController@new_image_post']);

Route::post('/image_post/new/submit', ['as' => 'submit_new_image_post', 'uses' => 'PostController@submit_new_image_post']);

Route::get('/photos', ['as' => 'photos', 'uses' => 'HomeController@photos']);

Route::get('/family', ['as' => 'family', 'uses' => 'HomeController@family']);

Route::get('/profile', ['as' => 'profile', 'uses' => 'HomeController@profile']);

Route::get('/help-and-settings', ['as' => 'help-and-settings', 'uses' => 'HomeController@help_and_settings']);

Route::get('/welcome', ['as' => 'welcome', 'uses' => 'PagesController@welcome']);
Route::get('/privacy_policy', ['as' => 'privacy_policy', 'uses' => 'PagesController@privacy_policy']);
Route::get('/contact_us', ['as' => 'contact_us', 'uses' => 'PagesController@contact_us']);

Auth::routes();

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

// Messenger
Route::group(['middleware' => 'web'], function () {
	Route::Auth();
	Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');
});

Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
  	Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
   	Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
});


