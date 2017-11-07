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

            //dd($response);
            if($response['status'] == 'success') {
                $response = $response['data']['transfer']['flutterChargeResponseMessage'];
                return $response;
            }
            
            if(isset($response['data'])) {
                Session::flash('status', $response['status'].": ".$response['data']);
                return redirect('/fundwallet');
            }
            Session::flash('status', $response['status']);
            return redirect('/fundwallet');
            // return redirect('admin')->with('status', $response);
    }


    public function walletToAccount(Request $request){
         $token = Wallet::getToken();
        if (!$token){
            return 'INVALID TOKEN'; 
        }
        $user = User::find(Auth::id());
        $wallet_id = $user->wallet_id;
        $headers = array('content-type' => 'application/json', 'Authorization' => $token);
        // $query = array(
        //     "lock"=> $user->wallet_id,
        //     "walletUref" => $user->wallet_id,
        //     "amount"=> $request->amount,
        //     "bankcode"=> "044",
        //     "accountNumber"=> $request->recipient_account,
        //     "currency"=>"NGN",
        //     "senderName"=> $user->name,
        //     "ref"=>"KFKJ09090"
        // ); 
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
    //transfer from wallet to wallet
    public function transfer(Request $request, WalletTransaction $transaction) {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'sourceWallet' => 'bail|required',
                'recipientWallet' => 'bail|required',
                'amount' => 'bail|required|numeric'
            ],
            [
                'required' => ':attribute is required',
                'numeric' => ':attribute must be in numbers'
            ]
        );

        if ($validator->fails()) {
            $messages = $validator->messages()->toArray();
            return response()->json(['status' => 'failed', 'msg' => 'All fields are required']);
        } else {
            $lock_code = Wallet::where('uuid', Auth::user()->id)->get();
            $restriction = Restriction::where('wallet_id', $lock_code[0]['id'])->get();
            $rules = Rule::where('id', $restriction[0]['rule_id'])->get();
            $amount = $request->input('amount');

            if ($rules[0]['can_transfer'] == 1) {
                $date = new DateTime();
                $date_string = date_format($date, "Y-m-d");
                $wallet_transactions = Transaction::count();
                $total_amount = Transaction::sum('amount_transfered');

                if ($wallet_transactions < $rules[0]['max_transactions_per_day'] && $total_amount < $rules[0]['max_amount_transfer_per_day']) {

                    if ($amount >= $rules[0]['min_amount'] && $amount <= $rules[0]['max_amount']) {
                        $token = Wallet::getToken();
                        $headers = array('content-type' => 'application/json', 'Authorization' => $token);

                        $query = array(
                            "sourceWallet" => $request->input('sourceWallet'),
                            "recipientWallet" => $request->input('recipientWallet'),
                            "amount" => $request->input('amount'),
                            "currency" => "NGN",
                            "lock" => $lock_code[0]['lock_code']
                        );

                        $body = \Unirest\Request\Body::json($query);
                        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/wallet/transfer', $headers, $body);
                        $response_arr = json_decode($response->raw_body, true);
                        $status = $response_arr['status'];
                        if ($status == 'success') {
                            return redirect()->action('pagesController@success', $response);
                        } else {
                            return redirect()->action('pagesController@failed', $response);
                        }
                    } else {
                        return redirect()->action('pagesController@failed', $response);
                    }
                } else {
                    return redirect()->action('pagesController@failed', $response);
                }
            } else {
                return redirect()->action('pagesController@failed', $response);
            }
        }
    }
   
   /**
   * this function does nothing serious
   * it only makes the wallet.blade.php dynamic
   */
    public function walletBalance()
    {

    $wallet = Wallet::where('user_id', Auth::id())->first();
    if ($wallet){
       $balance = $wallet->balance ;

       return view('wallet', compact('balance'));
    }
    $balance = 0;
    return view('wallet', compact('balance'));
    }


    public function fakeWallet(){

        $id = Auth::id();

        $wallet = Wallet::where('user_id', $id)->first();

        if($wallet)
        {
            return back();
        }

        $fund_wallet  = Wallet::create([

          'user_id' => $id,
          'balance' => '20000',
        ]);

        if($fund_wallet){

            echo "wallet funded";
        }
    }

}
