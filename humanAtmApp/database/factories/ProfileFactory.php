<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Profile::class, function (Faker $faker) {
	     $id = App\User::pluck('id')->all();
	      $bank_id = App\Bank::pluck('id')->all();
    return [
    	'user_id'=>$faker->randomElement($id),
         'bank_code'=>$faker->company,
         'account_name'=>$faker->name, 
         'account_number'=>$faker->unique()->randomNumber(5).$faker->unique()->randomNumber(),
         'sex' => $faker->randomElement(['Male', 'Female']),
         'phone_number'=> $faker->phoneNumber,
         'location'=>$faker->address,
         'image_url'=>$faker->imageUrl,
    ];
});
