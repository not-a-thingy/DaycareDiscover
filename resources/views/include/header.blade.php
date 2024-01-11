


<nav class="navbar navbar-expand-sm   navbar-light  bg-transparent">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a style="color:black;" class="nav-link" href="#">Daycare Discover<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
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
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Call</a>
    </li>
 
    </ul>
    <div class="social-part">
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
    </div>
  </div>
</nav>