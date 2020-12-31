<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('site/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/home.css')}}">
    <!-- Scripts -->
    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/dataTables.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <script src="{{asset('site/mask.js')}}"></script>
    <script src="{{ asset('assets/js/home.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>
    <div id="wrapper" class="animate">
        @include('layouts/menu')
        <div class="container-fluid">
            @include('layouts/message')
            @yield('content')
        </div>
    </div>
</body>
</html>


