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
        if (App::environment('local')) {
            factory(Slide::class, 10)->create();
        }
    }
}
