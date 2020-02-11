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

// Users 

Route::get('/', 'HomeController@index');

Route::post('/User', 'HomeController@search');

Route::get('/User', 'HomeController@user');

Route::get('/User/Export', 'HomeController@export');

Route::get('/Create', 'HomeController@create');

Route::post('/Create', 'HomeController@store');

Route::get('/User/{user}', 'HomeController@show');

Route::delete('/User/{user}', 'HomeController@destroy');

Route::get('/User/{user}/edit', 'HomeController@edit');

Route::patch('/User/{user}', 'HomeController@update');


// Students

Route::get('/Student', 'StudentController@index');
