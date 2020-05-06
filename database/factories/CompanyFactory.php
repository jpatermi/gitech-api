<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;
use App\BusinessArea;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'type'              => $faker->randomElement(['S','A']),
        'business_area_id'  => $faker->numberBetween(1, BusinessArea::count()),
        'social_reason'     => $faker->company,
        'tradename'         => $faker->numerify('Nombre Comercial ##'),
        'nif'               => $faker->numerify('##-########-#'),
    ];
});
