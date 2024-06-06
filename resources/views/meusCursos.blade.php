@extends('layouts.main')

@section('titulo')
Aluno
@endsection

@section('principal')
<main class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <h1 class="text-center mb-4">Minhas Atividades</h1>
       
        
        <div class="row">
            @foreach($eventos as $evento)
            <div class="card p-3 mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h2>{{$evento->tipo}} de {{$evento->nome}}</h2>
                    <p class="p-3 mb-2 bg-success text-white rounded">Inscrito com sucesso!</p> <!-- Pegar status de inscrição de maneira dinâmica -->
                </div>
                <div class="card-body">
                    <h5 class="card-title">Instrutor(a): José</h5>
                    <p class="card-text">{{$evento->descricao}}</p>
                    <p><b>Carga Horária:</b> {{$evento->carga_horaria}} horas</p>
                    <div class="d-flex justify-content-between flex-wrap">
                        <!-- Adicionar os links para exibição dos relatórios de declaração, frequência e emissão de certificado -->
                        <a href="#" class="btn btn-primary mt-3">Declaração</a>
                        <a href="#" class="btn btn-primary mt-3">Frequencia</a>
                        <a href="#" class="btn btn-primary mt-3">Certificado</a>
                        <a href="#" class="btn btn-primary mt-3">Link Extra</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
