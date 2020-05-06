<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bank;
use App\BankCompany;
use App\Company;
//use App\Http\Requests\Company;
use Faker\Generator as Faker;

$factory->define(BankCompany::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween(1, Company::count()),
        'bank_id' => $faker->numberBetween(1, Bank::count()),
        'bank_account' => $faker->numerify('####################'),
    ];
});
