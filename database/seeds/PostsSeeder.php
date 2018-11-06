<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        if (App::environment('local')) {
            factory(Post::class, 50)->create();
        }
    }
}
