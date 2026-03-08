<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'category_id' => fake()->numberBetween(1, 7),
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'event_date' => fake()->date(),
            'is_pinned' => fake()->boolean(),
            'is_completed' => fake()->boolean(),
        ];
    }
}
