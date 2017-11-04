<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class WalletsController extends Controller
{
    public $api_key = "ts_JQDHY3O8G5QWXBOR9XHF";
    public $secret = "ts_73137GS9V58MVJDEWP9EXDHKW3VIL9";
    public function getToken()
    {
        \Unirest\Request::verifyPeer(false);
        $headers = array('content-type' => 'application/json');
        $query = array('apiKey' => $this->api_key, 'secret' => $this->secret);
        $body = \Unirest\Request\Body::json($query);
        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/merchant/verify', $headers, $body);
        $response = json_decode($response->raw_body, true);
        $status = $response['status'];
        if (!$status == 'success') {
            return false;
        } else {
            $token = $response['token'];
            return $token;
        }
    }

    public function cardToWallet(Request $request)
    {
        $token = $this->getToken();
        if (!$token){
            return 'INVALID TOKEN'; 
        }
        $headers = array('content-type' => 'application/json', 'Authorization' => $token);
        $query = array(
            "firstname"=> $request->fname,
           "lastname"=> $request->lname,
           "email"=> $request->email,
           "phonenumber"=> $request->phone,
           "recipient"=> "wallet",
           "card_no"=> $request->card_no,
           "cvv"=> $request->cvv,
           "pin"=>"1111", //optional required when using VERVE card
           "expiry_year"=>"2020",
           "expiry_month"=>"07",
           "charge_auth"=>"PIN", //optional required where card is a local Mastercard
           "apiKey" => $this->api_key,
           "amount" =>100,
           "fee"=>65,
           "medium"=> "web",
            
        );
        $body = \Unirest\Request\Body::json($query);

        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/transfer', $headers, $body);
        $response = json_decode($response->raw_body, TRUE);
        //var_dump($response);
        //die();
        if($response['status'] == 'success') {
            $transfer = $response['data']['transfer'];
            $transRef = $transfer['flutterChargeReference'];
            // $validation = array(
            //     "ref" => $transRef, 
            //     "action" => "otp"
            // );

            return view('otppage', compact('transRef'));
            
        }
        Session::flash('status', $response['status']);
        return back();
        
    }

    public function otp(Request $request)
    {
        \Unirest\Request::verifyPeer(false);

            $headers = array('content-type' => 'application/json');
            $query = array(
                'transactionRef'=>$request->ref,
                'otp' => $request->otp
            );
            $body = \Unirest\Request\Body::json($query);

            $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/transfer/charge/auth/card', $headers, $body);
            $response = json_decode($response->raw_body, true);
            if($response['status'] == 'success') {
                $response = $response['data']['transfer']['flutterChargeResponseMessage'];
                return $response;
            }
            
            return $response;
            // return redirect('admin')->with('status', $response);
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
                        $token = $this->getToken();
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

}
