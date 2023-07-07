<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turma>
 */
class TurmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cursos = Curso::all();

        return [
            'num_vagas' => fake()->regexify('[1-3][0-9]'),
            'data_inicio' => fake()->date(),
            'data_fim' => fake()->date(),
            'curso_id' => $cursos->random()->id,
            'horario' => 'Seg a sexta 13h às 17h' 
        ];
    }
}
