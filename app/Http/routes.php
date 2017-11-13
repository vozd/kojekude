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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('about','WelcomeController@about');
Route::get('portfolio','WelcomeController@portfolio');
Route::get('logo','WelcomeController@logo');
Route::get('branding','WelcomeController@branding');
Route::get('brochures','WelcomeController@brochures');
Route::get('corporate','WelcomeController@corporate');
Route::get('packaging','WelcomeController@packaging');
Route::get('web','WelcomeController@web');
Route::get('contact','WelcomeController@contact');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
