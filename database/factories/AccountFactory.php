<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'description' => 'Cuanta ' . $faker->name,
        'bank' => 'Banco ' . $faker->name,
        'account_number' => $faker->numerify('##########'),
    ];
});
