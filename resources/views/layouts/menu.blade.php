<nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <span class="navbar-toggler-icon leftmenutrigger"></span>
      <a class="navbar-brand" href="#">SECULT WIFI PFSENSE</a>
      <div class="col text-right">
         <a href="" class="btn btn-primary btn-xs pull-right" id="add-user" data-toggle="modal"
        data-target="#modalCadastrarUser"><b> + </b>Cadastrar Usuário</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('visitors')}}">Visitantes
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('vouchers')}}">Vouchers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('users')}}">Usuários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('logout')}}">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
