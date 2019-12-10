<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word().'-'.$faker->word().'-'.$faker->word(),
        'description' => $faker->sentence(),
        'price' => $faker->numberBetween(100, 10000),
    ];
});
