<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/visitor.css')}}"> 
    <title>User Page</title>
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
                <a class="nav-link" href="http://localhost:8000/visitor">Visitantes
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/voucher">Voucher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/users">Usuários</a>
              </li>
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
                            <h3 class="panel-title">Registro de Visitantes</h3>
                          </div>
                          <div class="col col-xs-6 text-right">
                            <a href="" class="btn btn-primary btn-xs pull-right" id="add-visitor" data-toggle="modal" data-target="#modalLoginForm"><b>+</b>Cadastrar Visitante</a>
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
                              <tr>
                                  <td>1</td>
                                  <td>News</td>
                                  <td>News Cate</td>
                                  <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Gerar Novo Voucher</a> <a href="#" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-remove"></span> Editar</a></td>
                              </tr>
                        

                      </table>
                    
                      </div>
                      <br>
                    </div>
        
        </div></div></div>
        
        <!-- MODAL FORM-->
         
        </div>
      </div>
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>
    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/dataTables.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/visitor.js')}}"></script>
    <script src="{{ asset('assets/js/home.js')}}"></script>
        
</body>
</html>