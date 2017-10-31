<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Profile::class, function (Faker $faker) {
	     $id = App\User::pluck('id')->all();
	      $bank_id = App\Bank::pluck('id')->all();
    return [
    	'user_id'=>$faker->randomElement($id),
         'bank_id'=>$faker->randomElement($bank_id), 
         'acount_number'=>$faker->unique()->randomNumber(5),
         'location'=>$faker->address,
         'image_url'=>$faker->imageUrl,
    ];
});
