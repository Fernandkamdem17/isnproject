<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'username' => 'superadmin',
                'password' => 'password',
            ]
        );

        $superadmin->assignRole('superadmin');

        $director = User::firstOrCreate(
            ['email' => 'director@example.com'],
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'username' => 'director',
                'password' => 'password123',
            ]
        );

        $director->assignRole('director');
    }
}
