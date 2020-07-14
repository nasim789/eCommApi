<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'price' => $faker->randomFloat(2, 10, 5000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->randomFloat(2, 0, 50)
    ];
});
