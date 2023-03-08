<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
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
            'Console'=>$this->faker->name(),
            'Title'=>$this->faker->unique()->word,
            'Pegi'=>$this->faker->numberBetween(1,3),
            'price'=>$this->faker->numberBetween(10,200)


        ];
    }
}
