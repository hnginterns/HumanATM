<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
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

	public function showWithdrawalForm($id)
	{   
		$withdrawer_id = $id;

		return view('withdraw', compact('withdrawer_id'));

	}

	public function withdraw(Request $request, $id)
	{
		
		$validator = Validator::make($request->all(), [
			'phone_number' => 'required'|'min:11',
			'amount' => 'required',
			'bank_id' => 'required',
			'account_number' => 'required'|'max:10|min:10',
			'location' => 'required',
		]);

		if ($validator->fails()){
			return \Redirect::back()->withInput()->withErrors( $validation->messages() );
		}

	}

	public function withdrawFormRules()
	{
		return [
			'phone_number' => 'required'|'min:11',
			'amount' => 'required',
			'bank_id' => 'required',
			'account_number' => 'required'|'max:10|min:10',
			'location' => 'required',
		];
	}

}
