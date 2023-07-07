<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Instrutor;

use App\Models\Local;
use App\Models\Turma;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Aluno::factory(50)->create();
    
        Curso::factory(5)->create();

        Local::factory(10)->create();

        Turma::factory(5)->create()->each(function($turma){
            $turma->locais()->sync(
                Local::all()->random(3)
            );
            $turma->alunos()->sync(
                Aluno::all()->random(20)
            );
        });

        Instrutor::factory(10)->create()->each(function($instrutor){
            $instrutor->cursos()->sync(
                Curso::all()->random(3)
            );
        });
    
    

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
