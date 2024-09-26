<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'functie' => 'Admin',
            'email' => 'admin@test.com',
            'phonenumber' => '1234567890',
            'password' => bcrypt('password'),
        ]);
    }
}
