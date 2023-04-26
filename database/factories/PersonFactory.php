<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'name' => $this->faker->firstName($gender),
            'surname' => $this->faker->lastName($gender),            
        ];
    }
}
