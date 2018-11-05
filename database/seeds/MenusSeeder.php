<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Menu;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment('local')) {
            factory(Menu::class, 10)->create();
        }
    }
}
