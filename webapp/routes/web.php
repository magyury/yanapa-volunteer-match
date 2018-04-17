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

Route::get('/foo/{name?}', function ($name=null) {
    return "Welcome to the Community $name!";
});

Route::get('/groups/{group_id?}', function ($deal_id) {
    return view('group');
});

Route::get('/create', function () {
    return view('create-group');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
