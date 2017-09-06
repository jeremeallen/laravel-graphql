<?php

use Faker\Generator as Faker;

$factory->define(App\Like::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return App\User::inRandomOrder()->first()->id;
        },
        'tweet_id' => function() {
            return App\Tweet::inRandomOrder()->first()->id;
        },
    ];
});
