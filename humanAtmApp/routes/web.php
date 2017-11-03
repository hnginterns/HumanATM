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

/**********************************************/
// Auth Routes//
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*****************************************************/


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


/* User Update */
Route::get('/updateuser/{id}', [ 'uses'=> 'UserController@edit' ] );
Route::put('/updateuser', [ 'uses'=> 'UserController@update']);


/*  Transaction */

Route::get('/dashboard', 'UserDashboardController@index')->name('dashboard');
Route::get('/human-atm/{id}', 'TransactionController@humanAtmProfile');
Route::get('/withdraw', function (){

	return redirect('location');
});
Route::get('/withdraw/humanAtm/{id}', 'TransactionController@showWithdrawalForm');
Route::post('/withdraw/{id}', 'TransactionController@processWithdraw')->middleware('auth');
Route::get('/withdraw/confirm/receipt/{withdrawal_id}', 'TransactionController@confirmWithdrawal');

Route::get('/reject/payment/{payment_id}', 'TransactionController@rejectPayment');
Route::get('/payment', 'TransactionController@showPaymentForm');
Route::post('/payment', 'TransactionController@storePayment')->middleware('auth');

Route::get('/{name}', function ($name) {
	return view($name);
});

