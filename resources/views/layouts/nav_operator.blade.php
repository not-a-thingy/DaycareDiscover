<!doctype html>
    <!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    </head>
<body>
    <div id="nav_operator">
          <!-- Navbar -->
  <nav class="navbar navbar-expand-sm   navbar-light  bg-transparent">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a style="color:black;" class="nav-link" href="/admin/home">Daycare Discover<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="{{ url('/users') }}">Profile</a>
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
            <li class="nav-item dropdown dmenu">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Daycare</a>
    <div class="dropdown-menu sm-menu">
    <a href="{{ url('/daycare') }}" class="nav-link text-dark">
                <i class="nav-icon fa-solid fa-user"></i>
                  Day Care Info
                </a>
                <a href="{{ url('addvisit') }}" class="nav-link text-dark">
                <i class="nav-icon fa-solid fa-user"></i>
                  Create Schedule
                </a>
                <a href="{{ url('viewvisit') }}" class="nav-link text-dark">
                <i class="nav-icon fa-solid fa-user"></i>
                  View Schedule
                </a>
                <a href="{{ url('approvevisit') }}" class="nav-link ">
                <i class="nav-icon fa-solid fa-user"></i>
                  Approve Visit
                </a>
    </div>
</li>
<li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
       
          </ul>
          <div class="social-part">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>
        </div>
      </nav>
</ul>
</nav>                                                                                      

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-8sF1nMrh5+j1n7pUnrE6bQkYQn3RKDxmsqL7C1BuAAhMmzZt77GFW92LZ1IDaDl" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy4qDdP5S55e2Iwo0eXvm4rFb4dAAtUA" crossorigin="anonymous"></script>

  <!-- Separate script for navigation bar -->
  <script>
    $(document).ready(function () {
      $('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
      }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
      });
    });
  </script>
</body>
</html>
