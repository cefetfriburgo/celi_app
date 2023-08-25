@extends('layouts.main')

@section('titulo')
Cursos
@endsection

@section('principal')
<main class="container mt-5 mb-5">
    <div class="container bg-body-tertiary rounded p-4">
    <h1 class="text-center mb-4">Meus Eventos</h1>
            <div class="row">
                <div>
                    <h3 class="text-center">Cursos</h3>
                    <div class="card p-3 mb-3">
                        <div class="card-header d-flex justify-content-between">
                            <h2>Curso de Bootstrap</h2>
                            <p class="p-3 mb-2 bg-warning text-white rounded">Aprovação Pendente</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam
                                necessitatibus est explicabo, maxime vero sunt eveniet suscipit provident, excepturi eos
                                non odit cumque magni ipsa, ex voluptatem molestiae obcaecati animi!</p>
                            <p><b>Horário:</b> Segunda à Sexta. 13:00 horas.</p>
                            <div class="d-flex justify-content-center flex-wrap">
                                <a href="#" class="btn btn-primary mt-3">Plano de Aula</a>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3">
                        <div class="card-header d-flex justify-content-between">
                            <h2>Curso de Ingles</h2>
                            <p class="p-3 mb-2 bg-success text-white rounded">Aprovado</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sunt
                                eius fuga harum magni, facere fugiat omnis quae mollitia at iure voluptas, distinctio,
                                laborum deleniti possimus temporibus autem itaque! Neque.</p>
                            <p><b>Horário:</b> Segunda à Sexta. 16:00 horas.</p>
                            <div class="d-flex justify-content-between flex-wrap">
                                <a href="#" class="btn btn-primary mt-3">Lançar Frequência</a>
                                <a href="#" class="btn btn-primary mt-3">Lançar Nota</a>
                                <a href="#" class="btn btn-primary mt-3">Diário</a>
                                <a href="#" class="btn btn-primary mt-3">Plano de Aula</a>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3">
                        <div class="card-header d-flex justify-content-between">
                            <h2>Curso de Ingles</h2>
                            <p class="p-3 mb-2 bg-info text-white rounded">Finalizado</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sunt
                                eius fuga harum magni, facere fugiat omnis quae mollitia at iure voluptas, distinctio,
                                laborum deleniti possimus temporibus autem itaque! Neque.</p>
                            <p><b>Horário:</b> Segunda à Sexta. 16:00 horas.</p>
                            <div class="d-flex justify-content-center flex-wrap">
                                <a href="#" class="btn btn-primary mt-3">Emitir Certificados</a>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mb-3">
                        <div class="card-header d-flex justify-content-between">
                            <h2>Curso de Bootstrap</h2>
                            <p class="p-3 mb-2 bg-danger text-white rounded">Reprovado</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam
                                necessitatibus est explicabo, maxime vero sunt eveniet suscipit provident, excepturi eos
                                non odit cumque magni ipsa, ex voluptatem molestiae obcaecati animi!</p>
                            <p><b>Horário:</b> Segunda à Sexta. 13:00 horas.</p>
                            <p class="card-text"><b>Motivo da Reprovação:</b> Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Nam necessitatibus est explicabo, maxime vero sunt eveniet suscipit
                                provident, excepturi.</p>
                            <div class="d-flex justify-content-center flex-wrap">
                                <a href="#" class="btn btn-primary mt-3">Revisar Plano</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-center">Palestras / Workshops</h3>
                    <div class="card p-3 mb-3">
                        <div class="card-header d-flex justify-content-between">
                            <h2>Palestra de Booatstrap</h2>
                            <p class="p-3 mb-2 bg-warning text-white rounded">Aprovação Pendente</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam
                                necessitatibus est explicabo, maxime vero sunt eveniet suscipit provident, excepturi eos
                                non
                                odit cumque magni ipsa, ex voluptatem molestiae obcaecati animi!</p>
                            <p><b>Horário:</b> 28 de Fevereiro de 2023. Segunda às 13:00 horas.</p>
                            <div class="d-flex justify-content-center flex-wrap">
                                <a href="#" class="btn btn-primary mt-3">Plano de Aula</a>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mb-3">
                        <div class="card-header d-flex justify-content-between">
                            <h2>Workshop de Bootstrap</h2>
                            <p class="p-3 mb-2 bg-success text-white rounded">Aprovado</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam
                                necessitatibus est explicabo, maxime vero sunt eveniet suscipit provident, excepturi eos
                                non
                                odit cumque magni ipsa, ex voluptatem molestiae obcaecati animi!</p>
                            <p><b>Horário:</b> 28 de Fevereiro de 2023. Segunda às 13:00 horas.</p>
                            <div class="d-flex justify-content-between flex-wrap">
                                <a href="#" class="btn btn-primary mt-3">Plano de Aula</a>
                                <a href="#" class="btn btn-primary mt-3">Lançar Frequência</a>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mb-3">
                        <div class="card-header d-flex justify-content-between">
                            <h2>Palestra de Bootstrap</h2>
                            <p class="p-3 mb-2 bg-info text-white rounded">Finalizado</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam
                                necessitatibus est explicabo, maxime vero sunt eveniet suscipit provident, excepturi eos
                                non
                                odit cumque magni ipsa, ex voluptatem molestiae obcaecati animi!</p>
                            <p><b>Horário:</b> Segunda à Sexta. 13:00 horas.</p>
                            <p class="card-text"><b>Motivo da Reprovação:</b> Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Nam necessitatibus est explicabo, maxime vero sunt eveniet suscipit
                                provident, excepturi.</p>
                            <div class="d-flex justify-content-center flex-wrap">
                                <a href="#" class="btn btn-primary mt-3">Emitir Certificados</a>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mb-3">
                        <div class="card-header d-flex justify-content-between">
                            <h2>Workshop de Bootstrap</h2>
                            <p class="p-3 mb-2 bg-danger text-white rounded">Reprovado</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam
                                necessitatibus est explicabo, maxime vero sunt eveniet suscipit provident, excepturi eos
                                non
                                odit cumque magni ipsa, ex voluptatem molestiae obcaecati animi!</p>
                            <p><b>Horário:</b> 28 de Fevereiro de 2023. Segunda às 13:00 horas.</p>
                            <p class="card-text"><b>Motivo da Reprovação:</b> Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Nam necessitatibus est explicabo, maxime vero sunt eveniet suscipit
                                provident, excepturi.</p>
                            <div class="d-flex justify-content-center flex-wrap">
                                <a href="#" class="btn btn-primary mt-3">Revisar Plano</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection