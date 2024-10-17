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
            'item_name' => $this->faker->name,
            'category_id' => $this->faker->numberBetween(1, 4),
            'stock' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
