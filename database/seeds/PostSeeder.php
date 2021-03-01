<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;
use Faker\Generator as faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newPost = new Post;
            $newPost->title = $faker->words(4, true);
            $newPost->body = $faker->sentence(20);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();   
        }
    }
}
