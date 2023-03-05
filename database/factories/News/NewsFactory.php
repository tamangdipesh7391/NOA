<?php

namespace Database\Factories\News;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->slug,
            'status' => $this->faker->boolean,
            'meta_title' => $this->faker->sentence(3),
            'meta_description' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(3),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
