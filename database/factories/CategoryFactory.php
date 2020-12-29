<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'code'=>strtoupper($faker->lexify('????')),
         'views' => random_int(20,200),
    ];
});
