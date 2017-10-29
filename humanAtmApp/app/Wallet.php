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
}
