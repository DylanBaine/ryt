<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Promoter::class, function (Faker\Generator $faker) {
    static $password;

    $nameAndSlug = $faker->unique()->name;

    return [
        'agency_name' => $nameAndSlug,
        'first_name' => 'john',
        'last_name' => 'doe',
        'genre' => 'rock, pop',
        'phone' => '7777777777',
        'slug' => str_slug($nameAndSlug),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
