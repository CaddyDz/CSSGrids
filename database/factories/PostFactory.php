<?php

use Faker\Generator as Faker;

$factory->define(Fresh\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'body' =>  $faker->sentence(30)
    ];
});
