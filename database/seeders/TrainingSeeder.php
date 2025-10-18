<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainings = [
            'Developpement Web et Mobile',
            'Sécrétariat Bureautique',
            'Sécrétariat Comptable',
            'Sécrétariat de Direction',
            'Maintenance informatiquue',
            'Maintenance des réseaux informatiques',
            'Marketing Digital',
            'Graphisme de Production',
            'Web master',
            'Comptablilité Informatisée et de Gestion',
            'Montage Audiovisuel',
        ];

        foreach ($trainings as $title) {
            Training::firstOrCreate([
                'user_id' => 1,
                'category_id' => 1,
                'title' => $title,
                'img' => null,
            ]);
        }
    }
}
