@extends('layouts.main')

@section('titulo')
Historico de aluno
@endsection

@section('principal')

<div class="mt-3 d-flex justify-content-center"> <!-- Exibir dados de maneira dinâmica-->
  <h1 style="color: white;">Curso {{'$nome_curso'}}</h1>
</div>
<div class="d-flex justify-content-center">
  <h2>{{ 'Nome_do_aluno' }}</h2>
</div>

<div class="container mt-3 d-flex justify-content-center">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Status</th>
        <th>Quantidade de faltas</th>
        <th>Nota</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ 'status' }}</td>
        <td>{{ 'qtd_faltas' }}</td>
        <td>{{ 'nota' }}</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection