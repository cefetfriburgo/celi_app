<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $table = 'participantes';

    protected $fillable = [
        'usuario_id',
        'diario_id',
    ];

    // Relacionamento com o usuário
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com o diário
    public function diario()
    {
        return $this->belongsTo(Diario::class);
    }
}
