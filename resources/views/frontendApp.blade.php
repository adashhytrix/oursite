
<!doctype html>
<html lang="en">


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 10:50:49 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>soft ware development services website</title>
  {{-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.png"> --}}
@include('frontend.layouts.head')
</head>

<body>

  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div id="preloader">
    <div class="preloader"><span></span><span></span></div>
  </div>
  <div id="loader">
    <div class="spinner"></div>
</div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
@include('frontend.layouts.header')
  @yield('section')
@include('frontend.layouts.footer')
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->


  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  @include('frontend.layouts.footerScript')
  <!-- ============================================================== -->
  <!-- This page plugins -->
  <!-- ============================================================== -->

</body>


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 10:51:22 GMT -->
</html>