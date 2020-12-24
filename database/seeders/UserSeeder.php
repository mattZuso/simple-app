<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            "name" => "Jason",
            "email" => 'admin@zuso.ai',
            "password" => Hash::make("1234"),
        ]);
    }
}
