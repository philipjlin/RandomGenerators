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
Route::get('/', 'HomeController@getIndex');

Route::get('/loremipsum', 'LoremIpsumController@getIndex');

Route::post('/loremipsum', 'LoremIpsumController@postIndex');

Route::get('/randomuser', 'RandomUserController@getIndex');

Route::post('/randomuser', 'RandomUserController@postIndex');

Route::get('/test', function(){

    echo "test";
});
