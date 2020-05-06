<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phone;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween(1, Company::count()),
        'type' => $faker->randomElement(['M','L']),
        'number' => $faker->e164PhoneNumber,
    ];
});
