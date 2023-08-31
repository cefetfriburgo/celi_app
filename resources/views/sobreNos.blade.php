@extends('layouts.main')

@section('titulo')
Sobre Nos
@endsection

@section('principal')
<main class="container mt-5 mb-5">
        <div class="container bg-body-tertiary rounded p-4">
            <div class="mb-5">
                <h1 class="text-center mb-4 pb-3 border-bottom">Sobre o CELI</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda error provident nemo dicta cupiditate veritatis vitae, odio, temporibus cum perferendis omnis, iste inventore expedita officiis ab obcaecati similique asperiores. Ex!</p>
                <p>Dolores tenetur iusto nostrum corporis ad, corrupti quam quibusdam amet aliquam dolore sapiente laborum ducimus, quasi id ipsa earum consectetur fuga a! Consectetur adipisicing elit. Eum molestias ipsam expedita unde magnam ut facere soluta minima. Optio voluptatibus possimus nihil culpa enim temporibus perspiciatis obcaecati repellat illo quisquam.</p>
            </div>

            <div class="d-flex justify-content-center mb-5 ">
                <picture>
                    <img src="assets/img/celi.png" class="img-fluid" alt="">
                </picture>
            </div>
            <div>
                <h2 class="text-center mb-4 pb-3 border-bottom">Missão e Objetivo</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda error provident nemo dicta cupiditate veritatis vitae, odio, temporibus cum perferendis omnis, iste inventore expedita officiis ab obcaecati similique asperiores. Ex!</p>
                <ol type="1">
                    <li>Lorem, ipsum dolor sit amet consectetur.</li>
                    <li>Assumenda error provident nemo dicta.</li>
                    <li>Eum molestias ipsam expedita unde magnam</li>
                </ol>
                <p>Dolores tenetur iusto nostrum corporis ad, corrupti quam quibusdam amet aliquam dolore sapiente laborum ducimus.</p>
            </div>
        </div>
    </main>
@endsection