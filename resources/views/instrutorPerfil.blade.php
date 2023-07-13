@extends('layouts.main')

@section('titulo')
Instrutor
@endsection

@section('principal')
<main class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <h1 class="text-center mb-4 pb-3 border-bottom">Perfil</h1>

        <div class="container mt-5">
            <div class="row">
                <div class="col d-inline-flex justify-content-center">
                    <picture>
                        <img src="/celi/assets/img/avatar.png" class="rounded-circle rotate" alt="avatarImagem">
                    </picture>
                </div>
                <div class="col">
                    <h4>Nome:</h4>
                    <p>José Carlos Silva</p>
                    <h4>CPF:</h4>
                    <p>000.000.000-00</p>
                    <h4>Endereço</h4>
                    <p>Rua Algum Lugar Distante, Centro. Nova Friburgo</p>
                    <h4>Telefone</h4>
                    <p>(22) 99988-7766</p>
                    <h4>E-mail</h4>
                    <p>email@email.com</p>
                    <h4>Qualificação</h4>
                    <p>Desenvolvedor Front-End</p>
                    <br>
                    <button type="button" class="btn btn-outline-primary ">Editar Informações</button>
                </div>
            </div>
        </div>
    </div>


</main>
@endsection