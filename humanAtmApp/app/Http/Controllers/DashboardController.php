<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class DashboardController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }


    public function index(){

       $user = User::find(Auth::id());

       return view('userpage', compact('user'));

    }

    public function processWithdraw(Request $request, $id)
	{      
		$this->validate($request, [
			'phone_number' => 'required'|'min:11',
			'amount' => 'required',
			'bank_id' => 'required',
			'account_number' => 'required'|'max:10|min:10',
			'location' => 'required',
		]);

		

	}
}
