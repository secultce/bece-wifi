<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('site/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/visitor.css')}}">
  <title>Visitantes</title>
</head>

<body>
  <div id="wrapper" class="animate">
      
    
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <span class="navbar-toggler-icon leftmenutrigger"></span>
      <a class="navbar-brand" href="#">SECULT PF SENSE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8000/visitors">Visitantes
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8000/vouchers">Vouchers</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="http://localhost:8000/users">Usuários</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8000/login">Sair</a>
          </li>
        </ul>

      </div>
    </nav>
    <div class="container-fluid">
      <div class="container">
        <div class="row">


          <div class="col-md-12 col-md-offset-1">

            @if(Request::get('status') == 'success')
              <div class="alert alert-success" role="alert">
                {{ Request::get('message') }}    
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>        
              </div>
            @endif

            @if(Request::get('status') == 'error')
              <div class="alert alert-danger" role="alert">
                {{ Request::get('message') }}    
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>        
              </div>
            @endif
            
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Registro de Visitantes</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="" class="btn btn-primary btn-xs pull-right" id="add-visitor" data-toggle="modal"
                      data-target="#modalCadastrarUser"><b> + </b>Cadastrar Visitante</a>
                  </div>
                </div>
              </div>
              <br>
              <div class="panel-body">
                <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
                  <thead class="thead-dark">

                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                 @if(count($visitors) > 0)
                  @foreach($visitors as $v)
                    <tr>
                      <td>{{ $v->id }}</td>
                      <td>{{ $v->name }}</td>
                      <td class="showCPF">{{ $v->cpf }}</td>
                      <td class="text-center">
                        <a class='btn btn-info btn-xs' href="#" data-toggle="modal" data-target="#modalGerarVoucher">
                          <span class="glyphicon glyphicon-edit"></span> 
                          Gerar Novo Voucher
                        </a> 
                          <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalEditarUser-{{$v->id}}">
                            <span class="glyphicon glyphicon-remove"></span> 
                            Editar
                        </a>
                      </td>

                      <div class="modal fade" id="modalEditarUser-{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-center">
                              <h4 class="modal-title w-100 font-weight-bold">Editar dados do Visitante</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body mx-3">
                              <form method="post" action="{{ url("visitors/{$v->id}") }}">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <div class="form-group">
                                  <label for="nomeVisitante" class="text-info">Nome do Visitante:</label><br>
                                  <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="nome" name="name" value="{{$v->name}}" required>
                                  </div>
                                </div>
                      
                                <div class="form-group">
                                  <label for="cpf" class="text-info">CPF:</label><br>
                                  <div class="input-group mb-2">
                                   <input type="text" class="form-control cpfOuCnpj" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" value="{{$v->cpf}}" required>
                                    
                                  </div>
                                </div>
                      
                                <div class="text-center">
                                  <input type="submit" value="Redefinir" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    </tr>
                  @endforeach
                  @else
                    <tr>
                      <td colspan="100%"> 
                        <h4 class="text-center">Nenhum visitante cadastrado</h4>
                      </td>
                    </tr>
                 @endif

                </table>

              </div>
              <br>
            </div>

          </div>
        </div>
      </div>

      

    </div>
  </div>

  <!-- MODAL FORM CADASTRO DO VISITANTE-->
  <div class="modal fade" id="modalCadastrarUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Cadastro de Visitante</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="{{ url('visitors') }}">
        @csrf
        <div class="modal-body mx-3">
          <div class="form-group">
            <label for="nomeVisitante" class="text-info">Nome do Visitante:</label><br>
            <div class="input-group mb-2">

              <input type="text" class="form-control" id="nome" name="name" placeholder="Fulano da Silva" required>
            </div>
          </div>
          
            <div class="form-group">
              <label for="cpf" class="text-info">CPF:</label><br>
              <div class="input-group mb-2">
  
                <input type="text" class="form-control cpfOuCnpj" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" required>
              </div>
            </div>
  
            <div class="text-center">
              <input type="submit" value="Cadastrar" class="btn btn-info btn-block rounded-0 py-2">
            </div>
          </form>
          

        </div>
      </div>
    </div>
  </div>
  <!--MODAL GERAR VOUCHER-->
   <div class="modal fade" id="modalGerarVoucher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Voucher gerado com sucesso!</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="text-center">
            <h3>QEUQWUIDASHDAS456454</h3>
          </div>
            
       
          <br>
          <br>

          <div class="text-center">
            <button type="button" class="btn btn-success btn-md" data-dismiss="modal">Voltar</button>
          </div>

        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('site/jquery.js')}}"></script>
  <script src="{{asset('site/dataTables.js')}}"></script>
  <script src="{{asset('site/bootstrap.js')}}"></script>
  <script src="{{asset('site/mask.js')}}"></script>
  <script src="{{ asset('assets/js/visitor.js')}}"></script>
  <script src="{{ asset('assets/js/home.js')}}"></script>

</body>

</html>