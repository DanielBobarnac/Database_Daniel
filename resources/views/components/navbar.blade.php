<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.create')}}">Crea Prodotto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Crea Articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.home')}}">Articoli</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Brand
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('product.brand','Apple')}}">Apple</a></li>
              <li><a class="dropdown-item" href="{{route('product.brand','Sony')}}">Sony</a></li>
            </ul>
          </li>
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Accedi</a>
            </li>    
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Benvenuto {{Auth::user()->name}}</a>
              <ul class="dropdown-menu">
                <li class="drop-item">
                  <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                </li>
              </ul>
            </li>
          @endguest
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>