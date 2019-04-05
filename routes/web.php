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

Route::get('/change-password', 'ForgotPasswordController@index')->name('forgotPassword.index');
Route::post('/change-password', 'ForgotPasswordController@changePassword');

Route::get('/register','SignupController@index')->name('signup.index');
Route::post('/register','SignupController@create');
Route::get('/register/additional-info','SignupController@additionalInfo')->name('signup.additionalInfo');
Route::get('/register/ajax/{value}','SignupController@getEmail')->name('signup.getEmail');