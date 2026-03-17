<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(\Faker\Generator::class)->locale('es_ES');
        
        \App\Models\User::create([
            'name' => 'Admin User',
            'email' => 'demo@corcho.com',
            'password' => \Hash::make('password'),
            'community_id' => 1,
            'floor' => '1',
            'door' => '1',
        ]);

        \App\Models\User::factory(10)->create();

    
    }
}
