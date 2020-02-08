<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Report;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'description' => $faker->text(2000),
        'location' => $faker->address,
        'carrier_number' => $faker->word,
        'plate_number' => $faker->word,
        'user_id' => $faker->numberBetween(1,20)
    ];
});
