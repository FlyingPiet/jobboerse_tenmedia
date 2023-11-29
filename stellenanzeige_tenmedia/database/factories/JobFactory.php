<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Job;
use App\Models\Category;
use App\Models\Company;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'description' => fake()->paragraph,
            'requirements' => fake()->text,
            'category_id' => Category::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
        ];
    }
}
