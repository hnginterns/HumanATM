<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Wallet;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(array $data)
    {
        $referral_id = ('HA_'. 
        substr(md5(uniqid(rand(1, 1000))) , 0,6));
        $wallet_id = substr(md5(uniqid(rand(1, 1000))) , 0, 7);  
        $createWallet = $this->createWallet($data['name'], $wallet_id);
        if ($createWallet){
            return User::create([
                'name' => $data['name'],
                'wallet_id'=>$wallet_id,
                'email' => $data['email'],
                'referral_id' => $referral_id,
                'password' => bcrypt($data['password']),
            ]);
        }
        return false;
    }

    public function createWallet($name, $wallet_id){
        $token = Wallet::getToken();
        if (!$token){
            return 'INVALID TOKEN'; 
        }
        $headers = array('content-type' => 'application/json', 'Authorization' => $token);
        $query = array(
            "name"=> $name,
            "lock_code"=> $wallet_id,
            "user_ref"=> $wallet_id,
            "currency"=> "NGN"
        ); 

        $body = \Unirest\Request\Body::json($query);

        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/wallet', $headers, $body);
        $response = json_decode($response->raw_body, TRUE);

        if($response['status'] == 'success'){
            return true;
        }

        return false;
    }
}
