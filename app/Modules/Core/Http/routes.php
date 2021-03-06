<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'core'], function() {
	Route::get('/', function() {
		dd('This is the Core module index page.');
	});
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});