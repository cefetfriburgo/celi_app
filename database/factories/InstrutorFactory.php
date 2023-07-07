<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instrutor>
 */
class InstrutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nome' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'telefone' => fake()->phoneNumber,
                'endereco' => fake()->address,
                'cpf' => fake()->cpf(),
                'qualificacao' =>fake()->jobTitle(), //fake()->randomElement(['professor', 'TAE', 'pesquisador', 'instrutor']),
        ];
    }
}
