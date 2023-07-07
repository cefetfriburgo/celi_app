<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Turma;
use App\Models\Instrutor;

class Curso extends Model
{

    use HasFactory;

    protected $table = 'curso';

    protected $fillable = [
                'nome',
                'descricao',
                'carga_horaria',
                ];

    public function instrutores()
    {
        return $this->belongsToMany(Instrutor::class, 'instrutor_tem_curso', 'instrutor_id', 'curso_id')->withTimestamps();
    }

    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }
}
