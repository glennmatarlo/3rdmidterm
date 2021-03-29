<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {
    return [
        'prod_id' => rand(1, 10),
        'user_id' => rand(1, 10),
        'tot_price' => $faker->numberBetween($min = 3999, $max = 8999),

    ];
});
