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

Route::get('/human-atm', function () {
    return view('human-atm-profile');
});
Route::get('/location', function () {
    return view('locationlisting');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/paybills', function () {
    return view('paybills');
});

Route::get('/{name}', function ($name) {
    return view($name);
});


