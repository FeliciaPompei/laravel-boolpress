<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->words(3, true);
            $newPost->post_image = "https://picsum.photos/id/$i/350/500";
            $newPost->author = $faker->name();
            $newPost->content = $faker->paragraphs(6, true);
            $newPost->save();
        }
    }
}
