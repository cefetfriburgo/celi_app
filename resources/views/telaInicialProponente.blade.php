@extends('layouts.main')

@section('titulo')
Tela inicial Proponente
@endsection

@section('principal')

<p>Bem vindo proponente Nome do Proponente</p>
<div class="container mt-2 text-start">
    <div class="row">
        <div class="col-md-7">
            <h1>Nome do proponente</h1>
            <a href="alunocursos.html" class="btn btn-light" style="margin-top: 10px;">Meus cursos</a>
            <a href="alunocursos.html" class="btn btn-light" style="margin-left: 10px; margin-top: 10px;">Propor um Curso</a>
            <div class="card bg-dark text-white justify-content-left" style="border-radius: 1rem; margin-top: 75px; width: 400px;">
                <div class="justify-content-left">
                    <div class="card-body p-0 text-right">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <div style="margin-left: 10px;">
                                <h3 style="font-size: 1.25em;">Credenciais</h3>
                                <strong>Nome da Instituição</strong>
                                <p>Formação</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img src="img/avatar.png" alt="Foto do Proponente" />
            <a href="http://127.0.0.1:8000/Instrutor" class="btn btn-primary" style="margin-top: 10px;">Meus dados pessoais</a>
        </div>

        @endsection