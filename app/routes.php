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

//hello
Route::get('/', function()
{
	return View::make('hello');
});

//testapp
Route::get('/testapp', function()
{
	return View::make('index');
});

//Objects
Route::resource('objects', 'ObjectsController');

//Images
Route::resource('images', 'ImagesController');

//TEMP
Route::get('/users', function()
{
    return 'Users!';
});