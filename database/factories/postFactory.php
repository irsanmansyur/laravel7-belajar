<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
  return [
    'title' => $faker->sentence(),
    "slug" => \Str::slug($faker->sentence()),
    "body" => $faker->paragraph(40)
  ];
});
