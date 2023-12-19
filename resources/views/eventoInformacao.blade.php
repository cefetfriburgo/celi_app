@extends('layouts.main')
@section('titulo')
Informações do Evento
@endsection

@section('principal')
<div class="container bg-body-tertiary rounded p-4">
            <div class="mb-5">
                <h1 class="text-center mb-4 pb-3 border-bottom">{{$evento->tipo}} de {{$evento->nome}}</h1>
                <h2 class="text-center mb-4 pb-3 border-bottom">Descrição</h2>
                <p>{{$evento->descricao}}</p>
                <p>Carga horária: {{$evento->carga_horaria}}</p>
            </div>
            <form action="/eventos/{{$evento->id}}/inscrever" method="post">
                @csrf
                <div class="mb-3">
                    <label for="idAluno" class="form-label">Id Participante</label>
                    <input type="text" class="form-control" name="idAluno" id="idAluno" required>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">Inscrever-se</button>
                </div>
            </form>
</div>
@endsection
