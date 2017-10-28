<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HumanAtm extends Model
{
    //
    protected $fillable = [
    	'user_id', 'amount', 'location',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
