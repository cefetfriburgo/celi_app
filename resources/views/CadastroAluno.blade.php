@extends('layouts.main')

@section('titulo')
Cadastro Aluno
@endsection

@section('principal')

<div class="col-md-6">
  <h2 class="mb-4">Registro como Aluno</h2>
  <form action="criarAluno" method="post">
    @csrf
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control" name="email" id="email" required>
    </div>
    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="text" class="form-control" name="telefone" id="telefone" required>
    </div>
    <div class="mb-3">
      <label for="endereco" class="form-label">Endereço</label>
      <input type="text" class="form-control" name="endereco" id="endereco" required>
    </div>
    <div class="mb-3">
      <label for="cpf" class="form-label">CPF</label>
      <input type="text" class="form-control" name="cpf" id="cpf" required>
    </div>
    {{-- <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" required>
    </div>
    <div class="mb-3">
      <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
      <input type="password" class="form-control" id="confirmarSenha" required>
    </div> --}}
    <button type="submit" class="btn btn-primary" style="margin-bottom: 15px;">Registrar</button>
  </form>
</div>

@endsection