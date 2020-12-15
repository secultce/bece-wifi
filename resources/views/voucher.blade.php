<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/visitor.css')}}"> 
    <title>Vouchers</title>
</head>
<body>
    <div id="wrapper" class="animate">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
          <span class="navbar-toggler-icon leftmenutrigger"></span>
          <a class="navbar-brand" href="#">SECULT PF SENSE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
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
                    <div class="panel panel-default panel-table">
                      <div class="panel-heading">
                        <div class="row">
                          <div class="col col-xs-6">
                            <h3 class="panel-title">Registro de Vouchers</h3>
                          </div>
                          <div class="col col-xs-6 text-right">   
                            {{-- <a href="#" class="btn btn-primary btn-xs pull-right" id="add-visitor"></a> --}}
                                                    
                            
   
                          <label class="btn btn-primary" for="my-file-selector">
                              <input id="my-file-selector" type="file" class="d-none">
                              Importar Voucher
                          </label>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="panel-body">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="myTable">
                          <thead class="thead-dark">
                         
                              <tr>
                                  <th>ID</th>
                                  <th>Voucher</th>
                                  <th>Visitante</th>
                                  <th>CPF</th>
                                  <th>Data Importação</th>
                                  <th>Data Voucher</th>
                                  <th>Ativo</th>
                              </tr>
                          </thead>
                          @foreach ($vouchers as $v)
                              <tr>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->voucher }}</td>
                                <td>{{ isset($v->visitor) ? $v->visitor->name: "" }}</td>
                                <td class="showCPF">{{ isset($v->visitor) ? $v->visitor->cpf: "" }}</td>
                                <td>{{ date('d-m-Y' , strtotime($v->created_at)) }}</td>
                                <td>{{ $v->updated_at ? date('d-m-Y' , strtotime($v->updated_at)): "" }}</td>
                                <td>{{ $v->active ? "Sim": "Não" }}</td>
                              </tr>
                          @endforeach
                      </table>
                    
                      </div>
                      <br>
                    </div>
        
        </div></div></div>
        
         
        </div>
      </div>

    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/dataTables.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/voucher.js')}}"></script>
    <script src="{{ asset('assets/js/home.js')}}"></script>
        
</body>
</html>