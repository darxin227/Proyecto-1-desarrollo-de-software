<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
           'id' => $this->faker->sentence(7),
            'name' => $this->faker->text(),
            'category' => User::factory(),
            'description' => $this->faker->randomElement(
                ['draft', 'published']
            )
            'price' => $this->faker->text(),
        ];
    }
}
