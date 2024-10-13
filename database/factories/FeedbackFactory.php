<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'name' => fake()->name(),
                'profession' => fake()->title(),
                'img' => fake()->imageUrl(),
                'review' => fake()->sentence(),
                'rating' => fake()->numberBetween(1, 5)
            ]
        ];
    }
}
