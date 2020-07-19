<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <h3 class="brand-text font-weight-light">techHouse</h3>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
            <a href="{{route('admin')}}" class="{{ Request::is('admin') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <a href="{{route('admin.posts.index')}}" class="{{ Request::is('admin/posts', 'admin/posts/create') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Posts
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <a href="{{route('categories.index')}}" class="{{ Request::is('admin/categories') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Categories
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <a href="{{route('tags.index')}}" class="{{ Request::is('admin/tags') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Tags
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            
            </li>
            <!-- <li class="nav-header">MISCELLANEOUS</li>
            <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Documentation</p>
            </a>
            </li> -->
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>