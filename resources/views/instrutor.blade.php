@extends('layouts.main')

@section('titulo')
Instrutor
@endsection
<!--Verificar se continuara na aplicaçao-->
@section('principal')
<main class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <h1 class="text-center border-bottom pb-3">Bem-vindo, {{ $instrutor->nome }}!</h1>
    </div>

    
</main>
@endsection