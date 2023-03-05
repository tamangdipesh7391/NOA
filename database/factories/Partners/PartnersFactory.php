<?php

namespace Database\Factories\Partners;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partners\Partners>
 */
class PartnersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'link' => $this->faker->url,
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->boolean,
            'order' => $this->faker->numberBetween(1, 100)
        ];
    }
}
