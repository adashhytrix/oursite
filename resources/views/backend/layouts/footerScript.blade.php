 <!-- plugins:js -->
 <script src="{{ asset('assets/backend')}}/vendors/js/vendor.bundle.base.js"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="{{ asset('assets/backend')}}/vendors/chart.js/Chart.min.js"></script>
 <script src="{{ asset('assets/backend')}}/vendors/progressbar.js/progressbar.min.js"></script>
 <script src="{{ asset('assets/backend')}}/vendors/jvectormap/jquery-jvectormap.min.js"></script>
 <script src="{{ asset('assets/backend')}}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
 <script src="{{ asset('assets/backend')}}/vendors/owl-carousel-2/owl.carousel.min.js"></script>
 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="{{ asset('assets/backend')}}/js/off-canvas.js"></script>
 <script src="{{ asset('assets/backend')}}/js/hoverable-collapse.js"></script>
 <script src="{{ asset('assets/backend')}}/js/misc.js"></script>
 <script src="{{ asset('assets/backend')}}/js/settings.js"></script>
 <script src="{{ asset('assets/backend')}}/js/todolist.js"></script>
 <!-- endinject -->
 <!-- Custom js for this page -->
 <script src="{{ asset('assets/backend')}}/js/dashboard.js"></script>
 <script>
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right", // Change position here (top-right, top-left, bottom-right, etc.)
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

 </script>
 <!-- End custom js for this page -->