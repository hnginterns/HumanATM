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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::get('/location','TransactionController@index')->name('location');

	Route::get('/admin', 'AdminDashboardController@index')->name('admin');
	Route::get('/admin/pending', 
		'AdminDashboardController@pending')->name('admin/pending');
	Route::get('/admin/humanAtm', 'AdminDashboardController@humanAtm')->name('admin/humanAtm');
	Route::get('/admin/total', 
		'AdminDashboardController@total')->name('admin/total');
	Route::get('/admin/completed', 
		'AdminDashboardController@completed')->name('admin/completed');
		//--------------------------------------------
		//INVITE
		//---------------------------------------------
	Route::post('/invite/send','InviteController@process');


	Route::get('/403', function () {
		return view('errors.403');
	})->name('403');
	Route::get('/404', function () {
		return view('errors.404');
	})->name('404');
	Route::get('/invite', 'InviteController@index');


	/*  Transaction */

	Route::get('/dashboard', 'UserDashboardController@index')->name('dashboard');
	Route::get('/profile/{id}/update', 'ProfileController@create');

	Route::post('/profile/update/{id}', 'ProfileController@store');
	Route::get('/profile/image/{user_id}', 'ProfileController@showImageForm');
	Route::post('/profile/image/{user_id}', 'ProfileController@updateImage');


	Route::get('/withdraw', function (){
		return redirect('location');
	});

	Route::get('/human-atm/{id}', 'TransactionController@humanAtmProfile');
	Route::get('/withdraw/proceed/{human_atm_id}', 'TransactionController@confirmProceed');
	Route::get('/process/withdraw/{human_atm_id}', 'TransactionController@processWithdraw');
	Route::post('/withdraw/', 'WalletsController@walletToAccount');
	Route::get('/withdraw/confirm/receipt/{withdrawal_id}', 'TransactionController@confirmWithdrawal');

	Route::get('/reject/payment/{payment_id}', 'TransactionController@rejectPayment');
	Route::get('/payment', 'TransactionController@showPaymentForm');
	Route::post('/payment', 'TransactionController@storePayment');

	Route::get('/fundwallet', 'WalletsController@showFundWallet');
	Route::post('/fund','WalletsController@cardToWallet');
	Route::post('/otp','WalletsController@otp');
	Route::get('wallet', 'WalletsController@showWalletToAccount');
	Route::post('fundaccount', 'WalletsController@walletToAccount');
});

	

	Route::get('/register/ref={code}', function($code){
		
			return view('auth.register',compact('code'));
		});
	// Route::get('/{name}', function ($name){
	// 	return view($name);
	// });

Route::get('/emailinvite', function(){
		
			 return view('emails.inviteemail');
		});




	

