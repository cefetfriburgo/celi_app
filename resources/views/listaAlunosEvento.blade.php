@extends('layouts.alt')

@section('titulo')
Historico de aluno
@endsection
@section('principal')

<div class="container d-flex justify-content-center">
    <h1>{{$evento->tipo}} de {{$evento->nome}}</h1>
</div>
<div class="container mt-2 d-flex justify-content-center">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
            <tr>
                <td><a href="#" class="elemento_tem_item">{{ $aluno->nome }}</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection