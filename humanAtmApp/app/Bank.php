<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    Protected $fillable = [
      'name', 'code',

    ];

    public function bankAtms()
    {
    	return $this->hasMany(BankAtm::class);
    } 
    public function profile()
    {
    	return $this->hasMany(Profile::class);
    }

    public function humanAtm()
    {
    	return $this->hasMany(HumanAtm::class);
    }
}
