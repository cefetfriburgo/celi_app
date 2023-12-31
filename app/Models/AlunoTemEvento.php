<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoTemEvento extends Model
{
    use HasFactory;
    protected $table = 'aluno_tem_eventos';
    protected $fillable = [
        'aluno_id',
        'evento_id'
    ];
}
