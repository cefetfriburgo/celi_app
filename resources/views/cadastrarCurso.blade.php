@extends('layouts.main')

@section('titulo')
Cadastro
@endsection

@section('principal')
<main class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
        <h1 class="text-center mb-4 pb-3 border-bottom">Cadastrar Curso</h1>
        <form action="criarCurso" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="nome">Nome da Proposta</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>
            <div class="form-group mb-4">
                <label for="descricao">Descrição do evento</label>
                <textarea class="form-control" name="descricao" rows="3" placeholder="Faça uma descrição do evento e suas atividades, seu objetivo e detalhes."></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="exampleFormControlTextarea1">Carga horária</label>
                <input type="number" step="0.1" class="form-control" id="cargaHoraria" name="cargaHoraria" placeholder="Informe a carga horária total do curso."></textarea>
            </div>
            {{-- <div class="form-group mb-2">
                <label for="exampleFormControlSelect1">Tipo de Evento</label>
                <select class="form-control" name="tipo>
                    <option>Curso</option>
                    <option>Palestra</option>
                    <option>Oficina/Workshop</option>
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="exampleFormControlFile1">Arquivo da Proposta / Plano de Aula: </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div> --}}
            <div class="form-group row">
                <div>
                    <button type="submit" class="btn btn-primary">Enviar Proposta</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</main>

@endsection