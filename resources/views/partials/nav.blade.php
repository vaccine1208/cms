<nav class="navbar navbar-light navbar-expand-sm bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Scifi Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Scifi Store</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('pages.homepage') }}">
                Home
              </a>
            </li>
          
          <a class="nav-link" aria-current="page" href="{{ route('pages.about') }}">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('pages.contact') }}">Contact</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/logout') }}"><button class="btn-outline-dark">Log Out</button> </a>
            <li class="nav-item">
          </ul>
          <form class="d-flex" action="{{ route('pages.search') }}" method="GET">
            <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div> 
    </div>
  </nav>