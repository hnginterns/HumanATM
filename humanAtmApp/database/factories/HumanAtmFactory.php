<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\HumanAtm::class, function (Faker $faker) {
     $id = App\User::pluck('id')->all();
    return [
         'user_id'=> $faker->randomElement($id),
         'amount'=>$faker->unique()->randomNumber(4),
         'location'=>$faker->address,
    ];
});
