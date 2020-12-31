<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('site/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
    <title>login</title>
</head>
<body>
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xl-12">
               <div class="form-wrap">
                <div id="img-div">
                    <img id="img" src="{{asset('assets/img/bece1.jpeg')}}" class="img-fluid" alt="Imagem responsiva" width="300px" height="150px">
                </div></br>
                <h1>Entre com sua conta de email</h1>
                    <form role="form" action="{{url('authenticate')}}" method="post" id="login-form" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="usuario@example.com" value="">
                            @csrf
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Mostrar a senha</span>
                        </div>
                        <br>
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <div class="alert alert-{{ $msg }}" role="alert">
                                    {!! Session::get('alert-' . $msg) !!}
                                </div>
                            @endif
                        @endforeach

                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Conecte-se">
                    </form>
                    <!-- <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Esqueci minha senha?</a> -->
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/home.js')}}"></script>
    <script src="{{ asset('assets/js/login.js')}}"></script>
</body>
</html>
