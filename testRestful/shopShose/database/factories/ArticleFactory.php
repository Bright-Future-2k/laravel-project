<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name_product' => $faker->text(50),
        'price' => $faker->numberBetween(4,100),
    ];
});
