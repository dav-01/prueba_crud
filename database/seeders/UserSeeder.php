<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuarios de ejemplo
        User::create([
            'name' => 'Admin',
            'last_name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'phone' => '123456789',
        ]);

        User::create([
            'name' => 'John Doe',
            'last_name' => 'cabrera',
            'email' => 'john@example.com',
            'password' => Hash::make('secret123'),
            'phone' => '987654321',
        ]);
    }
}

