<?php

namespace Database\Factories\FRAF;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FRAF\FRAF>
 */
class FRAFFactory extends Factory
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
            'date' => $this->faker->date,
            'status' => $this->faker->boolean,
            'end_date' => $this->faker->date,
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
            'intro_text' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480)
        ];
    }
}
