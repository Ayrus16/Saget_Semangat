<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file" class="align-text-bottom"></span>
            Buku
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kategori*') ? 'active' : '' }}" href="/dashboard/kategori">
            <span data-feather="file" class="align-text-bottom"></span>
            Kategori
          </a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pengguna*') ? 'active' : '' }}" href="{{ route('register') }}">
            <span data-feather="file" class="align-text-bottom"></span>
            Pengguna
          </a>
        </li>
        @endif
      </ul>



      
    </div>
  </nav>