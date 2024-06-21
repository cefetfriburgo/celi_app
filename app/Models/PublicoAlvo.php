<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicoAlvo extends Model
{
    use HasFactory;

    protected $table = 'publico_alvos';

    protected $fillable = [
        'nome',
    ];
}
