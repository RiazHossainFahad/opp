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

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@check')->name('login.validate');

Route::get('/change-password', function () {
    return view('login.change_password');
});

Route::get('/register','SignupController@index')->name('signup.index');
Route::post('/register','SignupController@create')->name('signup.create');
Route::get('/register/ajax/{value}','SignupController@getEmail')->name('signup.getEmail');