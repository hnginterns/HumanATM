<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
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

		$human_atm_profile = HumanAtm::findOrFail($id);
		$human_atm_profile = $human_atm_profile->load('user.profile');
        
		return view('human-atm-profile', compact('human_atm_profile'));
	}

	public function showWithdrawalForm($id)
	{   
		$withdrawer_id = $id;

		return view('withdraw', compact('withdrawer_id'));

	}

	public function processWithdraw(Request $request, $id)
	{      
		$this->validate($request, $this->withdrawFormRules());
         $w = new Withdrawal;
		$user_id = $id;

		 $w->user_id = $user_id;
		 $w->phone_number = $request->phone_number;
		 $w->bank_name = $request->bank_name;
		 $w->amount = (int) $request->amount + 150;
		 $w->location = $request->location;
         
         if ($w->save()){

         	return redirect()->back()->with('status', 'Your withdrawal request has been recieved, kindly wait for it to be processed');
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
