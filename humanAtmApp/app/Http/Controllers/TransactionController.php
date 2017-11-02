<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\HumanAtm;
use App\BankAtm;
use App\Withdrawal;

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
		$payer_id = $id;

		return view('withdraw', compact('payer_id'));

	}

	public function withdraw(Request $request, $id)
	{      

		$payer_id = $id;
		$validation = Validator::make($request->all(), $this->withdrawFormRules());

		if ($validation->fails()){
			return \Redirect::back()->withInput()->withErrors( $validation->messages() );
		}

		$createWithdrawalRequest = Withdrawal::create([
			'withdrawer_id' => $request->id,
			'payer_id'      => $payer_id,
			'phone_number'  => $request->phone_number,
			'bank_name'     => $request->bank_name,
			'amount'        => (int)$request->amount + 150,
			'account_number'=> $request->account_number,
			'location'      => $request->location,
		]);

		if ($createWithdrawalRequest)
		{
			return redirect()->back()->with(['status' => 'Your withdrawal request has been sumbitted, wait as we process it in a moment!']);
		}

	}

	public function withdrawFormRules()
	{
		return [
			'phone_number' => 'required|min:11',
			'amount' => 'required',
			'bank_name' => 'required',
			'account_number' => 'required|max:10|min:10',
			'location' => 'required',
		];
	}

}
