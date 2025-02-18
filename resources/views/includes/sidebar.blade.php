<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-primary">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-primary d-flex justify-content-center">
        <img src="{{ asset( 'storage/' . \App\Models\Setting::get('app_logo') ?? 'assets/img/OL06ZG0.jpg' ) }}" alt="Sporst Logo" class="brand-image elevation-3"
            style="opacity: .8">
        {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset( 'assets/img/profile.jpg' ) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
          </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ url('/') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            لوحة التحكم
                        </p>
                    </a>
                </li>
                @can('view users')
                <li class="nav-item has-treeview {{ Request::is('users*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            المستخدمين
                            <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/users') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    كل المستخدمين
                                </p>
                            </a>
                        </li>
                        @can('create user')
                        <li class="nav-item">
                            <a href="{{ url('/users/create') }}" class="nav-link {{ Request::is('users/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    اضافة مستخدم
                                </p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('view roles')
                <li class="nav-item has-treeview {{ Request::is('roles*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            الصلاحيات و الادوار
                            <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/roles') }}" class="nav-link {{ Request::is('roles') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    كل الادوار
                                </p>
                            </a>
                        </li>
                        @can('create role')
                        <li class="nav-item">
                            <a href="{{ url('/roles/create') }}" class="nav-link {{ Request::is('roles/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    اضافة دور 
                                </p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                <li class="nav-item has-treeview">
                    <a href="{{ url('/settings') }}" class="nav-link {{ Request::is('settings*') ? 'active' : '' }}">
                        <i class="fas fa-cog"></i>
                        <p>
                            الاعدادات
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                        تسجيل الخروج    
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </li>
            </ul>
        </nav>        
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
