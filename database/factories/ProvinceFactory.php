<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Province;
use App\Country;
use Faker\Generator as Faker;

$factory->define(Province::class, function (Faker $faker) {
    return [
        'name' => $faker->state,
        'country_id' => $faker->numberBetween(1, Country::count()),
    ];
});
