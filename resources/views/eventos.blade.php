@extends('layouts.main')

@section('titulo')
Eventos
@endsection

@section('principal')
<div class="row">
  @foreach($eventos as $evento)
  <div class="card m-3">
    <h5 class="card-header">{{$evento->tipo}}</h5>
    <div class="card-body">
      <h5 class="card-title">{{$evento->nome}}</h5>
      <p class="card-text">{{$evento->descricao}}</p>
      <p class="card-text">Carga horária: {{$evento->carga_horaria}} horas</p>
      <a href="/eventos/{{$evento->id}}/informacao" class="btn btn-primary">Veja mais</a>
    </div>
  </div>
@endforeach
</div>
@endsection