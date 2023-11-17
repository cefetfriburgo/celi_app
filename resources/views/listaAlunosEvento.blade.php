@extends('layouts.alt')

@section('titulo')
Historico de aluno
@endsection
@section('principal')

<div class="container d-flex justify-content-center">
    <h1>Evento de {{-- $evento->titulo --}}</h1>
</div>
<div class="container mt-2 d-flex justify-content-center">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($alunos as $aluno)
                    <td><a href="#" class="elemento_tem_item">{{ $aluno->nome }}</a></td>
                @endforeach
            </tr>
        </tbody>
        
    </table>
</div>
@endsection