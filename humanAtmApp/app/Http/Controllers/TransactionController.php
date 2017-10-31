<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HumanAtm;
use App\BankAtm;

class TransactionController extends Controller
{
	public function index()
	{  

		$human_atms = HumanAtm::all();

		$human_atms->load('user');
		$bank_atms = BankAtm::all()->load('bank');

		return view('location-listing', compact('human_atms', 'bank_atms'));


	}

	public function humanAtmProfile($id)
	{
		$human_atm_profile = HumanAtm::findOrFail($id)->load('user.profile');

		return view('human-atm-profile', compact('human_atm_profile'));
	}

}
