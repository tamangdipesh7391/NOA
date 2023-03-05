<?php

namespace Database\Factories\Events;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word,
            'slug' => $this->faker->unique()->word,
            'status' => $this->faker->boolean,
            'date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'meta_title' => $this->faker->text,
            'meta_description' => $this->faker->text,
            'intro_text' => $this->faker->text,
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl,
        ];
    }
}
