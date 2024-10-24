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
        // Cree 2 usuarios de ejemplo para iniciar
        User::create([
            'name' => 'Admin',
            'last_name' => 'administrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'phone' => '380538838',
        ]);

        User::create([
            'name' => 'David',
            'last_name' => 'Cabrera',
            'email' => 'david@gmail.com',
            'password' => Hash::make('david123'),
            'phone' => '3027792926',
        ]);
    }
}

