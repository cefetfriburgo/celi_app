@extends('layouts.main')

@section('titulo')
Início
@endsection

@section('principal')

            <!-- DESCRIÇÃO -->
            <div class="row bg-body-tertiary rounded my-3 py-3 d-flex align-items-center">
                <img class="col col-12 col-lg-7" src="img/celi.png" alt="Logo do CELi">
                <p class="col col-12 col-lg-5 fs-5 m-0 text-center">
                    Intitulado Centro de Educação e Linguagens, o CELi é
                    um Programa de Extensão do CEFET/RJ campus Nova Friburgo que está em funcionamento ininterrupto no
                    campus desde 2009 até hoje!
                </p>
            </div>

            <!-- CURSOS -->
            <div class="row bg-body-tertiary rounded my-3 py-3">
                <div>
                    <h5>Acesse nossos cursos!</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nostrum doloribus aliquam
                        perspiciatis porro culpa quibusdam obcaecati quidem aspernatur. Neque corporis libero
                        perspiciatis
                        molestias odio rerum illo quam architecto amet.</p>
                    <a href="/cursos" class="btn btn-primary">Veja mais</a>
                </div>
            </div>

            <!-- CAROUSEL -->
            <div class="row bg-body-tertiary rounded my-3 py-3">

                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/CEFET_NovaFriburgo.jpg" class="d-block w-100 rounded" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/CEFET_NovaFriburgo.jpg" class="d-block w-100 rounded" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/CEFET_NovaFriburgo.jpg" class="d-block w-100 rounded" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>

            <!-- NOTÍCIAS -->
            <div class="row bg-body-tertiary rounded my-3 py-3">
                <div class="col-12">
                    <div class="mb-2">
                        <h5>Notícias</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolores voluptate
                            reiciendis maiores numquam nam optio qui dolor velit cum, deleniti ducimus molestias
                            provident
                            nesciunt eveniet vero culpa. Dicta, dolore.</p>
                    </div>

                    <ol class="list-group list-group-numbered">
                        @foreach($cursos as $curso)
                        <li class="list-group-item d-flex justify-content-between align-items-start ">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">{{ $curso->nome }}</div>
                                {{ $curso->descricao }}
                            </div>
                            <span class="badge bg-primary rounded-pill">30/06/2023</span>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
@endsection
