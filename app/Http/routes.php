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

Route::get('/user/signup', 'UserController@signup');
Route::post('/user/signup', 'UserController@create');
Route::post('/user/login', 'UserController@login');
Route::get('/user/logout', 'UserController@logout');

Route::get('/shop', 'ShopController@index');
Route::get('/shop/create', 'ShopController@create');
Route::post('/shop/create', 'ShopController@postCreate');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
