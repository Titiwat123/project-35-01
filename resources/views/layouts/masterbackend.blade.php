<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('Template/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('Template/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('Template/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('Template/vendors/flag-icon-css/css/flag-icon.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('Template/vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('Template/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}">
  <link rel="stylesheet" href="{{asset('Template/vendors/jquery-bar-rating/fontawesome-stars.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('Template/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('Template/images/favicon.png')}}" />
</head>
<body>
  @include('sweetalert::alert')
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{route('dashboard')}}"><img src="{{asset('Template/images/logo.svg')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{asset('Template/images/logo-mini.svg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
           
       
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Profile
              </a>

              <form method="POST" action="{{ route('logout') }}">
                    @csrf
              <a class="dropdown-item preview-item" href="{{ route('logout') }}" 
              onclick="event.preventDefault();
                this.closest('form').submit();">
                  <i class="icon-inbox"></i> Logout
              </form> 
              </a>
            </div>
          </li>

        </ul>
       
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="{{asset('Template/images/faces/face28.png')}}">
          </div>
          <div class="user-name">
          {{ Auth::user()->name }}
          </div>
          <div class="user-designation">
              Developer
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">หน้าแรก</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('u.index')}}">
            <i class="icon-head menu-icon"></i>
              <span class="menu-title">ผู้ใช้</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('p.index')}}">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">สินค้า</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('t.index')}}">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">ประเภทสินค้า</span>
            </a>
          </li>
        
        
         
        </ul>
      </nav>
      <!-- partial -->
     @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{asset('Template/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('Template/js/off-canvas.js')}}"></script>
  <script src="{{asset('Template/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('Template/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('Template/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('Template/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('Template/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

