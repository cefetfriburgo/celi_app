<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persenca extends Model
{
    use HasFactory;

    protected $table = 'presencas';

    protected $fillable = [
        'data_presenca',
        'presenca',
        'participante_id',
    ];

    // Relacionamento com o participante
    public function participante()
    {
        return $this->belongsTo(Participante::class);
    }
}
