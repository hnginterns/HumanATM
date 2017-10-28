<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAtm extends Model
{
    //

    protected $fillable = [
    	'bank_id', 'name', 
    	'location',
    ];

    public function bank()
    {
    	return $this->belongsTo(Bank::class);
    }
}
