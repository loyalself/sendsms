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

Route::get('sendsms','SendsmsController@sendsms');
Route::get('sendsms1','Sendsms1Controller@sendsms1');
Route::any('register','RegisterController@register');
