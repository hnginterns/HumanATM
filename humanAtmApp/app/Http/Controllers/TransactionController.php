<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\HumanAtm;
use App\BankAtm;
use App\Withdrawal;
use App\User;

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

	public function processWithdraw(Request $request, $human_atm)
	{      

		$human_atm_id = $human_atm;
		$validation = Validator::make($request->all(), $this->withdrawFormRules());

		if ($validation->fails()){
			return \Redirect::back()->withInput()->withErrors( $validation->messages() );
		}

		$createWithdrawalRequest = Withdrawal::create([
			'withdrawer_id' => Auth::id(),
			'payer_id'      => $human_atm_id,
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

	public function confirmWithdrawal($withdrawal_id)
	{   


		$withdrawal = Withdrawal::find($withdrawal_id);
		$my_payer =  User::find($withdrawal->payer_id);
		$confirmed = $withdrawal->update(['status'=>'completed']);

		if ($confirmed){

			return redirect()->back()->with(['status' => 'You have confirmed that you have recieved the sum of '. ' NGN'. ((int)$withdrawal->amount -150). '  from '. $my_payer->name. ' Thanks for using our service!, Don\'t forget to hit the invite button to share your testimony with your friends']);
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
