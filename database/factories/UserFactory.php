<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'telephone' => $faker->word,
        'email' => $faker->safeEmail,
        'role' => $faker->word,
        'email_verified_at' => $faker->dateTime(),
        'password' => bcrypt($faker->password),
        'remember_token' => Str::random(10),
    ];
});
