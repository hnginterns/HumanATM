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


Route::get('/location','TransactionController@index')->name('location');
Route::post('/fund','WalletsController@cardToWallet');
Route::post('/otp','WalletsController@otp');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin', 'AdminDashboardController@index')->name('admin');
Route::get('/admin/pending', 
	'AdminDashboardController@pending')->name('admin/pending');
Route::get('/admin/humanAtm', 'AdminDashboardController@humanAtm')->name('admin/humanAtm');
Route::get('/admin/total', 
	'AdminDashboardController@total')->name('admin/total');
Route::get('/admin/completed', 
	'AdminDashboardController@completed')->name('admin/completed');

Route::get('/403', function () {
    return view('errors.403');
})->name('403');
Route::get('/404', function () {
    return view('errors.404');
})->name('404');
 Route::get('/invite', function(){
 	return view('invite');
 });
  

/*  Transaction */

Route::get('/dashboard', 'UserDashboardController@index')->name('dashboard');
Route::get('/human-atm/{id}', 'TransactionController@humanAtmProfile');
Route::get('/withdraw/humanAtm/{id}', 'TransactionController@showWithdrawalForm');
Route::post('/withdraw/{id}', 'TransactionController@processWithdraw')->middleware('auth');
Route::get('/withdraw/confirm/receipt/{withdrawal_id}', 'TransactionController@confirmWithdrawal');

Route::get('/{name}', function ($name) {
    return view($name);
});

