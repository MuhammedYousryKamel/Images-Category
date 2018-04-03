<?php

use Faker\Generator as Faker;
use App\category ;

$factory->define(App\image::class, function (Faker $faker) {
    return [
        //
        'url' => $faker->text(2000),
        'like_count'=> $faker->randomDigit,
        'unlike_count'=> $faker->randomDigit,
        'views_count'=> $faker->randomDigit,
        'category_id' =>function(){

            return category::all()->random();
         }
    ];
});
