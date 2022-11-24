<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dự án module 3</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{  asset('asset/vendors/typicons.font/font/typicons.css')}}">
    <link rel="stylesheet" href="{{  asset('asset/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('asset/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png')}}" />
  </head>
  <body>
    <div class="row" id="proBanner">
      <div class="col-12">

        {{-- header --}}

    </div>
</div>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('include.header')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-delete-outline"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles primary"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default border"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
       @include('include.sidebar')
        <!-- partial -->
        <div class="main-panel">

            @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('include.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{ asset('asset/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src=" {{asset('asset/js/off-canvas.js')}}"></script>
    <script src=" {{asset('asset/js/hoverable-collapse.js')}}"></script>
    <script src=" {{asset('asset/js/template.js')}}"></script>
    <script src=" {{asset('asset/js/settings.js')}}"></script>
    <script src=" {{asset('asset/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('asset/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{ asset('asset/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src=" {{asset('asset/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>
