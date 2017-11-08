<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAtm extends Model
{
    //

    protected $fillable = [
    	'bank_code', 'name', 
    	'location',
    ];

    public function bank()
    {
    	return $this->belongsTo(Bank::class);
    }
}
