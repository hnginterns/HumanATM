<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
    	'bank_id', 'user_id',
    	'account_number', 'account_name','location',
        'phone_number',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function bank()
    {
    	return $this->belongsToMany(Bank::class);
    }
}
