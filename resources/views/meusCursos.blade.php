@extends('layouts.main')

@section('titulo')
Aluno
@endsection

@section('principal')
<main class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <h1 class="text-center mb-4">Meus Cursos</h1>
        <div class="row">
            <div class="card p-3 mb-3">
                <div class="card-header d-flex justify-content-between">
                    <h2>Curso de Bootstrap</h2>
                    <p class="p-3 mb-2 bg-danger text-white rounded">Em andamento</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Instrutor(a): José</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam necessitatibus est explicabo, maxime vero sunt eveniet suscipit provident, excepturi eos non odit cumque magni ipsa, ex voluptatem molestiae obcaecati animi!</p>
                    <p><b>Horário:</b> Segunda à Sexta. 13:00 horas.</p>
                    <div class="d-flex justify-content-between flex-wrap">
                        <a href="#" class="btn btn-primary mt-3">Declaração</a>
                        <a href="#" class="btn btn-primary mt-3">Frequencia</a>
                        <a href="#" class="btn btn-primary mt-3">Certificado</a>
                    </div>
                </div>
            </div>
            <div class="card p-3">
                <div class="card-header d-flex justify-content-between">
                    <h2>Curso de Ingles</h2>
                    <p class="p-3 mb-2 bg-success text-white rounded">Concluído</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Instrutor(a): Ana</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sunt eius fuga harum magni, facere fugiat omnis quae mollitia at iure voluptas, distinctio, laborum deleniti possimus temporibus autem itaque! Neque.</p>
                    <p><b>Horário:</b> Segunda à Sexta. 16:00 horas.</p>
                    <div class="d-flex justify-content-between flex-wrap">
                        <a href="#" class="btn btn-primary mt-3">Declaração</a>
                        <a href="#" class="btn btn-primary mt-3">Frequencia</a>
                        <a href="#" class="btn btn-primary mt-3">Certificado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection