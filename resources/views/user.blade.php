<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css')}}"> 
    <title>User Page</title>
</head>
<body>
    <div id="wrapper" class="animate">
      @include('layouts/menu')
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <table class="table">
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
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/home.js')}}"></script>
        
</body>
</html>