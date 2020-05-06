<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Partner;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Partner::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween(1, Company::count()),
        'name'       => $faker->name,
        'Last_name'  => $faker->lastname,
        'dni'        => $faker->numerify('########'),
    ];
});
