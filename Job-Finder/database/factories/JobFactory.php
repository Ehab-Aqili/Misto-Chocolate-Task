<?php

namespace Database\Factories;

use App\Models\Job; // Import the Job model
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    public function definition()
    {
        return [
            'job_title' => fake()->jobTitle,
            'des' => fake()->sentence,
            'salary' => fake()->numberBetween(40000, 80000),
        ];
    }
}
