<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            "brand" => $this->faker->words(3, true),
            "serie" => $this->faker->words(2, true),
            "price" => $this->faker->randomFloat(2, 0, 999_999),
            "energy" => $this->faker->word(),
            "power" => $this->faker->numberBetween(50, 600),
            "release_date" => $this->faker->date(),
            "weight" => $this->faker->numberBetween(600, 10_000),
            "thumbnail" => $this->faker->imageUrl(1024, 800),

        ];
    }
}
