<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پروژه </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}} </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
{{--                    <li class="nan-item">--}}
{{--                        <a href="{{ route('admin.') }}" class="nav-link {{ Route::currentRouteName() == 'admin.' ? 'active' : '' }}">--}}
{{--                            <i class="nav-icon fa fa-dashboard"></i>--}}
{{--                            <p>پنل مدیریت</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item has-treeview {{ in_array(Route::currentRouteName() , ['panel.project.index']) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ in_array(Route::currentRouteName() , ['panel.project.index']) ? 'active' : '' }}">
                            <i class="nav-icon fa fa-institution (alias) "></i>
                            <p>
                                مدیریت  تسک ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('report')}}" class="nav-link  {{ in_array(Route::currentRouteName() , ['panel.project.index']) ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تسک ها   </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
