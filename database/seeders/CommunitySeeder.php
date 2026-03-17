<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Community;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Community::create([
            'name' => 'IT Academy',
            'adress' => 'Calle Llacuna',
            'postal_code' => '08018',
        ]);
    }
}
