<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $table = 'atividades';

    protected $fillable = [
        'nome',
        'realizador_id',
        'descricao',
        'status',
        'objetivo',
        'foco_inclusao',
        'limite_participantes',
        'data_inicio',
        'data_termino',
        'metodologia_id',
        'publico_alvo_id',
        'endereco_id',
        'categoria_id',
        'area_tematica_id',
        'linha_extensao_id',
    ];

    // Relacionamentos

    public function realizador()
    {
        return $this->belongsTo(User::class, 'realizador_id');
    }

    public function metodologia()
    {
        return $this->belongsTo(Metodologia::class);
    }

    public function publicoAlvo()
    {
        return $this->belongsTo(PublicoAlvo::class);
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function areaTematica()
    {
        return $this->belongsTo(AreaTematica::class);
    }

    public function linhaExtensao()
    {
        return $this->belongsTo(LinhaExtensao::class);
    }
}
