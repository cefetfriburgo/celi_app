@extends('layouts.main')

@section('titulo')
Aluno
@endsection

@section('principal')

<h1>Bem-vindo, {{ $aluno->nome }}!</h1>

@endsection
