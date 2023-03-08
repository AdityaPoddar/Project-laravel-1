<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
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
            'Author'=>$this->faker->name(),
            'Title'=>$this->faker->unique()->word,
            'Pages'=>$this->faker->numberBetween(100,1000),
            'price'=>$this->faker->numberBetween(10,200)
        ];
    }
}
