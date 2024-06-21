<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'notas';

    protected $fillable = [
        'valor',
        'participante_id',
    ];

    // Relacionamento com o participante
    public function participante()
    {
        return $this->belongsTo(Participante::class);
    }
}
