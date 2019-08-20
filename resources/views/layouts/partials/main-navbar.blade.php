<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
  <div class="navbar-brand">
    <a href="/" class="text-white">
      <h1 class="font-weight-bold m-0">SPP</h1>
    </a>
  </div>

  <div class="d-md-none">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
      <i class="icon-tree5"></i>
    </button>
    <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
      <i class="icon-paragraph-justify3"></i>
    </button>
  </div>

  <div class="collapse navbar-collapse" id="navbar-mobile">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
          <i class="icon-paragraph-justify3"></i>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown dropdown-user">
        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
          <span>Admin</span>
        </a>

        <div class="dropdown-menu dropdown-menu-right">
          {{-- <a href="#" class="dropdown-item"><i class="icon-user"></i>Profile</a>
          <a href="#" class="dropdown-item"><i class="icon-key"></i>Password</a> --}}
          <a href="/logout" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</div>
