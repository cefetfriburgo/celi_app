@extends('layouts.main')

@section('titulo')
Eventos
@endsection

@section('principal')
<div class="row">

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
</div>
@endsection