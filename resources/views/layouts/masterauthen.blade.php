<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('Template/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Template/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('Template/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('Template/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('Template/images/favicon.png') }}" />
</head>

<body>
  
    @yield('content')

  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{ asset('Template/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('Template/js/off-canvas.js') }}"></script>
  <script src="{{ asset('Template/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('Template/js/template.js') }}"></script>
  <!-- endinject -->
</body>

</html>
