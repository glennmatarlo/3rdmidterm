<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {

    $productName = $faker->randomElement(['Realme5','Redmi9','Readme7','SamsungJ8','Misua6s']);

    return [
        'user_id' => rand(1, 10),
        'prod_name' => $productName,
        'price' => $faker->numberBetween($min = 3999, $max = 8999),
    ];
});
