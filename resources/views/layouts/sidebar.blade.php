<ul class="nav" style="position: fixed">
    <li class="nav-item nav-category"></li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="fa fa-user"></i></span>
        <span class="menu-title">Users</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('dashboard.users.index')}}">Show Users</a></li>
        </ul>
      </div>
    </li>   --}}

    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard.category.index')}}">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Category</span>
      </a>
    </li>

    
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard.headers.index')}}">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Headers</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard.banners.index')}}">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Banners</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard.abouts.index')}}">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Abouts</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard.menu.index')}}">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Menu</span>
      </a>
    </li>

    
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard.settings.index')}}">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Settings</span>
      </a>
    </li>

    <br>
    

    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button  class="nav-link border-0 btn btn-success p-2"><i class="mdi mdi-logout menu-icon text-white"></i>
            <span class="menu-title text-white">Logout</span></button>
        </form>
        </div>
    </li>



    
  </ul> 