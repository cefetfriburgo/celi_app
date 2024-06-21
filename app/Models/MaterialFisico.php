<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialFisico extends Model
{
    use HasFactory;

    protected $table = 'material_fisicos';

    protected $fillable = [
        'descricao',
        'quantidade',
        'infraestrutura_id',
    ];

    // Relacionamento com a infraestrutura
    public function infraestrutura()
    {
        return $this->belongsTo(Infraestrutura::class);
    }
}
