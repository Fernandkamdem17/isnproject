<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Création des roles
        $superadmin = Role::firstOrCreate(['name' => 'superadmin']);
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $editor = Role::firstOrCreate(['name' => 'editor']);

        $permissions = [
            'manage_faqs',
            'manage_testimonials',
            'manage_administrators',
            'manage_announces',
            'manage_events',
            'manage_galleries',
            'manage_recentsnews',
            'manage_modules',
            'manage_training',
            'manage_directors',
            'manage_ues',
        ];


        //Création des permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }


        //Attributions des permissions aus roles
        $superadmin->givePermissionTo(Permission::all());

        $admin->givePermissionTo(
            [
                'manage_faqs',
                'manage_testimonials',
                'manage_announces',
                'manage_events',
                'manage_galleries',
                'manage_recentsnews',
                'manage_modules',
                'manage_training',
                'manage_ues'
            ]
        );

        
        $editor->givePermissionTo(
            [
                'manage_faqs',
                'manage_testimonials',
                'manage_announces',
                'manage_events',
                'manage_galleries',
                'manage_recentsnews',
            ]
        );
    }
}
