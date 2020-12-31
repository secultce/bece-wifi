<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@index']);
Route::get('/logout', [ 'as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::post('/authenticate', 'Auth\LoginController@authenticate');

Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/users', 'UserController@index')->middleware('auth');
Route::post('/users', 'UserController@store')->middleware('auth');
Route::put('/users/{id}', 'UserController@update')->middleware('auth');

Route::get('/visitors', 'VisitorController@index')->middleware('auth');
Route::post('/visitors', 'VisitorController@store')->middleware('auth');
Route::put('/visitors/{id}/voucher', 'VisitorController@voucher')->middleware('auth');
Route::put('/visitors/{id}', 'VisitorController@update')->middleware('auth');

Route::get('/vouchers', 'VoucherController@index')->middleware('auth');
Route::post('/vouchers', 'VoucherController@store')->middleware('auth');





// Route::post('users', 'UserController');

// Route::get('vouchers', 'UserController');

// Auth::routes();

// Route::get('/visitors', 'VisitorController@index')->name('visitor');
