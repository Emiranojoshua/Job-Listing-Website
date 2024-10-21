<?php

namespace Database\Factories;

use App\Models\Jobs;
use App\Models\Tags;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobTags>
 */
class JobTagsFactory extends Factory
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
            'jobs_id' => Jobs::factory(), 
            'tags_id' => Tags::factory(),
        ];
    }
}
