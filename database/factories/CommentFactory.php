<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text' => $this->faker->paragraph(),
            'filename' => $this->faker->boolean() ? 'public/test.png' : null,
            'filename_hash' => $this->faker->boolean() ? 'public/test.png' : null,
        ];
    }
}
