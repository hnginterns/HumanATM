<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\BankAtm::class, function (Faker $faker) {
	$bank_id = App\Bank::pluck('id')->all();

    return [
        'bank_id'=>$faker->randomElement($bank_id),
        'location'=>$faker->address,
    ];
});
