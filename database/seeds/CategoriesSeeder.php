<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        if (App::environment('local')) {
            $categories = factory(Category::class, 20)->create();
        }
    }
}
