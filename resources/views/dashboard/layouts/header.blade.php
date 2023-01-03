<header class="navbar navbar-dark bg-dark sticky-top flex-md-nowrap p-0 shadow" >
  <div class="container">
    <a class=" text-light" style="text-decoration: none" href="/">
      <img src="/img/logo.png" alt="Logo" width="50">  
      Saget
    </a>
    
    <button class="navbar-toggler position-relative d-md-none collapsed mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
    {{-- <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 border-0 text-light" >Logout <span data-feather="log-out"></span></button>
        </form>
      </div>
    </div> --}}

    <div class="nav-control">
      <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
      </div>
    </div>

    
  
    @guest
    @if (Route::has('login'))
        <li class="nav-item me-2">
          <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
        </li>
    @endif
    @else
      <li class="nav-item dropdown me-2 d-flex" >
          <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-dark" href="{{ route('logout') }}"
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
    </div>
</header>