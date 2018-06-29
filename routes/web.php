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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/type','TypeController@type')->name('type');
Route::resource('item', 'ImageController');

/*
Route::get('/search/{id}', 'RoomController@show')->name('search');

Route::get('/room', 'RoomController@index')->name('retrieve');

Route::get('/upload','RoomController@create')->name('upload'); */
