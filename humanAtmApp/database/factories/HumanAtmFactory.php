<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\HumanAtm::class, function (Faker $faker) {
     $id = App\User::pluck('id')->all();
    return [
         'user_id'=> $faker->randomElement($id),
         'phone_number'=> $faker->phoneNumber,
         'bank_name' => $faker->company,
         'account_number' => $faker->unique()->randomNumber(5).$faker->unique()->randomNumber(5),
         'surcharge' =>55,
         'amount'=>$faker->unique()->randomNumber(4),
         'location'=>$faker->address,
    ];
});
