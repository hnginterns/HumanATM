<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    Protected $fillable = [
      'name',

    ];

    public function bankAtms()
    {
    	return $this->hasMany(BankAtm::class);
    } 
}
