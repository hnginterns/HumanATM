<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
    	'sender_id', 'reciever_id',
    	'amount',
    ];

    public function user()
    {
    	return $this->belongsToMany(User::class);
    }
}
