<?php
//factory
use Faker\Generator as Faker;

$factory->define(App\Crud::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'body' => $faker->sentence,
    ];
});
