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
      @include('layouts/menu')
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
                            <h3 class="panel-title">Registro de Vouchers</h3>
                          </div>
                          <div class="col col-xs-6 text-right">   
                          <form method="post" action="{{ url('vouchers') }}" enctype="multipart/form-data">
                            @csrf
                            <label class="btn btn-primary" for="vouchers">Importar Voucher </label>
                            <input id="vouchers" name="vouchers" type="file" class="d-none" onchange="this.form.submit()" >
                          </form>
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
                                <td>{{ isset($v->visitor) ? $v->visitor->name: "-" }}</td>
                                <td class="showCPF">{{ isset($v->visitor) ? $v->visitor->cpf: "-" }}</td>
                                <td>{{ date('d-m-Y' , strtotime($v->created_at)) }}</td>
                                <td>{{ $v->updated_at ? date('d-m-Y' , strtotime($v->updated_at)): "-" }}</td>
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