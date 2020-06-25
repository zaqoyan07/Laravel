<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Fast-Food | Admin</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/admin-lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" href="{{ asset ('/bower_components/admin-lte/dist/image/icons/logo.png') }}">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ asset ('/admin/users') }}" class="nav-link">Օգտատերեր</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ asset ('/admin/products') }}" class="nav-link">Խորոված</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ asset ('/admin/fastfoods') }}" class="nav-link">Արագ Սնունդ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ asset ('/admin/soups') }}" class="nav-link">Ապուր</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ asset ('/admin/drinks') }}" class="nav-link">Խմիչք</a>
        </li>
      </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ asset ('/admin') }}" class="brand-link">
          <img src="{{ asset ('/bower_components/admin-lte/dist/image/icons/logo.png') }}" alt="AdminLTE Logo" class="brand-image "
          style="opacity: .8">
          <span class="brand-text font-weight-light">Fast-Food Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
              <a href="#" class="text-center">{{Auth::user() ? Auth::user()->name : 'Anun' }}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <!-- Users -->
           <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link ">
                <i class="fas fa-users"></i>
                <p class="pl-2">
                Օգտատերեր
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset ('/admin/users') }}" class="nav-link">
                  <i class="fas fa-user-edit"></i>
                  <p class="pl-1">Բոլոր Օգտատերերը</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset ('/admin/users/create') }}" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p class="pl-1">Ավելացնել Օգտատեր</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link ">
              <i class="fas fa-utensils"></i>
                <p class="pl-2">
                Ապրանքներ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ 'admin/products' == request()->path() ? 'admin-active' : '' }}">
                <a href="{{ asset ('/admin/products') }}" class="nav-link">
                  <i class="fas fa-drumstick-bite"></i>
                  <p class="pl-1">Խորոված</p>
                </a>
              </li>
              <li class="nav-item {{ 'admin/fastfoods' == request()->path() ? 'admin-active' : '' }}">
                <a href="{{ asset ('/admin/fastfoods') }}" class="nav-link">
                  <i class="fas fa-hamburger"></i>
                  <p class="pl-1">Արագ Սնունդ</p>
                </a>
              </li>
              <li class="nav-item {{ 'admin/soups' == request()->path() ? 'admin-active' : '' }}">
                <a href="{{ asset ('/admin/soups') }}" class="nav-link">
                  <i class="fas fa-utensil-spoon"></i>
                  <p class="pl-1">Ապուր</p>
                </a>
              </li>
              <li class="nav-item {{ 'admin/drinks' == request()->path() ? 'admin-active' : '' }}">
                <a href="{{ asset ('/admin/drinks') }}" class="nav-link">
                  <i class="fas fa-beer"></i>
                  <p class="pl-1">Խմիչք</p>
                </a>
              </li>
            </ul>
          </li>
        </nav>
      </div>
    </aside>
    <main>
      @yield('content')
    </main>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer border-0 bg-dark">      
      <strong>&copy; 2020 <a href="https://fast-food" class="text-danger">FAST FOOD</a>.</strong> Բոլոր իրավունքները պաշտպանված են.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset ('/bower_components/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset ('/bower_components/admin-lte/plugins//bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset ('/bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>


</body>
</html>
