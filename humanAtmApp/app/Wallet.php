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
    
    protected static $api_key = "ts_JQDHY3O8G5QWXBOR9XHF";
    protected static $secret = "ts_73137GS9V58MVJDEWP9EXDHKW3VIL9";

    public static function getToken(){
        \Unirest\Request::verifyPeer(false);
        $headers = array('content-type' => 'application/json');
        $query = array('apiKey' => self::$api_key, 'secret' => self::$secret);
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
}
