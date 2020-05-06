<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'company_id'  => $faker->numberBetween(1, Company::count()),
        'description' => $faker->text(15),
        'price'       => $faker->randomFloat(2, 0, 999999),
    ];
});
