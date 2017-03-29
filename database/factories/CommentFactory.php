<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Comment::class, function (Faker\Generator $faker) {

    $date = $faker->date();
    return [
        'content' => $faker->text(50),
        'created_at' => $date,
        'updated_at' => $date
    ];
});
