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
            ['email' => 'fernand@superadmin.com'],
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'username' => 'fernand',
                'password' => 'Kpfer_isnp_2@@517',
            ]
        );

        $superadmin->assignRole('superadmin');


        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'username' => 'admin',
                'password' => 'password123',
            ]
        );

        $admin->assignRole('admin');
    }
}
