<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
        </ul>


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    {{--                    <span class="badge badge-danger navbar-badge">1</span>--}}
                </a>
                {{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
                {{--                    <a href="#" class="dropdown-item">--}}
                {{--                        <!-- Message Start -->--}}
                {{--                        <div class="media">--}}
                {{--                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
                {{--                            <div class="media-body">--}}
                {{--                                <h3 class="dropdown-item-title">--}}
                {{--                                    Brad Diesel--}}
                {{--                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
                {{--                                </h3>--}}
                {{--                                <p class="text-sm">Call me whenever you can...</p>--}}
                {{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <!-- Message End -->--}}
                {{--                    </a>--}}

                {{--                    <div class="dropdown-divider"></div>--}}
                {{--                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
                {{--                </div>--}}
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    {{--                    <span class="badge badge-warning navbar-badge">15</span>--}}
                </a>
                {{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
                {{--                    <span class="dropdown-item dropdown-header">15 Notifications</span>--}}
                {{--                    <div class="dropdown-divider"></div>--}}
                {{--                    <a href="#" class="dropdown-item">--}}
                {{--                        <i class="fas fa-file mr-2"></i> 3 new reports--}}
                {{--                        <span class="float-right text-muted text-sm">2 days</span>--}}
                {{--                    </a>--}}
                {{--                    <div class="dropdown-divider"></div>--}}
                {{--                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
                {{--                </div>--}}
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('storage/images/logo/cube.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Cube Limited</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.user.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>


                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fas fa-edit"></i>--}}
                    {{--                            <p>--}}
                    {{--                                Forms--}}
                    {{--                                <i class="fas fa-angle-left right"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="" class="nav-link">--}}
                    {{--                                    <i class="far fa-circle nav-icon"></i>--}}
                    {{--                                    <p>Validation</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    {{--                    <li class="nav-header">LABELS</li>--}}


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

    <footer class="main-footer">
        <strong>Copyright &copy; 2021 </strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{asset('js/admin.js')}}"></script>
</body>
</html>
