<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => "admin",
            'email' => "info@palgoal.ps",
            'email_verified_at' => now(),
            'password' => '$2y$10$hjRChAbT6qgIQzcqh7.g2OMz52Rv2OYKdeuWcDfTjxOn5eyrALzA2', // secret
            'remember_token' => str_random(10),
            
        ]);
    }
}
