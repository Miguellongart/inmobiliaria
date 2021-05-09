<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Miguel Longart",
            "email" => "longart86@gmail.com",
            "password" => bcrypt("12345678"),
        ])->assignRole('admin');
        
        User::create([
            "name" => "Editor",
            "email" => "editor@gmail.com",
            "password" => bcrypt("12345678"),
        ])->assignRole('editor');

        \App\Models\User::factory(9)->create();

    }
}
