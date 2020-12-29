<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    $methods = ['Paypal','Apple Pay','Visa','Masterpass'];
    $key = array_rand($methods);
    return [
        'method_name' => $methods[$key],
        'user_id' => \App\User::all()->random()->id,
        'product_id'=>\App\Product::all()->random()->id,
        'address'=>$faker->sentence,
    ];
});
