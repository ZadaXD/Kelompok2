<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Humas User',
            'email' => 'humas@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'humas'
        ]);

        User::create([
            'name' => 'Layanan User',
            'email' => 'layanan@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'layanan'
        ]);
    }
}

