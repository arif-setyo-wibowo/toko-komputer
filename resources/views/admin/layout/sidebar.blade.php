<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="X-CSRF-TOKEN" content="{{ csrf_token() }}">

    <title>{{ $title }} - Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('admin/') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('admin/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('admin/') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('admin/') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('admin/') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('admin/') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('admin/') }}/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.5.0
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="{{ asset('admin/') }}/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('admin/') }}/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout.html">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Dashboard' ? 'collapsed' : '' }}" href="/administrator">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Identitas' ? 'collapsed' : '' }}" href="/administrator/identitas">
                    <i class="bi bi-shop"></i>
                    <span>Identitas</span>
                </a>
            </li><!-- End Identitas Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Pelanggan' ? 'collapsed' : '' }}" href="/administrator/pelanggan">
                    <i class="bi bi-person"></i>
                    <span>Pelanggan</span>
                </a>
            </li><!-- End Profile Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Sosial Media' ? 'collapsed' : '' }}" href="/administrator/sosmed">
                    <i class="ri-facebook-box-fill"></i>
                    <span>Sosial Media</span>
                </a>
            </li><!-- End Sosmed Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Slider' ? 'collapsed' : '' }}" href="/administrator/slider">
                    <i class="ri-slideshow-2-fill"></i>
                    <span>Slider</span>
                </a>
            </li><!-- End Sosmed Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Brand' ? 'collapsed' : '' }}" href="/administrator/brand">
                    <i class="ri-building-3-line"></i>
                    <span>Brand</span>
                </a>
            </li><!-- End Brand Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Barang</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/administrator/socket">
                            <i class="bi bi-circle"></i><span>Socket</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/motherboard">
                            <i class="bi bi-circle"></i><span>Motherboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/processor">
                            <i class="bi bi-circle"></i><span>Processor</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/gpu">
                            <i class="bi bi-circle"></i><span>Graphic Card</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/memory">
                            <i class="bi bi-circle"></i><span>Memory</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/storage">
                            <i class="bi bi-circle"></i><span>Storage</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/powersupply">
                            <i class="bi bi-circle"></i><span>Power Supplay</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/casing">
                            <i class="bi bi-circle"></i><span>Casing</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/cooler">
                            <i class="bi bi-circle"></i><span>Cooler</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/earphone">
                            <i class="bi bi-circle"></i><span>Earphone</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/keyboard">
                            <i class="bi bi-circle"></i><span>Keyboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/mouse">
                            <i class="bi bi-circle"></i><span>Mouse</span>
                        </a>
                    </li>
                    <li>
                        <a href="/administrator/monitor">
                            <i class="bi bi-circle"></i><span>Monitor</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Order' ? 'collapsed' : '' }}" href="/administrator/order">
                    <i class="bi-cash-coin" style="font-size: 18px;"></i>
                    <span>Transaksi</span>
                </a>
            </li><!-- End Transaksi Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Karyawan' ? 'collapsed' : '' }}" href="/administrator/karyawan">
                    <i class="bi bi-person"></i>
                    <span>Karyawan</span>
                </a>
            </li><!-- End Profile Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Payment Gateway' ? 'collapsed' : '' }}"
                    href="/administrator/paymentgateway">
                    <i class="bi bi-person"></i>
                    <span>TEST</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title != 'Test Login' ? 'collapsed' : '' }}" href="/administrator/logintest">
                    <i class="bi bi-person"></i>
                    <span>Login</span>
                </a>
            </li>
        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <section class="section dashboard">
            <div class="row">
                <section class="content">
                    @yield('content')
                </section>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" style="bottom:0px;right:0px;left:0px;">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer  -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/') }}/js/jquery-3.6.1.js"></script>
    <script src="{{ asset('admin/') }}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('admin/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/') }}/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('admin/') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('admin/') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('admin/') }}/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('admin/') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('admin/') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/') }}/js/main.js"></script>
    <script type="text/javascript">
        $(".alert-success").delay(1000).slideUp(200, function() {
            $(this).alert('close');
        });
        $(".alert-danger").delay(4000).slideUp(200, function() {
            $(this).alert('close');
        });
    </script>
    @yield('javascript')

</body>

</html>
