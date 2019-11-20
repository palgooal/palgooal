<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostTableSeeder::class,
            UsersTableSeeder::class,
            SliderTableSeeder::class,
            MenuTableSeeder::class,
            SubMenuTableSeeder::class,
            PageTableSeeder::class,
       
        ]);
    }
}
