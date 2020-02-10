<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pizza') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand text-white ml-5" href="/new folder/Basket/pizza/public/">{{config('app.name') ?? 'Laravel'}}</a>


    <div class="collapse navbar-collapse justify-content-end">
        <a href="{{url('basket')}}" class="mr-5 text-light text-decoration-none"><img src="{{asset('img/cart.png')}}" width="35" height="35" /> Cart <span> (@yield('count_cart')) </span></a>
    </div>
  </nav>
</header>

    @yield('content')

</body>
</html>
