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
    trigger_error(1);
    trigger_error(2);
    trigger_error(3);
	return view('welcome');
});

Route::get('/', [
	'as' => 'root',
	'uses' => 'WelcomeController@index',
]);


    trigger_error('nb1');