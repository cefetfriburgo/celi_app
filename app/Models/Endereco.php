<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';

    protected $fillable = [
        'logradouro',
        'numero',
        'ponto_referencia',
        'bairro_id',
    ];

    // Relacionamento com o modelo Bairro
    public function bairro()
    {
        return $this->belongsTo(Bairro::class);
    }
}
