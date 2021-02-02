<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'guest_full_name' => $faker->name(),
        'guest_credit_card' => $faker->creditCardNumber(),
        'room' => $faker->numberBetween($min = 1, $max = 300),
        'from_date' => $faker->date(),
        'to_date' => $faker->date(),
        'more_details' => $faker->paragraph(),
    ];
});
