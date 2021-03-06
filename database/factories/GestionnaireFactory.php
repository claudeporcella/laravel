<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Gestionnaire::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'telephone' => $faker->word,
        'users_id' => factory(App\User::class),
    ];
});
