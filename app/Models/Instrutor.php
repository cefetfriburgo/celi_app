<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Curso;

class Instrutor extends Model //renomear classe para Proponente
{
    use HasFactory;

    protected $table = 'proponentes';

    protected $fillable = [
                'nome',
                'email',
                'telefone',
                'endereco',
                'cpf',
                'qualificacao'];


    public function cursos()
    {
        return $this->belongsToMany(Instrutor::class, 'instrutor_tem_curso', 'instrutor_id', 'curso_id');
        //return $this->hasMany(Curso::class);
    }
            
}
