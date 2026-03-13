<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notes = \App\Models\Note::all();
        $users = \App\Models\User::all();

        foreach ($notes as $note) {
            \App\Models\Comment::factory(rand(0, 5))->create([
                'note_id' => $note->id,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
