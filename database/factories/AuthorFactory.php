<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $authorType = $this->faker->randomElement(['I', 'B']);
        $authorName = $authorType == 'I' ? $this->faker->name() : $this->faker->company();

        return [
            'name' => $authorName,
            'email' => $this->faker->email(),
            'type' => $authorType,
        ]; 
    }
}
