<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\User;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user_ids = User::pluck('id')->toArray();
        for ($i=0; $i < 100; $i++) {
            $newPost = new Post();
            $newPost->user_id = $faker->randomElement($user_ids);
            $newPost->title = $faker->words(3, true);
            $newPost->post_image = "https://picsum.photos/id/$i/350/500";
            $newPost->content = $faker->paragraphs(6, true);
            $newPost->save();
        }
    }
}
