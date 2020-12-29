<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'code'=>strtoupper($faker->lexify('????')),
        'feature_image' => 'products/feature_images/img.jpg',
        'large_image' => 'products/large_image/img.jpg',
        'category_id' => \App\Category::all()->random(),


    ];
});
