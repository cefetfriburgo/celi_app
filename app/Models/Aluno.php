<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model  //Renomear para Participante e fazer as correções necessárias no código
{
    use HasFactory;

    protected $table = 'alunos';

    protected $fillable = [
                'nome',
                'email',
                'telefone',
                'endereco',
                'cpf'/*,
    'matricula'*/];
}
