<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate(['name' => 'Golang']);
        Category::firstOrCreate(['name' => 'PHP']);
        Category::firstOrCreate(['name' => 'Javascript']);
        Category::firstOrCreate(['name' => 'Dart']);
    }
}
