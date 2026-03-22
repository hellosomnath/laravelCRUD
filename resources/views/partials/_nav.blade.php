<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">LaravelCRUD</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="col-md-2 offset-md-10">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            @auth
              <li class="nav-item nav-link">{{ auth()->user()->name }}</li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            @else
              <li class="nav-item"><a class="nav-link" href="{{ url('register') }}"><i class="fa fa-user"></i> Register</a></li>
              <li class="nav-item">
              <a class="nav-link" href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Login</a>
              </li>
            @endauth
            
          </ul>
        </div>
      </div>
    </div>
  </nav>