<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            'events',
            'comics',
            'news',
            'politics',
            'blog',
            'stories',
            'polls',
            'F&A',
            'questions',
            'enviroment',
            'nature',
            'social'
        ];
        for ($i=0; $i < count($categories); $i++) {
            $newCategory = new Category();
            $newCategory->name = $categories[$i];
            $newCategory->colour = $faker->unique()->hexColor();
            $newCategory->save();
        }
    }
}
