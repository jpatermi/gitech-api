<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProviderClient;
use App\Company;
use Faker\Generator as Faker;

$factory->define(ProviderClient::class, function (Faker $faker) {
    return [
        'company_client_id' => $faker->numberBetween(1, Company::count()),
        'company_provider_id' => $faker->numberBetween(1, Company::count()),
    ];
});
