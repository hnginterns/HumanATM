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
    return view('location-listing');
})->name('location');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'UserDashboardController@index')->name('dashboard');

Route::get('/403', function () {
    return view('errors.403');
});
 Route::get('/admin', 'AdminDashboardController@index')->name('admin');
 Route::get('/admin/pending', 'AdminDashboardController@pending')->name('admin/pending');
  Route::get('/admin/total', 'AdminDashboardController@total')->name('admin/total');
Route::get('/{name}', function ($name) {
    return view($name);
})->middleware('auth');


