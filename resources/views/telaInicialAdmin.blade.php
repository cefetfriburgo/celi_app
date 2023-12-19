@extends('layouts.main')

@section('titulo')
Tela inicial administrador
@endsection

@section('principal')

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <div class="collapse navbar-collapse" style="display: flex; justify-content: left;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Avaliar propostas de Atividades<span class="sr-only"></span></a><!-- Adicionar link para a avaliação de propostas de atividades -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Criar novas notícias/atividades</a><!-- Adicionar link para a criação de novas notícias/atividades -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Visualizar notícias</a><!-- Adicionar link para a página de visualização de notícias -->
                </li>
            </ul>
        </div>
    </div>
</nav>
<h2 style="text-align: left;">Bem-vindo administrador(a) NomeDoAdministrador</h2> <!-- Pegar o nome do administrador de maneira dinâmica do banco de dados -->

<div class="mt" style="display: flex; justify-content: right;">
    <img src="/img/avatar.png" alt="foto de perfil">
</div>


@endsection