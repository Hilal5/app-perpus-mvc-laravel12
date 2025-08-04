<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(rand(2, 5), false),
            'author' => fake()->name(),
            'isbn' => fake()->isbn13(),
            'publication_year' => fake()->numberBetween(1950, date('Y')), // ✅ Ubah jadi ini
            'description' => fake()->paragraph(rand(2, 4)),
        ];
    }

    public function classic(): static
    {
        return $this->state(fn (array $attributes) => [
            'publication_year' => fake()->numberBetween(1920, 1970), // ✅ Fix range
        ]);
    }

    public function recent(): static
    {
        return $this->state(fn (array $attributes) => [
            'publication_year' => fake()->numberBetween(2015, date('Y')),
        ]);
    }
}