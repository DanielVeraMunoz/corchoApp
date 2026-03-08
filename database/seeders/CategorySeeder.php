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
            ['name' => 'Avisos oficiales', 'color' => 'red'],
            ['name' => 'Eventos', 'color' => 'green'],
            ['name' => 'Favores', 'color' => 'blue'],
            ['name' => 'Mercadillo', 'color' => 'pink'],
            ['name' => 'Incidencias', 'color' => 'cyan'],
            ['name' => 'Cajón desastre', 'color' => 'yellow'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
