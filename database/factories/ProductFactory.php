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
    public function definition()
    {
        return [
            'product_name' => fake()->name(),
            'quantity' => fake()->numerify('##'),
            'product_sizing' => fake()->randomElement(['Solo', 'Regular', 'Small', 'Medium', 'Large']),
            'price' => fake()->randomElement(['50', '100', '50', '80', '100']),
        ];
    }
}
