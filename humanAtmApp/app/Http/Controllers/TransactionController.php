<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WalletsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use App\HumanAtm;
use App\BankAtm;
use App\Withdrawal;
use App\User;
use App\Bank;
use App\Wallet;
use App\Transaction;

class TransactionController extends Controller
{   
	private $wallet_controller;

	public function __construct()
	{

		$this->wallet_controller = new WalletsController;
	}
	public function index()
	{  

		$human_atms = HumanAtm::where('status', 'pending')->get();

		$human_atms->load('user');
		$bank_atms = BankAtm::all()->load('bank');

		return view('location-listing', compact('human_atms', 'bank_atms'));


	}

	public function humanAtmProfile($id)
	{
		$human_atm_profile = HumanAtm::findOrFail($id)->load('user.profile');

		$human_atm_amount = (int)$human_atm_profile->amount; 

		// $wallet =  Wallet::where('user_id', Auth::id())->first();

		$wallet = new WalletsController;

		$balance = $wallet->getBalance(); //get the wallet balance of the withdrawer

		
		if ($balance == 0){

			return redirect()->back()->with(['status' => "Sorry, Your wallet balance is empty,  kindly fund your wallet and try again"]);
		}

		if($balance < $human_atm_amount){

			return redirect()->back()->with(['status' => "Sorry, Your wallet balance is less than the amount you want to withdraw kindly fund your wallet and try again"]);
		}


		return view('human-atm-profile', compact('human_atm_profile'));
	}

	public function confirmProceed($human_atm_id)
	{   
		
		$human_atm = HumanAtm::findOrFail($human_atm_id);

		return view('proceed-withdraw', compact('human_atm_id', 'human_atm' ));

	}

	public function processWithdraw($human_atm_id)
	{      
		$withdrawer_id = Auth::id();
		$human_atm = HumanAtm::findOrFail($human_atm_id);

		if($human_atm){

			$amount = $human_atm->amount;
		}

		$createWithdrawalRequest = Withdrawal::create([
			'withdrawer_id' => $withdrawer_id,
			'payer_id'      => $human_atm_id,
			'amount'       => $amount,
		]);

		if ($createWithdrawalRequest)
		{   
			if ($this->wallet_controller->walletToWallet($withdrawer_id)){

				
				Session::flash('status', 'Your withdrawal request has been sumbitted, the details of your payer is on your dashboard, kindly confirm receipt when you\'ve done so');
				return redirect('/dashboard');

			}

			else{
				return redirect()->back()->with(['status', 'Opps! unable to process your request due to an unknown error, kindly try again']);
			}

			
		}

	}

	

	public function confirmWithdrawal($withdrawal_id)
	{   


		$withdrawal = Withdrawal::find($withdrawal_id);

		$my_payer =  User::find($withdrawal->payer_id);


		
       //if the user says he has recieved the cash, change the status in the withdrawal table
		
		$confirmed = $withdrawal->update(['status'=>'completed']);
		
        //Change the status in human_atms table to prevent this from showing in the location listing
		HumanAtm::find($withdrawal->payer_id)->update(['status'=>'completed']); 


		if ($confirmed){

			 //****************************//
            // call payment engine here to pay the human atm
			

			//$this->wallet_controller->walletToAccount($withdrawal->payer_id);

			//****************************//

			Transaction::create([
				'sender_id'   => $withdrawal->payer_id,
				'reciever_id' => $withdrawal->withdrawer_id,
				'amount'      => $withdrawal->amount,
				'status'      => 'completed',
			]);

			
			Session::flash('status', 'You have confirmed that you have recieved the sum of '. ' NGN'. $withdrawal->amount. '  from '. $my_payer->name. ' Thanks for using our service!, Don\'t forget to hit the invite button to share your testimony with your friends');

			return redirect('/dashboard');

		}
	}

	public function rejectPayment($payment_id)
	{
		
		$w = Withdrawal::findOrFail($payment_id);

		$payer_id = $w->payer_id;

		$deleted = HumanAtm::findOrFail($payer_id)->delete();

		if($deleted)
		{
			return redirect()->back()->with(['status' => 'You\'ve successfully deleted your request to render human ATM service, do check back next time']);
		}
	}  

	/**
	*Show the payment form to the user
	* who requests to be a human ATM
	*/

	public function showPaymentForm()
	{   
		//$banks = Bank::all();
		$banks = WalletsController::getBanks();
		return view('payment', compact('banks'));
	}

     /**
	*Store the payment request to the humanATM Model
	* @param Http Request $request
	*@return boolean 
	*/
	public function storePayment(Request $request)
	{
		$validation = Validator::make($request->all(), $this->withdrawFormRules());

		if ($validation->fails()){
			return \Redirect::back()->withInput()->withErrors( $validation->messages() );
		}

		$saved = HumanAtm::create([
			'user_id'       => Auth::id(),
			'phone_number'  => $request->phone_number,
			'amount'        => $request->amount,
			'bank_code'     => $request->bank_id,
			'account_number'=> $request->account_number,
			'location'      => $request->location,
		]);

		if ($saved)
		{
			return redirect()->back()->with(['status' => 'Your request has been recieved, wait as we get the person who needs the service']);
		}
	}
	public function withdrawFormRules()
	{
		return [
			'phone_number' => 'required|min:11',
			'amount' => 'required',
			'bank_id' => 'required',
			'account_number' => 'required|max:10|min:10',
			'location' => 'required',
		];
	}

	

}
