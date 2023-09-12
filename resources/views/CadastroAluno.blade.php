@extends('layouts.main')

@section('titulo')
Cadastro Aluno
@endsection

@section('principal')

<div class="col-md-6">
  <h2 class="mb-4">Registro como Aluno</h2>
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
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" required>
    </div>
    <div class="mb-3">
      <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
      <input type="password" class="form-control" id="confirmarSenha" required>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom: 15px;">Registrar</button>
  </form>
</div>

@endsection