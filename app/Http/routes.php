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


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'posts'], function(){
    Route::get('/{id}', "PostController@postDetail");
    Route::get('/', "PostController@postList");
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){

});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/plus/{id}',['middleware' => ['auth', 'web']], "PostController@plus");

Route::group(['middleware' => ['web', 'auth']], function () {
	Route::post('/plus/{id}','PostController@plus');
});