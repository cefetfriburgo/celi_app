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
      <h5 class="card-title">{{$evento->titulo}}</h5>
      <p class="card-text">{{$evento->descricao}}</p>
      <a href="festa.html" class="btn btn-primary">Veja mais</a>
    </div>
  </div>

  <form>
            <div class="form-group mb-2">
                <label for="exampleFormControlInput1">Cadastre seu Evento</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
            </div>
            <div class="form-group mb-2">
                <label for="exampleFormControlSelect1">Tipo de Evento</label>
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
                <label for="exampleFormControlTextarea1">Horários disponíveis</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Informe o horário preferencial para a realização do evento."></textarea>
            </div>
            <div class="form-group mb-4">
                <label for="exampleFormControlTextarea1">Descrição do evento</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Faça uma descrição do evento e suas atividades, seu objetivo e detalhes."></textarea>
            </div>
            <div class="form-group mb-4">
                <label for="exampleFormControlFile1">Arquivo da Proposta / Plano de Evento: </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group row">
                <div>
                    ERRO PROPOSITAL
                    <button type="submit" class="btn btn-primary">Enviar Proposta</button>
                </div>
git 
            </div>
        </form>
@endforeach
</div>
@endsection