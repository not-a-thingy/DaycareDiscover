<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daycare Discover</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
      body, html {
        background: url('img/bg.jpg') !important;
    }
</style>
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item">
              <a style="color:black;" class="nav-link" href="home">DayCare<span class="sr-only">(current)</span></a>
            </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="font-family:verdana;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="font-family:verdana;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" style="position:relative; padding-left:50px;" aria-expanded="false" v-pre >
                                
                                {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/users') }}"
                                        >
                                            {{ __('My Profile') }}
                                        </a>    
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                

                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

 
        <style>
  body, html {
    background: url('img/bg.jpg');
}
</style>
</head>
<body>
<!-- Main Sidebar Container -->
@include('layouts.sidebar_operator')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100px; ">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Day Care Info</h1>
        </div><!-- /.col -->
        <div class="col-sm-10">
          <ol class="breadcrumb float-sm-right">

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container" style= "margin: left 50;">
<div class="card">
  <div class="card-header">Day Care View Page
  <span class="float-right">
                    <a class="btn btn-primary" href="{{ url('/daycare') }}">Back</a>
                </span>
  </div>
  </div>
   <div clas="contain mb-3" style="width: 100%; margin-bottom:30px;">
  <div class="card" style="width:540px; margin:auto; padding:30px">
  <img src="{{ asset(Storage::url($course->img)) }}" class="card-img-top" alt="...">
        <div class="card-body"  style="width: 500px">
       
        <h5 class="card-title">Name: {{ $course->name }}</h5>
<h5 class="card-text">Email: {{ $course->email }}</h5>
<label for="License:">License: </label>
<img src="{{ asset(Storage::url($course->lisence)) }}" class="card-img-top" alt="...">
<h5 class="card-text">landmark: {{ $course->landmark }}</h5>
<h5 class="card-text">Contact: {{ $course->contact }}</h5>
<h5 class="card-text">Address: {{ $course->address }}</h5>
<h5 class="card-text">Facility: {{ $course->facilities }}</h5>
<h5 class="card-text">Rating: {{ $course->rating }}</h5>
  </div> 
    </hr>
  </div>
</div></div>
</div>
<br><br>
</main>
    </div>
</body>
</html>


