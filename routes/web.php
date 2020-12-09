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

//home page route
Route::get('/visitor', function(){
    return view('visitor');
});
//voucher page route
Route::get('/voucher', function(){
    return view('voucher');
});
//user page route
Route::get('/users', function(){
    return view('user');
});
