<?php

namespace Database\Factories;

use App\Models\Employers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['20,000', '40,000', '100,000']),
            'employers_id' => Employers::factory(),
        ];
    }
}
