<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'numérique',
            'paramédicale',
            'langue'
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                [
                    'user_id' => 1,
                    'title' => $category,
                ]
            );
        }
    }
}
