@extends('layouts.main')

@section('titulo')
Eventos
@endsection

@section('principal')
<div class="row">
<<<<<<< HEAD

  <form>
            <div class="form-group mb-2">
                <label for="exampleFormControlInput1">Cadastre seu Evento</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
            </div>
            <div class="form-group mb-2">
                <label for="exampleFormControlSelect1">Tipo de Evento:</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Lorem</option>
                    <option>Lorem </option>
                    <option>Lorem </option>
                    <option>Lorem </option>
                    <option>Lorem </option>
                    <option>Lorem </option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="exampleFormControlSelect1">Horários disponíveis:</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Lorem</option>
                    <option>Lorem </option>
                    <option>Lorem </option>
                    <option>Lorem </option>
                    <option>Lorem </option>
                    <option>Lorem </option>
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="exampleFormControlTextarea1">Dia do Evento:</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="3" type="date"/>
            </div>
            <div class="form-group mb-4">
                <label for="exampleFormControlTextarea1">Detalhes do Evento:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Faça uma descrição do evento e suas atividades, seu objetivo e detalhes."></textarea>
            </div>
            <div class="form-group row">
                <div>
                    <button type="submit" class="btn btn-primary">Enviar Proposta!</button>
                </div>
            </div>
        </form>
=======
  @foreach($eventos as $evento)
  <div class="card m-3">
    <h5 class="card-header">{{$evento->tipo}}</h5>
    <div class="card-body">
      <h5 class="card-title">{{$evento->titulo}}</h5>
      <p class="card-text">{{$evento->descricao}}</p>
      <a href="/eventos/{{$evento->id}}" class="btn btn-primary">Veja mais</a>
    </div>
  </div>
@endforeach
>>>>>>> d49da3282798057c34946acf8b45a14a40104363
</div>
@endsection