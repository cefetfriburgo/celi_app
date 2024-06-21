<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $table = 'matriculas';

    protected $fillable = [
        'descricao',
        'usuario_id',
    ];

    // Relacionamento com o usuário
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
