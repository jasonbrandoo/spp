<?php

use Faker\Generator as Faker;
use App\Model\UserClient;

$factory->define(UserClient::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->phoneNumber,
    ];
});
