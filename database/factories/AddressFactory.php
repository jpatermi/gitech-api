<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\City;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'company_id'  => $faker->numberBetween(1, Company::count()),
        'description' => $faker->address,
        'number'      => $faker->buildingNumber,
        'portal'      => $faker->numerify('Portal ###'),
        'floor'       => $faker->numerify('#'),
        'zip'         => $faker->postcode,
        'city_id'     => $faker->numberBetween(1, City::count()),
    ];
});
