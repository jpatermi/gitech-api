<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Company;
use App\BusinessArea;
use App\Position;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'company_id'        => $faker->numberBetween(1, Company::count()),
        'name'              => $faker->name,
        'last_name'         => $faker->lastname,
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'          => Hash::make('12345678'), // password
        'remember_token'    => Str::random(10),
        'api_token'         => Str::random(60),
        'dni'               => $faker->numerify('##########'),
    ];
});
