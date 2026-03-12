<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thank>
 */
class ThankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'note_id' => \App\Models\Note::all()->random()->id,
            'giver_id' => \App\Models\User::all()->random()->id,
            'receiver_id' => \App\Models\User::all()->random()->id,
        ];
    }
}
