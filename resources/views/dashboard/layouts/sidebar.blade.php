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
            Resensi
          </a>
        </li>
        
        {{-- Untuk Admin dan Manager --}}
        @if (auth()->user()->type == 'admin' || auth()->user()->type == 'manager')
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kategori*') ? 'active' : '' }}" href="/dashboard/kategori">
            <span data-feather="file" class="align-text-bottom"></span>
            Kategori
          </a>
        </li>
        
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pengguna*') ? 'active' : '' }}" href="/dashboard/pengguna">
            <span data-feather="file" class="align-text-bottom"></span>
            Pengguna
          </a>
        </li>
        @endif
        {{-- untuk manager --}}
        @if (auth()->user()->type == 'manager')
            
        
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/daftar-admin*') ? 'active' : '' }}" href="/dashboard/daftar-admin">
            <span data-feather="file" class="align-text-bottom"></span>
            Daftar Admin
          </a>
        </li>
        @endif
        @endif


        @endif
      </ul>



      
    </div>
  </nav>