<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Spotipu</title>

    @include('admin.include.header')
</head>

<body>
    <div class="container-scroller">
        @include('admin.include.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('admin.include.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content-admin')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            Spotipu
                            {{ date("Y") }}</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.include.script')
</body>

</html>
