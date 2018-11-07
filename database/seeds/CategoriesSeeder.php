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
        $data = [
            'Photo Editing',
            'Photo Enhancement',
            'Day To Dusk',
            'Item Removal',
            'Panorama Stitching',
            'Floor Plan',
            'Virtual Furniture',
            'Background Removal',
            'Portrait Retouching',
        ];
        foreach ($data as $name) {
            Category::create(['name' => $name]);
        }
        if (App::environment('local')) {
            $categories = factory(Category::class, 20)->create();
        }
    }
}
