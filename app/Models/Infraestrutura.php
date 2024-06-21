<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraestrutura extends Model
{
    use HasFactory;

    protected $table = 'infraestruturas';

    protected $fillable = [
        'atividade_id',
    ];

    // Relacionamento com a atividade
    public function atividade()
    {
        return $this->belongsTo(Atividade::class);
    }
}
