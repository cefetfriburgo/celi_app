<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialOnline extends Model
{
    use HasFactory;

    protected $table = 'material_onlines';

    protected $fillable = [
        'link_pasta',
        'atividade_id',
    ];

    // Relacionamento com a atividade
    public function atividade()
    {
        return $this->belongsTo(Atividade::class);
    }
}
