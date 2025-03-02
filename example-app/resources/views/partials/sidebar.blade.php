<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/home" class="brand-link">
    <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <a href="/home">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
      </a>
      <div class="info">
        @auth
        <a href="" class="d-block">{{ Auth::user()->name }}</a>
        @endauth
        @guest
        <a href="#" class="d-block">Guest</a>
        @endguest
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             @auth
             <li class="nav-item">
              <a href="../widgets.html" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/cast" class="nav-link">
                <p>
                  Casts
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/genre" class="nav-link">
                <p>
                  Genres
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/film" class="nav-link">
                <p>
                  Films
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Table
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Table</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/data-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Table</p>
              </a>
            </li>
          </ul>
        </li>
             @endauth
        @guest
        <li class="nav-item">
          <a href="/genre" class="nav-link">
            <p>
              Genres
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/film" class="nav-link">
            <p>
              Films
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        @endguest
        @auth
          <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-danger btn-block">Logout</button>
          </form>
        </li>
        @endauth
        @guest
        <li>
          <a href="/login" class="btn btn-primary btn-block">Login</a>
        </li>
        @endguest
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>