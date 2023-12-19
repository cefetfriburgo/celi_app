@extends('layouts.main')

@section('titulo')
Aluno
@endsection
<!-- Remover? -->
@section('principal')
<main class="container mt-5 mb-5">
  <div class="container bg-body-tertiary rounded p-4">
    <h1 class="text-center border-bottom pb-3">Bem-vindo! </h1>

    <div class="row">
      <div class="col">
        <div class="card mb-3">
          <h5 class="card-header mt-2">Cursos Realizados:
          </h5>
          <div class="card-body">
            <h5 class="card-title">Curso De Libras</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fuga iure culpa illo! Similique harum id quisquam debitis minima, autem repellendus expedita inventore temporibus suscipit voluptatum? Beatae ipsum inventore commodi!</p>
            <a href="curso-bootstrap.html" class="btn btn-primary">Mais detalhes</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card mb-3">
          <h5 class="card-header mt-2">Sugestões para você:
          </h5>
          <div class="card-body">
            <h5 class="card-title">Mini Curso De Git</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fuga iure culpa illo! Similique harum id quisquam debitis minima, autem repellendus expedita inventore temporibus suscipit voluptatum? Beatae ipsum inventore commodi!</p>
            <a href="curso-bootstrap.html" class="btn btn-primary">Mais detalhes</a>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col">
        <div class="card mb-3">
          <h5 class="card-header mt-2">Cursos Em Andamento:
          </h5>
          <div class="card-body">
            <h5 class="card-title">Mini Curso De Empreendedorismo</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fuga iure culpa illo! Similique harum id quisquam debitis minima, autem repellendus expedita inventore temporibus suscipit voluptatum? Beatae ipsum inventore commodi!</p>
            <a href="curso-bootstrap.html" class="btn btn-primary">Mais detalhes</a>
          </div>
        </div>
      </div>
    </div>
  </div>



</main>
@endsection