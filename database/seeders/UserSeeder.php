<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'admin',
            'email' => 'admin@laravel.io',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
    }
}
