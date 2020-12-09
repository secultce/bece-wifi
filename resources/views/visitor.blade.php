<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/visitor.css')}}"> 
    <title>Visitor Page</title>
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
            </ul>
            
          </div>
        </nav>
        <div class="container-fluid">
             
          
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="container">
                    <div class="row col-md-12 col-md-offset-2 custyle">
                      
                        <div class="col-md-6" id="search-id">
                          <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Pesquisar(Nome, CPF, ID)">
                          <br>
                        </div>
                        <div class="col-md-6" id="add-visitor">
                          <a href="#" class="btn btn-primary btn-xs pull-right" ><b>+</b>Cadastrar Visitantes</a>
                        </div>
                      
                    <table class="table table-striped custab" id="myTable">
                        <thead>
                       
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
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Products</td>
                                <td>Main Products</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Blogs</td>
                                <td>Parent Blogs</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
                    </table>
                    </div>
                </div>
                  {{-- <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/visitor.js')}}"></script>
        
</body>
</html>