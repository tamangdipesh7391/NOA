<?php

namespace Database\Factories\TravelGrant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TravelGrant\TravelGrant>
 */
class TravelGrantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
            'intro_text' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
