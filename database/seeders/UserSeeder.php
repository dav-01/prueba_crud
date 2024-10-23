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
            'nombre' => 'Admin',
            'apellido' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'telefono' => '123456789',
        ]);

        User::create([
            'nombre' => 'John Doe',
            'apellido' => 'cabrera',
            'email' => 'john@example.com',
            'password' => Hash::make('secret123'),
            'telefono' => '987654321',
        ]);
    }
}

