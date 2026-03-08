<?php

namespace Database\Seeders;

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
            ['name' => 'Avisos oficiales', 'color' => '#FF5733'],
            ['name' => 'Eventos', 'color' => '#33FF57'],
            ['name' => 'Favores', 'color' => '#3357FF'],
            ['name' => 'Mercadillo', 'color' => '#FF33A1'],
            ['name' => 'Incidencias', 'color' => '#33FFF5'],
            ['name' => 'Cajón desastre', 'color' => '#F5FF33'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
