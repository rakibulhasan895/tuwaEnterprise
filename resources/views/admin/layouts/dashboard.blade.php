<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template</title>
    <!-- 
      <link href="{{asset('css/dashboard.css ')}}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
-->
<!--<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->    
    <!-- Custom styles for this template -->
     <!-- Scripts -->

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
     <script src="{{ asset('js/app.js') }}" ></script>
    <link href="{{asset('css/app.css ')}}" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{url('/')}}">
    <img src=" {{asset('img/tuwa.jpg')}}" style="border-radius:20%;height:30px;"> </img>
  Tuwa Enterprize</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
         <li class="nav-link">
            <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('blogs')}}">Show</a></li>
              <li><a class="dropdown-item" href="{{url('blogs/create')}}"> create</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-link">
            <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Contacts
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('contacts')}}">Show</a></li>
              <li><a class="dropdown-item" href="{{url('contacts/create')}}"> create</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-link">
            <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Registration
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('registrations')}}">Show</a></li>
              <li><a class="dropdown-item" href="{{url('registrations/create')}}"> create</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-link">
            <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            krishi
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('tuwakrishis')}}">Show</a></li>
              <li><a class="dropdown-item" href="{{url('tuwakrishis/create')}}"> create</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-link">
            <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Agroni
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('absaccounts')}}">accountsdetails</a></li>
              <li><a class="dropdown-item" href="{{url('absxyinterests')}}">intersts</a></li>
              <li><a class="dropdown-item" href="{{url('agronibishesottos')}}">bishesotto</a></li>
              <li><a class="dropdown-item" href="{{url('agroniservices')}}"> services</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-link">
            <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Agroni form
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('absaccounts/create')}}">accountsdetails</a></li>
              <li><a class="dropdown-item" href="{{url('absxyinterests/create')}}">intersts</a></li>
              <li><a class="dropdown-item" href="{{url('agronibishesottos/create')}}">bishesotto</a></li>
              <li><a class="dropdown-item" href="{{url('agroniservices/create')}}"> services</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-link">
            <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            computers
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('absaccounts/create')}}">accountsdetails</a></li>
              <li><a class="dropdown-item" href="{{url('absxyinterests/create')}}">intersts</a></li>
              <li><a class="dropdown-item" href="{{url('agronibishesottos/create')}}">bishesotto</a></li>
              <li><a class="dropdown-item" href="{{url('agroniservices/create')}}"> services</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-link">
            <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            computers
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('absaccounts/create')}}">accountsdetails</a></li>
              <li><a class="dropdown-item" href="{{url('absxyinterests/create')}}">intersts</a></li>
              <li><a class="dropdown-item" href="{{url('agronibishesottos/create')}}">bishesotto</a></li>
              <li><a class="dropdown-item" href="{{url('agroniservices/create')}}"> services</a></li>
            </ul>
          </div>
        </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('content')
    </div>
    </main>
  </div>
</div>
<!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
-->
  </body>
</html>