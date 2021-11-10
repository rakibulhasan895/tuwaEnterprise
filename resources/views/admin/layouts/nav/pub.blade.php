<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Tuwa') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app" class="container" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><img class="bd-placeholder-img nav-link" style="width:70px;height:70px;border-radius:20%;"  src="/img/tuwa.jpg" width="1300" height="160" alt="Image"></img></a>
        <h3>Tuwa Enterprise</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ url('paper') }}"> Paper <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{ url('agroniservice') }}">Services</a>
            <a class="nav-item nav-link" href="{{ url('agronibishesotto') }}">Bishesotto</a>
            <a class="nav-item nav-link" href="{{ url('/absaccountdetails') }}">accountdetailspaper</a>
            <a class="nav-item nav-link" href="{{ url('/absxyinterestdetails') }}">absinterst</a>
            <a class="nav-item nav-link" href="{{ url('contactus') }}">contact</a>
            <a class="nav-item nav-link" href="{{ url('/tuwakrishi') }}">Krishi</a>
            <a class="nav-item nav-link" href="#">Computers</a>
          </div>
        </div>
      </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>
