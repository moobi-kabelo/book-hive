<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => Author::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'genre' => $this->faker->word(),
            'length' => $this->faker->numberBetween(100, 1000),
            'edition' => $this->faker->word(),
            'reviews' => $this->faker->numberBetween(0, 100),
            'publishedYear' => $this->faker->date(),
        ];
    }
}
