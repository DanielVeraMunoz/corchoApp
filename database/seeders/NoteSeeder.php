<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(\Faker\Generator::class)->locale('es_ES');

        \App\Models\Note::create([
        'user_id' => 1,  
        'category_id' => 1,
        'title' => 'Bienvenidos a la comunidad',
        'description' => 'Este es un aviso oficial para todos los vecinos.',
        'event_date' => now()->addDays(7),
        'is_pinned' => true,
        'is_completed' => false,
    ]);
    
    \App\Models\Note::create([
        'user_id' => 1,
        'category_id' => 2,
        'title' => 'Fiesta de cumpleaños',
        'description' => 'Vamos a celebrar el cumpleaños de María el sábado.',
        'event_date' => now()->addDays(3),
        'is_pinned' => false,
        'is_completed' => false,
    ]);

        \App\Models\Note::factory()->count(10)->create();
    }
}
