<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BusinessArea;
use Faker\Generator as Faker;

$factory->define(BusinessArea::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('Área de Negocio ##'),
    ];
});
