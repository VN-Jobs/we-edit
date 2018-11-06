<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Slide;

class SlidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::truncate();
        app(Slide::class)->insert([
            [
                'description' => 'WORLD CLASS SUPPORT',
                'image_src' => 'seeds/slider_1.jpeg',
                'image_title' => 'slider_1.jpeg',
            ],
            [
                'description' => 'PHOTOGRAPHY CREATIVE',
                'image_src' => 'seeds/slider_2.jpeg',
                'image_title' => 'slider_2.jpeg',
            ],
            [
                'description' => 'HELLO WORLD! CRAZY',
                'image_src' => 'seeds/slider_3.jpeg',
                'image_title' => 'slider_3.jpeg',
            ],
            [
                'description' => 'WORLD CLASS COMBINATION',
                'image_src' => 'seeds/slider_4.jpeg',
                'image_title' => 'slider_4.jpeg',
            ],
        ]);
        if (App::environment('local')) {
            factory(Slide::class, 10)->create();
        }
    }
}
