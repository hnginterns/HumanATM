<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Wallet;
use App\User;
use Auth;

class WalletsController extends Controller
{



    public function showFundWallet(){
        $balance = $this->getBalance();
        return view('fundwallet', compact('balance'));
    }

    public function getBalance(){
        $token = Wallet::getToken();
        if (!$token){
            return 'INVALID TOKEN'; 
        }
        $user = User::find(Auth::id());
        $headers = array('content-type' => 'application/json', 'Authorization' => $token);
        $response = \Unirest\Request::get('https://moneywave.herokuapp.com/v1/wallet/', $headers);
        $response = json_decode($response->raw_body, true);
        
        
        foreach($response['data'] as $wallet){
            if($wallet['uref'] == $user->wallet_id){
                $balance = $wallet['balance'];
            }
        }
        
        return $balance;
    }

    public function cardToWallet(Request $request)
    {
        $token = Wallet::getToken();
        if (!$token){
            return 'INVALID TOKEN'; 
        }
        $user = User::find(Auth::id());
        $wallet_id = $user->wallet_id;
        $headers = array('content-type' => 'application/json', 'Authorization' => $token);
        $query = array(
            "firstname"=> $request->fname,
            "lastname"=> $request->lname,
            "email"=> $request->email,
            "phonenumber"=> $request->phone,
            "recipient"=> "wallet",
            "recipient_id" => $wallet_id,
            "card_no"=> $request->card_no,
            "cvv"=> $request->cvv,
           "pin"=> $request->pin, //optional required when using VERVE card
           "expiry_month"=> $request->expiry_month,
           "expiry_year"=>  $request->expiry_year,
           "charge_auth"=>"PIN", //optional required where card is a local Mastercard
           "apiKey" =>  "ts_JQDHY3O8G5QWXBOR9XHF", //env('API_KEY'),
           "amount" => $request->amount,
           "fee"=>55,
           "medium"=> "web",

       );

        $body = \Unirest\Request\Body::json($query);

        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/transfer', $headers, $body);
        $response = json_decode($response->raw_body, TRUE);

        //dd($response);

        if($response['status'] == 'success') {
            $transfer = $response['data']['transfer'];
            $transRef = $transfer['flutterChargeReference'];
            // $validation = array(
            //     "ref" => $transRef, 
            //     "action" => "otp"
            // );

            return view('otppage', compact('transRef'));
            
        }
        if(isset($response['data'])) {
            Session::flash('status', $response['status'].": ".$response['data']);
            return back();
        }

        Session::flash('status', $response['status']);
        return back();
        
    }

    
    public function otp(Request $request)
    {   

        // validate and ensure the user enetered the otp please
        //before proceeding
        \Unirest\Request::verifyPeer(false);

        $headers = array('content-type' => 'application/json');
        $query = array(
            'transactionRef'=>$request->ref,
            'otp' => $request->otp
        );
        $body = \Unirest\Request\Body::json($query);

        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/transfer/charge/auth/card', $headers, $body);
        $response = json_decode($response->raw_body, true);


        if(isset($response['data'])) {
            Session::flash('status', $response['data']);
            return redirect('/fundwallet');
        }
        Session::flash('status', $response['status']);
        return redirect('/fundwallet');
            // return redirect('admin')->with('status', $response);
    }


    public function walletToCompanyAccount(Request $request){
       $token = Wallet::getToken();
       if (!$token){
        return 'INVALID TOKEN'; 
        }
        $user = User::find(Auth::id());
        $wallet_id = $user->wallet_id;
        $headers = array('content-type' => 'application/json', 'Authorization' => $token);
        $query = array(
            "lock"=> $user->wallet_id,
            "walletUref" => $user->wallet_id,
            "amount"=> $request->amount,
            "bankcode"=>"044",
            "accountNumber"=>"0690000005",
            "currency"=>"NGN",
            "senderName"=>$user->name,
                "narration"=>"Human ATM App", //Optional
                "ref"=>"humanatm-02"
            ); 
        $body = \Unirest\Request\Body::json($query);

        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/disburse', $headers, $body);
        $response = json_decode($response->raw_body, TRUE);
            //var_dump($response);
            //die();
        if($response['status'] == 'success') {
        return view('paymentsuccessful');
        }

        if(isset($response['data'])) {
            Session::flash('status', $response['status'].": ".$response['data']);
            return back();
        }

        Session::flash('status', $response['status']);
        return back();

    }

    public function walletToAccount($payer_id){
        $token = Wallet::getToken();
        if (!$token){
            return 'INVALID TOKEN'; 
        }

        $payer = User::find($payer_id);

        $admin      = User::where('role', 1)->first();

        $withdrawal = Withdrawal::where([
            'payer_id'=>$payer_id, 'status'=>'completed'])->first();

        $amount = (int) $withdrawal->amount - (int) $withdrawal->surcharge;
        $headers = array('content-type' => 'application/json', 'Authorization' => $token);
        $query = array(
            "lock"=> $admin->wallet_id,
            "walletUref" => $admin->wallet_id,
            "amount"=> $amount,
            "bankcode"=> $payer->humanAtm->bank_code,
            "accountNumber"=> $payer->humanAtm->account_number,
            "currency"=>"NGN",
            "senderName"=> $admin->name,
            "narration"=>"Human ATM App", //Optional
            //"ref"=>"KFKJ09090"
        );  
        $body = \Unirest\Request\Body::json($query);
        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/disburse', $headers, $body);
        $response = json_decode($response->raw_body, TRUE);
            //var_dump($response);
            //die();
        if($response['status'] == 'success') {

            return true;
        //return view('paymentsuccessful');
    }

    // if(isset($response['data'])) {
    //     Session::flash('status', $response['status'].": ".$response['data']);
    //     return back();
    // }

    // Session::flash('status', $response['status']);
    // return back();

    }
        //transfer from wallet to wallet
    public function walletToWallet($withdrawer_id) {
        $token = Wallet::getToken();
        if (!$token){
            return 'INVALID TOKEN'; 
        }
        $withdrawer = User::find($withdrawer_id);

        $admin      = User::where('role', 1)->first();

        $withdrawal = Withdrawal::where([
            'withdrawer_id'=>$withdrawer_id, 'status'=>'pending'])->first();

        $amount = (int) $withdrawal->amount + (int) $withdrawal->surcharge;


        $query = array(
            "sourceWallet"=> $withdrawer->wallet_id,
            "recipientWallet"=> $admin->wallet_id,
            "amount"=> $amount,
            "currency"=> "NGN",
            "lock"=>$withdrawer->wallet_id,
        );
        $body = \Unirest\Request\Body::json($query);
        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/wallet/transfer', $headers, $body);
        $response = json_decode($response->raw_body, TRUE);

        if($response['status'] == 'success') {
            //return view('paymentsuccessful');
            return true;
        }



        // if(isset($response['data'])) {
        //     Session::flash('status', $response['status'].": ".$response['data']);
        //     return back();
        // }

        // Session::flash('status', $response['status']);
        // return back();

    }

    /**
    * this function fetches the list of banks and their codes
    * from moneywave
    */
    public static function getBanks(){
      \Unirest\Request::verifyPeer(false);

      $headers = array('content-type' => 'application/json');


      $response = \Unirest\Request::post('https://moneywave.herokuapp.com/banks', $headers);
      $response = json_decode($response->raw_body, true);

      if ($response){
        return $response['data'];
        }
    }

    public function showWalletToAccount(){
        $balance = $this->getBalance();
        $banks = $this->getBanks();
        asort($banks);
        return view('wallet', compact('balance', 'banks'));
    }

}
