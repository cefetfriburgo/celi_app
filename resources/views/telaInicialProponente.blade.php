@extends('layouts.main')

@section('titulo')
Tela inicial Proponente
@endsection

@section('principal')

<p>Bem vindo proponente Nome do Proponente</p> <!-- Pegar dados de forma dinâmica do banco de dados -->
<div class="container mt-2 text-start">
    <div class="row">
        <div class="col-md-7">
            <h1>Nome do proponente</h1>
            <a href="#" class="btn btn-light" style="margin-top: 10px;">Meus cursos</a> <!-- Adicionar link para visualização das atividades criadas pelo respectivo proponente -->
            <a href="#" class="btn btn-light" style="margin-left: 10px; margin-top: 10px;">Propor uma Atividade</a> <!-- Adicionar link para a criação de uma proposta de atividade -->
            <div class="card bg-primary text-white justify-content-left" style="border-radius: 1rem; margin-top: 75px; width: 400px;">
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
            <img src="/img/avatar.png" alt="Foto do Proponente" />
            <a href="/proponente/1/perfil" class="btn btn-primary" style="margin-top: 10px;">Meus dados pessoais</a>
        </div>

        @endsection