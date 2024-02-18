<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => fake() -> words(3, true),
            'author' => fake() -> words(3, true),
            'description' => fake() -> sentence(),
            'price' => fake() -> randomFloat(2, 3, 100),
        ];
    }
}
