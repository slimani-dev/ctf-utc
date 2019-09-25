<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Challenge;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Challenge::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => 'images/work-9.jpg',
        'flag' => Str::random(10),
        'points' => 10,
        'category_id' => 1,
        'description' => Str::random(200),
        'user_id' => 1
    ];
});
