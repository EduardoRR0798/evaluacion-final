<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombres" => $this->faker->firstName(),
            "apellidos" => $this->faker->lastName(),
            "fecha_nacimiento" => $this->faker->date("Y-m-d")
        ];
    }
}
