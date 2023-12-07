@extends('layouts.main')

@section('titulo')
Tela incial aluno
@endsection

@section('principal')
<div class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <h1 class="text-center border-bottom pb-3">Bem-vindo {{ $aluno->nome }}</h1>
    </div>
    <div class="container mt-3 mb-3">
        <div class="d-grid">
            <a href="/alunos/{{$aluno->id}}/cursos" class="btn btn-primary btn-block">Atividades inscritas</a>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3">
            <h4 class="card-header mt-2">Sugestões para você:</h4>
            @foreach($eventos as $evento)
            <div class="card-body mt-3 mb-3 border">
                <h5 class="card-title">{{$evento->tipo}} {{$evento->nome}}</h5>
                <p class="card-text">{{$evento->descricao}}</p>
                <a href="/eventos/{{$evento->id}}/informacao" class="btn btn-primary">Mais informações</a>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
