@extends('layouts.main')

@section('titulo')
Login
@endsection

@section('principal')
<main class="container mt-5 mb-5">
  <div class="container bg-body-tertiary rounded p-4">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-primary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white mb-5">Insira o email e senha!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Senha</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white" href="#!">Esqueci minha senha</a></p>
              {{-- <button class="btn btn-outline-light btn-lg px-5 mb-3" type="submit"><a class="text-white" href="{{route('alunosId', ['aluno_id'=>1])}}">Entrar Como Aluno</a></button>
              <button class="btn btn-outline-light btn-lg px-5" type="submit"><a href="{{route('alunosId', ['aluno_id'=>1])}}">Entrar Como Colaborador</a></button> --}}
              <a class="btn btn-light text-primary" href="#">Entrar</a>
            </div>
            <div>
              <p class="mb-0">Primeira vez por aqui?</p> <br>
              <a href="alunos/cadastrar" class="text-white fw-bold">Cadastre-se como aluno</a> <br>
              <a href="cadastro/proponente" class="text-white fw-bold">Cadastre-se como proponente</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</main>
@endsection