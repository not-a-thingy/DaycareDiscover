<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Daycare</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('bookvisit')}}">Book Visit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('addvisit')}}">Add Visit</a>
          </li>
        </ul>
        <span class="navbar-text">
            <a class="nav-link" href="#">Logout</a>
        </span>
      </div>
    </div>
  </nav>