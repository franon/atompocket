<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} ">
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css" rel="stylesheet') }} ">
    <link rel="stylesheet" href="{{ asset('assets/concept/libs/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }} ">
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }} "> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/charts/morris-bundle/morris.css') }} "> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }} ">
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }} "> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }} ">
    
    <title>@yield('title','Atom Pocket')</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->

    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{ route('dashboard') }}">Dompet Fran</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{ route('dashboard') }}" aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Master</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('master.dompet.dompet') }}">Dompet <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('master.kategori.kategori') }}">Kategori</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Transaksi</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('transaksi.dompetmasuk.dompetmasuk') }}">Dompet Masuk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('transaksi.dompetkeluar.dompetkeluar') }}">Dompet Keluar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Laporan</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('transaksi.laporan') }}">Laporan Transaksi</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

        
        <!-- ============================================================== -->
        <!-- Content  -->
        <!-- ============================================================== -->

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

        @yield('content')
        
                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end Content  -->
        <!-- ============================================================== -->
        
                    
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
            
        <div class="footer">
            <div class="container-fluid">
                <div class="row justify-content-md-center">
                    <p class="text-center">Maju bersama Atomic</p>                
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    
    
    
    <!-- Optional JavaScript -->
    {{-- <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script> --}}
    <script src="{{ asset('assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    {{-- <script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script> --}}
    <!-- sparkline js -->
    {{-- <script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script> --}}
    <!-- morris js -->
    {{-- <script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script> --}}
    <!-- chart c3 js -->
    {{-- <script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/charts/c3charts/C3chartjs.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/concept/libs/js/dashboard-ecommerce.js')}}"></script> --}}

    @stack('custom-js')
</body>
 
</html>