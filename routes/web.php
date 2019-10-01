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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create', 'invoiceController@create');

Route::POST('/store', 'invoiceController@store');

Route::get('/driverCreate', 'invoiceController@driver_create');

Route::POST('/driver_store', 'driver_timeController@store');

Route::get('/driverTime', 'driver_timeController@userTickets');

Route::get('/showtiming', 'invoiceController@index');

Route::get('date/{id}', 'invoiceController@show');

Route::get('dates/{id}', 'invoiceController@showDriver');


Route::get('/showAll', 'invoiceController@showAll');

Route::get('/showToday', 'invoiceController@showToday');





