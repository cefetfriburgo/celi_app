@extends('layouts.main')

@section('titulo')
Tela incial aluno
@endsection


<div class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <h1 class="text-center border-bottom pb-3">Bem-vindo{{--, {{ $aluno->nome }}! --}}</h1>
    </div>
    <div class="container mt-3 mb-3">
        <div class="d-grid">
            <a href="#" class="btn btn-primary btn-block">Cursos inscritos</a>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3">
            <h4 class="card-header mt-2">Sugestões para você:</h4>
            <div class="card-body mt-3 mb-3 border">
                <h5 class="card-title">Curso Lorem</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fuga
                    iure culpa illo! Similique harum id quisquam debitis minima, autem repellendus expedita
                    inventore temporibus suscipit voluptatum? Beatae ipsum inventore commodi!</p>
                <a href="curso-bootstrap.html" class="btn btn-primary">Mais informações</a>
            </div>
            <div class="card-body mt-3 mb-3 border">
                <h5 class="card-title">Curso Lorem</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fuga
                    iure culpa illo! Similique harum id quisquam debitis minima, autem repellendus expedita
                    inventore temporibus suscipit voluptatum? Beatae ipsum inventore commodi!</p>
                <a href="curso-bootstrap.html" class="btn btn-primary">Mais informações</a>
            </div>
            <div class="card-body mt-3 mb-3 border">
                <h5 class="card-title">Curso Lorem</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fuga
                    iure culpa illo! Similique harum id quisquam debitis minima, autem repellendus expedita
                    inventore temporibus suscipit voluptatum? Beatae ipsum inventore commodi!</p>
                <a href="curso-bootstrap.html" class="btn btn-primary">Mais informações</a>
            </div>
        </div>
    </div>

</div>
</div>
@section('principal')