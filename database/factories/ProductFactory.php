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
        $images = [
            'products/burger.jpg',
            'products/burger_coke.jpg',
            'products/chicken_laps.jpg',
            'products/chips_chicken.jpg',
            'products/friedchicken.jpg',

        ];

        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(12),
            'image' => null , //$this->faker->randomElement($images),

            // USD pricing
            'price' => $this->faker->randomFloat(2, 5, 1500),

            'stock_quantity' => $this->faker->numberBetween(0, 50),
        ];
    }
}
