<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    use HasFactory;

    protected $table = 'diarios';

    protected $fillable = [
        'carga_horaria',
        'data_inicio',
        'data_termino',
        'atividade_id',
    ];

    // Relacionamento com a atividade
    public function atividade()
    {
        return $this->belongsTo(Atividade::class);
    }
}
