<?php

namespace Database\Factories\Banner;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'slug' => fake()->unique()->slug(),
            'status' => fake()->boolean(),
            'link' => fake()->url(),
            'description' => fake()->text(),
            'image' => fake()->imageUrl(),
        ];
    }
}
