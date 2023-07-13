@extends('layouts.main')

@section('titulo')
Curso
@endsection

@section('principal')
    <main class="container mt-5 mb-5">
        <div class="container bg-body-tertiary rounded p-4">
                <div class="row">
                    <h1 class="text-center mb-1">{{$curso->nome}}</h1>
                    <p class="text-center border-bottom pb-3">Em breve</p>
                    <img class="border-bottom pb-3" src="/img/celi.png" alt="avatar">
                    <div class="border-bottom pt-2 text-center">
                        <h4>Instrutor</h5>
                        <p>John Doe</p>
                    </div>
                    <div class="border-bottom p-3 text-center">
                    <h4>Carga horária</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$curso->carga_horaria}}</li>
                    </ul>
                    <h4>Horário</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Segunda-Feira: 13:00 às 14:00</li>
                        <li class="list-group-item">Terça-Feira: 13:30 às 14:30</li>
                    </ul>
                    </div>
                    <div class="border-bottom p-3 text-center">
                        <h4>Sobre o Curso</h4>
                        <p>{{$curso->descricao}}</p>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-outline-primary w-25">Primary</button>
                    </div>
                </div>
            </main>
@endsection