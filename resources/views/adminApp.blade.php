
<!DOCTYPE html>
<html lang="en">
 @include('backend.layouts.head')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('backend.layouts.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
    @include('backend.layouts.header')
        <!-- partial -->
        <div class="main-panel">
          @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       @include('backend.layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   @include('backend.layouts.footerScript')
  </body>
</html>