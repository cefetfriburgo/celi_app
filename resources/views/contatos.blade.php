@extends('layouts.main')

@section('titulo')
Contatos
@endsection

@section('principal')
    <main class="container mt-5 mb-5">
        <div class="container bg-body-tertiary rounded p-4">
            <div>
                <h1 class="text-center mb-4 pb-2 border-bottom">Contatos</h1>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda error provident nemo dicta cupiditate veritatis vitae, odio, temporibus cum perferendis omnis, iste inventore expedita officiis ab obcaecati similique asperiores. Ex!</p>
                
                <h5 class="text-center mb-4 pb-2 border-bottom">Redes Sociais</h5>
                <div class="d-flex justify-content-around mb-4">
                    <a href="#" class=" text-decoration-none text-white"><i class="bi bi-instagram"></i> Instagram</a>
                    <a href="#" class=" text-decoration-none text-white"><i class="bi bi-facebook"></i> Facebook</a>
                </div>

                <h5 class="text-center mb-4 pb-2 border-bottom">Outros Contatos</h5>
                <div style="max-width: 100;;overflow: scroll;">
                    <table class="table table-striped table-light">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Organização</td>
                                <td>CELI</td>
                                <td>celi@email.com</td>
                                <td>(22) 2523-9988</td>
                            </tr>
                            <tr>
                                <td>Coordenadora</td>
                                <td>Ana Maria</td>
                                <td>email@email.com</td>
                                <td>(22) 9998877-6655</td>
                            </tr>
                            <tr>
                                <td>Coordenadora</td>
                                <td>Maria Clara</td>
                                <td>email@email.com</td>
                                <td>(22) 99977-5544</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
@endsection
