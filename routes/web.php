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

Route::get('/', 'Auth\LoginController@index');
Route::get('/login', 'Auth\LoginController@index');
Route::post('/logincontroller', 'Auth\LoginController@enviar');
Route::get('/vouchers', 'VoucherController@index');
Route::get('/users', 'UserController@index');
Route::get('/visitors', 'VisitorController@index');

Route::post('/visitors', 'VisitorController@store');
Route::put('/visitors/{id}/voucher', 'VisitorController@voucher');
Route::put('/visitors/{id}', 'VisitorController@update');





// Route::post('users', 'UserController');

// Route::get('vouchers', 'UserController');

// Auth::routes();

// Route::get('/visitors', 'VisitorController@index')->name('visitor');
