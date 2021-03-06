<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\{Category, News};
use Faker\Generator as Faker;

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

$factory->define(News::class, function (Faker $faker) {
	$categories = Category::all();
	if($categories->count() > 0) {
		$categoryId = $categories->random()->id;
	} else {
		$categoryId = factory(Category::class)->create();
	}

    return [
        'heading' => $faker->sentence,
        'text' => $faker->paragraph(15),
        'category_id' => $categoryId
    ];
});

$factory->afterCreating(News::class, function($news) {
	$news->wasRecentlyCreated = false;
});
