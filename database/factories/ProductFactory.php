<?php

namespace Database\Factories;

use App\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(1000),
            'price' => $this->faker->randomFloat(2, 1, 100), // Price between 1 and 100
            'stock' => $this->faker->numberBetween(1, 100),  // Stock between 1 and 100
            'status' => $this->faker->randomElement(['available', 'unavailable']),
        ];
    }
}
