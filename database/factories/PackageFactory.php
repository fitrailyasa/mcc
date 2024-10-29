<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'desc' => fake()->sentence(),
            'price' => fake()->numberBetween(550, 6000),
            'img' => 'logo.png',
            'category_id' => fake()->numberBetween(1, 10),
        ];
    }
}
