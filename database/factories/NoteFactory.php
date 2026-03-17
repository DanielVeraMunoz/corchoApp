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
        $this->faker->locale('es_ES');
        return [
            'user_id' => \App\Models\User::all()->random()->id,
            'category_id' => \App\Models\Category::all()->random()->id,
            'title' => $this->faker->sentence(3),
            'description' => substr($this->faker->paragraph(), 0, 200),
            'event_date' => fake()->date(),
            'is_pinned' => fake()->boolean(),
            'is_completed' => false,
        ];
    }
}
