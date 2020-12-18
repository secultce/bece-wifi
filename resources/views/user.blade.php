<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('site/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/user.css')}}">
    <title>User Page</title>
</head>
<body>
@extends('layouts.app')
@section('content')
        @include('layouts/menu')
        <!-- <div id="wrapper" class="animate"> -->
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-8">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Registro de Usuário</h3>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data de Registro</th>
                        <th scope="col">Data de Alteração</th>
                      </tr>
                    </thead>
                    @if(count($users) > 0)
                        @foreach($users as $u)
                    <tbody>
                      <tr>
                        <td>{{$u -> id}}</td>
                        <td>{{$u -> name}}</td>
                        <td>{{$u -> email}}</td>
                        <td>{{$u -> created_at}}</td>
                        <td>{{$u -> updated_at}}</td>
                      </tr>
                      @endforeach
                    @else
                        <tr>
                        <td colspan="100%">
                            <h4 class="text-center">Nenhum usuário cadastrado</h4>
                        </td>
                        </tr>
                    @endif
                    </tbody>
                   </table>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

<!-- MODAL FORM CADASTRO DO USUÁRIO-->
   <div class="modal fade" id="modalCadastrarUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
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
              <input type="text" class="form-control" id="nome" name="name" placeholder="Fulano da Silva" required>
            </div>
          </div>
          <div class="form-group" required>
            <label for="nomeVisitante" class="text-info">Email do usuário:</label><br>
            <div class="input-group mb-2">
              <input type="text" class="form-control" id="nome" name="name" placeholder="fulano@email.com" required>
            </div>
          </div>
          <div class="form-group" required>
            <label for="nomeVisitante" class="text-info">Cadastre uma senha de usuário:</label><br>
            <div class="input-group mb-2">
              <input type="text" class="form-control" id="nome" name="name" placeholder="**********"  required>
            </div>
          </div>
          <div class="form-group">
            <label for="nomeVisitante" class="text-info">Confirme sua senha de usuário:</label><br>
            <div class="input-group mb-2">
              <input type="text" class="form-control" id="nome" name="name" placeholder="**********" required>
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
  @endsection
    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/dataTables.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <script src="{{asset('site/mask.js')}}"></script>
    <script src="{{ asset('assets/js/visitor.js')}}"></script>
    <script src="{{ asset('assets/js/home.js')}}"></script>
</body>
</html>
