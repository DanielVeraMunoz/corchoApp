<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Thankseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notes = \App\Models\Note::all();
        $users = \App\Models\User::all();

        foreach ($notes as $note) {
            $comments = $note->comments;
            foreach ($comments as $comment) {
                if (rand(0, 1)) {
                    \App\Models\Thank::factory(rand(0, 1))->create([
                    'note_id' => $note->id,
                    'giver_id' => $note->user_id,
                    'recipient_id' => $comment->user_id,
                ]);
                }
                
            }
        }
    }
}
