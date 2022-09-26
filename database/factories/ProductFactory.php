<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            'title' => Str::ucfirst(fake()->catchPhrase()),
            'category_id' => random_int(1, 10),
            'price' => fake()->numberBetween(200, 2000),
            'image' => fake()->imageUrl(640, 480, 'seedling'),
            'description' => fake()->realText(),
        ];
    }
}
