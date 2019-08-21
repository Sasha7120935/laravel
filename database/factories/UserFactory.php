<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class,function(Faker $faker) {
    dd(\App\Role::all('id')->where('name', '=', 'Customer'));
    return [
        'name' => $faker->name,
        'role_id' => \APP\Role::all('id')->where('name', '=', 'Customer'),
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'birthday'=> $faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
        'email_verified_at' => now(),
        'password' => $faker->password(8), // password
        'remember_token' => Str::random(10),
    ];
});