@extends('layouts.main')

@section('titulo')
Aluno
@endsection

@section('principal')

<main>
        <p>Lista dos seus cursos abaixo:</p>

        <div class="card mb-5">
            <div class="card-header justify-content-between d-flex">
                <div>
                    <h5>Curso bootstrap</h5>
                    <h5>Instrutor:</h5>
                </div>
                <div>
                    <h5>Andamento: Status</h5>
                    <h5>Horário:</h5>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Descrição</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptates illo,
                    quam ducimus officia expedita dolorum illum sequi temporibus nesciunt aut amet, nostrum perspiciatis
                    itaque enim velit asperiores assumenda doloribus?</p>

                <div class="text-center">
                    <a href="#" class="btn btn-primary">Declaração</a>
                    <a href="#" class="btn btn-primary">Frequência</a>
                    <a href="#" class="btn btn-primary">Certificado</a>
                </div>
            </div>
        </div>

@endsection