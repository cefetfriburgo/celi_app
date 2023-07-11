@extends('layouts.main')

@section('titulo')
Aluno
@endsection

@section('principal')
<main class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <h1 class="text-center border-bottom pb-3">Bem-vindo, {{ $aluno->nome }}!</h1>
    </div>

    
</main>
@endsection