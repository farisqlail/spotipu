<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ asset('assets/img/logo-2.png') }}" type="image/x-icon">

    <title>@yield('title')</title>

    {{-- Style --}}
    @include('include.style')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- Sidebar --}}
        @include('include.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #536578;">

                {{-- Navbar --}}
                @include('include.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-white">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> --}}
                    @yield('content')
              

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           {{-- Footer --}}
           @include('include.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- Script --}}
    @include('include.script')

</body>

</html>