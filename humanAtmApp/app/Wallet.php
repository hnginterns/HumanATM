<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //
    protected $fillable = [
      'user_id', 'balance',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    

    public static function getToken(){

        $api_key = "ts_JQDHY3O8G5QWXBOR9XHF";//env('API_KEY');
        $secret = "ts_73137GS9V58MVJDEWP9EXDHKW3VIL9";//env('SECRET');
        
        \Unirest\Request::verifyPeer(false);
        $headers = array('content-type' => 'application/json');
        $query = array('apiKey' => $api_key, 'secret' => $secret);
        $body = \Unirest\Request\Body::json($query);
        $response = \Unirest\Request::post('https://moneywave.herokuapp.com/v1/merchant/verify', $headers, $body);
        $response = json_decode($response->raw_body, true);
        $status = $response['status'];
        if ($status != 'success') {
            return false;
        } 
        $token = $response['token'];

      
        return $token;
        
    }
}
