@extends('layouts.main')

@section('titulo')
Tela inicial administrador
@endsection

@section('principal')

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
        <div class="collapse navbar-collapse" style="display: flex; justify-content: left;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Avaliar propostas de cursos<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Criar novas notícias/eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Visualizar notícias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<h2 style="text-align: left;">Bem-vindo administrador(a) NomeDoAdministrador</h2>

<div class="mt" style="display: flex; justify-content: right;">
    <img src="img/avatar.png" alt="img">
</div>


@endsection