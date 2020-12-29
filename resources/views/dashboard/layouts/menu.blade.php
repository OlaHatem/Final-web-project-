<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                           Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard.categories.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List categories</p>
                            </a>
                        </li>



                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard.products.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('dashboard.products.index')}}"  class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List product</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard.users.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add user</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.users.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List user</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>

                    </ul>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Phones
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard.phones.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add phone</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.phones.index')}}"  class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List phone</p>
                            </a>
                        </li>

                    </ul>
                </li>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
