<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaTematica extends Model
{
    use HasFactory;

    protected $table = 'area_tematicas';

    protected $fillable = [
        'nome',
    ];
}
