<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Aluno;
use App\Models\Local;

class Turma extends Model
{
    use HasFactory;

    protected $table = 'turma';

    protected $fillable = [
                'num_vaga',
                'data_inicio',
                'data_fim',
                'horario',
                'curso_id',
                ];
                
    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'turma_tem_aluno', 'turma_id', 'aluno_id');
    }

    public function locais()
    {
        return $this->belongsToMany(Local::class, 'turma_tem_local', 'turma_id', 'local_id');
    }

}
