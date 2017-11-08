<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HumanAtm extends Model
{
    //
    protected $fillable = [
    	'user_id', 'amount', 'location',
    	'phone_number', 'account_number',
    	'bank_code',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);

    }
}
