<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Video::class, function (Faker $faker) {
    return [
        'user_id' => 0,
        'course_id' => function () {
            return factory(\App\Models\Course::class)->create()->id;
        },
        'title' => $faker->name,
        'slug' => $faker->slug(),
        'url' => $faker->url,
        'view_num' => $faker->randomDigit,
        'short_description' => $faker->title,
        'description' => $faker->paragraph,
        'seo_keywords' => $faker->title,
        'seo_description' => $faker->title,
        'published_at' => $faker->dateTime('now'),
        'is_show' => $faker->randomElement([\App\Models\Video::IS_SHOW_NO, \App\Models\Video::IS_SHOW_YES]),
    ];
});