<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->city(),
            'description' => fake()->paragraph(),
            'portion_price' => fake()->numberBetween(100,500),
            'kilogram_price'=>fake()->numberBetween(1000,5000),
            'category' => fake()->numberBetween(1,5)
        ];
    }
}
