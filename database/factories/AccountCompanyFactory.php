<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AccountCompany;
use App\Account;
use App\Company;
use Faker\Generator as Faker;

$factory->define(AccountCompany::class, function (Faker $faker) {
    return [
        'account_id' => $faker->numberBetween(1, Account::count()),
        'company_id' => $faker->numberBetween(1, Company::count()),
    ];
});
