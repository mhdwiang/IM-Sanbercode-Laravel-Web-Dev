<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @auth
                
            <a href="#" class="d-block"> {{ Auth::user()->name }} ({{Auth::user()->profile->umur}})</a>
            @endauth

            @guest
            <a href="#" class="d-block">No User</a>

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
                <a href="/category" class="nav-link">
                    <i class="nav-icon fa fa-bars" aria-hidden="true"></i>                    
                    <p>
                    Category
                    </p>
                </a>
            </li>
            @endauth
            <li class="nav-item">
                <a href="/question" class="nav-link">
                    <i class="nav-icon fa fa-question" aria-hidden="true"></i>                    
                    <p>
                    Pertanyaan
                    </p>
                </a>
            </li>

            @auth

            <li class="nav-item">
                <a href="/profile" class="nav-link">
                    <i class="nav-icon fa fa-user" ></i>                    
                    <p>
                    Profile
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link bg-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endauth

            @guest
            <li class="nav-item">
                <a href="/login" class="nav-link bg-primary">          
                    <p>
                    Login
                    </p>
                </a>
            @endguest


        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
