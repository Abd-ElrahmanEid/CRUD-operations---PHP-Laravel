<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{

    public function definition()
    {
        return [
            'first_name' => $this->faker->word,
            'last_name' => $this->faker->word,
            'age' => $this->faker->numerify('##'),
            'gender' => $this->faker->randomElement(['male','female']),
            'grade' => $this->faker->randomElement(['A+','B', 'B+', 'C', 'D']),

        ];
    }
}
