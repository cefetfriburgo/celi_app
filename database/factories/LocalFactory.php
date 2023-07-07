<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Local>
 */
class LocalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->regexify('[A-Z][a-z]{10}[1-9]'),
            'tipo' => fake()->randomElement(['Sala', 'Laboratório', 'Quadra', 'Campo']),
            'localizacao' => fake()->regexify('[A-Za-z0-9]{10}')
        ];
    }
}
