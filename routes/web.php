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
    return view('login');
});

<<<<<<< HEAD
Route::get('/login', function() {
    return view('login');
});

=======
//home page route
Route::get('/home', function(){
    return view('home');
});
>>>>>>> 1963f757c234573f64891afe4c50108006065f21
