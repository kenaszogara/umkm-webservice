<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
		'phone_number' => $faker->numberBetween(),
		'email' => $faker->name,
		'address' => $faker->city,
		'gender' => $faker->word,
		'profile' => $faker->name,
		'birth_date' => $faker->dateTime()
    ];
});
