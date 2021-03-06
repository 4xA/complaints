<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Complaint;
use Faker\Generator as Faker;

$factory->define(Complaint::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'status' => 'pending',
        'title' => $faker->word,
        'description' => $faker->text,
        'urgent' => $faker->boolean
    ];
});
