<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- iCheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <!-- TinyMCE --> 
  <script src="https://cdn.tiny.cloud/1/06mlpkcw1azllwwelfv9at8oqcxrdf97jqyjhlx5oln60xfr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      {{-- Logout Menu --}}
      <li class="nav-item dropdown">
        @if (\Illuminate\Support\Facades\Auth::guard('admin')->check())
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a href="#" class="dropdown-item">
                  <a class="dropdown-item text-center" href="{{ route('admin.dashboard.profile') }}">
                    <i class="fas fa-user-circle"></i> Profile
                  </a>
                  <hr>
                  <a class="dropdown-item text-center" href="{{ route('admin.logout') }}">
                    <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
                  <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="GET">
                      @csrf
                  </form>
              </a> 
          </div>
        @endif
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text- "><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/datona.jpg')}}" alt="AdminLTE Logo" class="brand-image img-square elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Datona Karya Sukses</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @if(Auth::user()->avatar)
          <div class="image">
          <img src="{{asset('/storage/img/'. Auth::user()->avatar)}}" class="img-square elevation-2" alt="User Image" width="100">
          </div>    
        @endif
          <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cases-page" class="nav-link {{ request()->is('cases-page') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cases</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/expertises-page" class="nav-link {{ request()->is('expertises-page') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expertise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/testimonials-page" class="nav-link {{ request()->is('testimonials-page') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonials</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.inbox') }}" class="nav-link {{ request()->is('inbox') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Datona Home Page
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Home</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ request()->is('about-us') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>About Us</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('expertise') }}" class="nav-link {{ request()->is('expertise') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Expertise</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('cases') }}" class="nav-link {{ request()->is('cases') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cases</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('testimonials') }}" class="nav-link {{ request()->is('testimonials') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Testimonials</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('team') }}" class="nav-link {{ request()->is('team') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Team</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('partnerships') }}" class="nav-link {{ request()->is('partnerships') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Partnerships</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('gallery') }}" class="nav-link {{ request()->is('gallery') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gallery</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Contact Us</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('header')
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="#">Datona Consulting</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<script>
  $(document).ready(function () {
    $(document).on('change' , '#image' , function () {
      let image = $('#image').val()
      $('.custom-file-label').text(image)
    });
  });
</script>
@yield('script')
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
</body>
</html>