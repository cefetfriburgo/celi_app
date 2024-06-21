<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinhaExtensao extends Model
{
    use HasFactory;

    protected $table = 'linha_extensaos';

    protected $fillable = [
        'nome',
    ];
}
