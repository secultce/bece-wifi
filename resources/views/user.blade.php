@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Registro de Usuário</h3>
                    <table class="table" class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($users) > 0)
                            @foreach($users as $u)
                            <tr>
                                <td>{{$u -> id}}</td>
                                <td>{{$u -> name}}</td>
                                <td>{{$u -> email}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="col text-right">
                        <a href="" class="btn btn-primary btn-xs pull-right" id="add-user" data-toggle="modal" data-target="#modalCadastrarUser"><b> + </b>Cadastrar Usuário</a>
                        <a href="" class="btn btn-primary btn-xs pull-right" id="edit-user" data-toggle="modal" data-target="#modalEditarUser">Editar</a>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

    <!-- MODAL FORM CADASTRO DO USUÁRIO-->
    <div class="modal fade" id="modalCadastrarUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Cadastro de Usuário</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ url('users') }}">
                    @csrf
                    <div class="modal-body mx-3">
                        <div class="form-group" required>
                            <label for="nomeVisitante" class="text-info">Nome do usuário:</label><br>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Fulano da Silva" required>
                            </div>
                        </div>
                        <div class="form-group" required>
                            <label for="nomeVisitante" class="text-info">Email do usuário:</label><br>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="email" name="email" placeholder="fulano@email.com" required>
                            </div>
                        </div>
                        <div class="form-group" required>
                            <label for="InputPassword1" class="text-info">Cadastre uma senha de usuário:</label><br>
                            <div class="input-group mb-2">
                                <input type="password" class="form-control" id="password" name="password" placeholder="**********" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1" class="text-info">Confirme sua senha de usuário:</label><br>
                            <div class="input-group mb-2">
                                <input type="password" class="form-control" id="password_verify" name="password_verify" placeholder="**********" required>
                            </div>
                        </div>
                        <input type="radio" id="admin" name="tipo" value="admin">
                        <label for="admin">Admin</label><br>
                        <input type="radio" id="padrão" name="tipo" value="padrão">
                        <label for="padrão">Padrão</label><br>
                        <div class="text-center">
                            <input type="submit" value="Cadastrar" class="btn btn-info btn-block rounded-0 py-2">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <script src="{{ asset('assets/js/user.js')}}"></script> -->

<!-- MODAL FORM CADASTRO DO USUÁRIO-->
<div class="modal fade" id="modalEditarUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Editar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ url('users') }}">
                    @csrf
                    <div class="modal-body mx-3">
                        <div class="form-group" required>
                            <label for="nomeVisitante" class="text-info">Nome do usuário:</label><br>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Fulano da Silva" required>
                            </div>
                        </div>
                        <div class="form-group" required>
                            <label for="nomeVisitante" class="text-info">Email do usuário:</label><br>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="email" name="email" placeholder="fulano@email.com" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Editar" class="btn btn-info btn-block rounded-0 py-2">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/user.js')}}"></script>
@endsection

