<?php

namespace Database\Factories;

use App\Models\Motorcycle;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorcycleFactory extends Factory
{
    protected $model = Motorcycle::class;

    public function definition()
    {
        return [
            'make' => $this->faker->company, // Generates a random company name for 'make'
            'model' => $this->faker->word, // Generates a random word for 'model'
            'year' => $this->faker->numberBetween(2000, 2024), // Generates a random year between 2000 and 2024
            'type' => $this->faker->word, // Generates a random word for 'type'
            'engine_capacity' => $this->faker->numberBetween(100, 2000), // Generates a random engine capacity
            'horsepower' => $this->faker->numberBetween(10, 200), // Generates a random horsepower
            'price' => $this->faker->randomFloat(2, 500, 20000), // Generates a random price between 500 and 20000
            'description' => $this->faker->sentence, // Generates a random sentence for 'description'
        ];
    }
}
