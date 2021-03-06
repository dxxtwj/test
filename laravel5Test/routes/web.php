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
    return view('welcome');
});

Route::group(['namespace' => 'Test', 'prefix'=>'test'],function() {
    Route::get('test','TestController@test');
    Route::get('mq','TestController@mq');
    Route::get('mqJieShou','TestController@mqJieShou');
    Route::get('login','TestController@login');
    Route::get('getOrder','TestController@getOrder');

});