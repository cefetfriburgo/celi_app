@extends('layouts.main')

@section('titulo')
Cadastro Proponente
@endsection

@section('principal')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="mb-4">Cadastro para Proponente</h2>
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="tel" class="form-control" id="telefone" required>
        </div>
        <div class="mb-3">
          <label for="departamento" class="form-label">Vaga pretendida</label>
          <select class="form-select" id="departamento" required>
            <option value="" disabled selected>Selecione o curso como Proponente</option>
            <option value="depto1">Curso1</option>
            <option value="depto2">Curso2</option>
            <option value="depto3">Curso3</option>
            <option value="depto3">Outros</option>
            <!-- Adicione mais opções conforme necessário -->
          </select>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" required>
        </div>
        <div class="mb-3">
          <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirmarSenha" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Proponente</button>
      </form>
    </div>
  </div>
</div>

@endsection