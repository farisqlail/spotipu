    <!-- plugins:js -->
    <script src="{{ asset('tmpAdmin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('tmpAdmin/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('tmpAdmin/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('tmpAdmin/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('tmpAdmin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('tmpAdmin/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('tmpAdmin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('tmpAdmin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('tmpAdmin/assets/js/misc.js') }}"></script>
    <script src="{{ asset('tmpAdmin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('tmpAdmin/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('tmpAdmin/assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- End custom js for this page -->
    @include('sweetalert::alert')