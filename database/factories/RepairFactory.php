<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Repair;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repair>
 */
class RepairFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'f_name' => fake()->firstName(),
            'l_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'adress' => fake()->address(),
            'device' => fake()->name(),
            'fault' => fake()->text(),
        ];
    }
}
