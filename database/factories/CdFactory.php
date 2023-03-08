<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // fake data was generated for book
    public function definition()
    {
        return [
            'Artist'=>$this->faker->name(),
            'Title'=>$this->faker->unique()->word,
            'Duration'=>$this->faker->numberBetween(30,60),
            'price'=>$this->faker->numberBetween(10,200)
        ];
    }
}
