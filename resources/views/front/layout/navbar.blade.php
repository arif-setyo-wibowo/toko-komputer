<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Groover - Online Shopping for Electronics, Apparel, Computers, Books, DVDs & more</title>
    <!-- Standard Favicon -->
    <link href="{{ asset('front/') }}/images/favicon.ico" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Base Google Font for Web-app -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Google Fonts for Banners only -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/bootstrap.min.css">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/fontawesome.min.css">
        <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/fontawesome2.css">
    <!-- Ion-Icons 4 -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/ionicons.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/animate.min.css">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/owl.carousel.min.css">
    <!-- Jquery-Ui-Range-Slider -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/jquery-ui-range-slider.min.css">
    <!-- Utility -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/utility.css">
    <!-- Main -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/bundle.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/select2-bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('front/') }}/css/adminlte.css"> -->
    <link rel="stylesheet" href="{{ asset('front/') }}/css/sweetalert2.min.css">


    @yield('css')
</head>

<body>

    <!-- app -->
    <div id="app">
        <!-- Header -->
        <header>
            <!-- Top-Header -->
            <div class="full-layer-outer-header">
                <div class="container clearfix">
                    <nav>
                        @foreach ($identitas as $data)
                            <ul class="primary-nav g-nav">
                                <li>
                                    <a href="tel:{{ $data->shopPhoneNumber }}">
                                        <i class="fas fa-phone u-c-brand u-s-m-r-9"></i>
                                        {{ $data->shopPhoneNumber }}</a>
                                </li>
                                <li>
                                    <a href="mailto:{{ $data->shopEmail }}">
                                        <i class="fas fa-envelope u-c-brand u-s-m-r-9"></i>
                                        {{ $data->shopEmail }}
                                    </a>
                                </li>
                            </ul>
                        @endforeach
                    </nav>
                    <nav>
                        <ul class="secondary-nav g-nav">
                            @if (Session::get('login.customer'))
                                <li>
                                    <a><i class="fas fa-user u-s-m-r-9"></i>{{ Session::get('nama.customer') }}
                                        <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                    </a>
                                    <ul class="g-dropdown" style="width:200px">
                                        <li>
                                            <a href="/history">
                                                <i class="fas fa-history u-s-m-r-9"></i>
                                                History Pembelian</a>
                                        </li>
                                        <li>
                                            <a href="/logout">
                                                <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                                Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="/login">
                                        <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                        Login / Signup</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Top-Header /- -->
            <!-- Mid-Header -->
            <div class="full-layer-mid-header">
                <div class="container">
                    <div class="row clearfix align-items-center">
                        <div class="col-lg-3 col-md-9 col-sm-6">
                            <div class="brand-logo text-lg-center">
                                <a href="/">
                                    <img src="{{ asset('front/') }}/images/main-logo/groover-branding-1.png"
                                        alt="Groover Brand Logo" class="app-brand-logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 u-d-none-lg">
                            <form class="form-searchbox">
                                <label class="sr-only" for="search-landscape">Search</label>
                                <input id="search-landscape" type="text" class="text-field"
                                    placeholder="Search everything">
                                <div class="select-box-position">
                                    <div class="select-box-wrapper select-hide">
                                        <label class="sr-only" for="select-category">Choose category for search</label>
                                        <select class="select-box" id="select-category">
                                            <option selected="selected" value="">
                                                All
                                            </option>
                                            <option value="">Gaming Gear</option>
                                            <option value="">Motherboard
                                            </option>
                                            <option value="">Monitor
                                            </option>
                                            <option value="">Power Supplay
                                            </option>
                                            <option value="">Graphic Card
                                            </option>
                                            <option value="">Memory
                                            </option>
                                            <option value="">Casing
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <button id="btn-search" type="submit"
                                    class="button button-primary fas fa-search"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <nav>
                                <ul class="mid-nav g-nav">
                                    <li class="u-d-none-lg">
                                        <a href="/">
                                            <i class="ion ion-md-home u-c-brand"></i>
                                        </a>
                                    </li>
                                    <li class="" id="mini-cart">
                                        <a href="/rakitpc">
                                            <span class="item-price">Rakit Pc</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/cart">
                                            <i class="ion ion-md-basket"></i>
                                            <span class="item-counter"
                                                id="cart-item-count">{{ $countCart }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mid-Header /- -->
            <!-- Responsive-Buttons -->
            <div class="fixed-responsive-container">
                <div class="fixed-responsive-wrapper">
                    <button type="button" class="button fas fa-search" id="responsive-search"></button>
                </div>
                <div class="fixed-responsive-wrapper">
                    <a href="wishlist.html">
                        <i class="far fa-heart"></i>
                        <span class="fixed-item-counter" id="cart-item-count">{{ $countCart }}</span>
                    </a>
                </div>
            </div>
            <!-- Responsive-Buttons /- -->
            <!-- Mini Cart -->
            <div class="mini-cart-wrapper">
                <div class="mini-cart">
                    <div class="mini-cart-header">
                        YOUR CART
                        <button type="button" class="button ion ion-md-close" id="mini-cart-close"></button>
                    </div>
                    <ul class="mini-cart-list">
                        <li class="clearfix">
                            <a href="/detailproduk">
                                <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="/detailproduk">
                                <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="/detailproduk">
                                <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="/detailproduk">
                                <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="/detailproduk">
                                <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="single-product.html">
                                <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                <span class="mini-item-name">Black Rock Dress with High Jewelery Necklace</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="single-product.html">
                                <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                <span class="mini-item-name">Xiaomi Note 2 Black Color</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="single-product.html">
                                <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                <span class="mini-item-name">Dell Inspiron 15</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                    </ul>
                    <div class="mini-shop-total clearfix">
                        <span class="mini-total-heading float-left">Total:</span>
                        <span class="mini-total-price float-right">$220.00</span>
                    </div>
                    <div class="mini-action-anchors">
                        <a href="cart.html" class="cart-anchor">View Cart</a>
                        <a href="checkout.html" class="checkout-anchor">Checkout</a>
                    </div>
                </div>
            </div>
            <!-- Mini Cart /- -->
            <!-- Bottom-Header -->
            <div class="full-layer-bottom-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="v-menu v-close">
                                <span class="v-title ">
                                    <i class="ion ion-md-menu"></i>
                                    All Categories
                                    <i class="fas fa-angle-down"></i>
                                </span>
                                <nav>
                                    <div class="v-wrapper">
                                        <ul class="v-list animated fadeIn">
                                            <li class="js-backdrop">
                                                <a href="shop-v1-root-category.html">
                                                    <i class="fa-solid fa-computer"></i>
                                                   Komponent Pc
                                                    <i class="ion ion-ios-arrow-forward"></i>
                                                </a>
                                                <button class="v-button ion ion-md-add"></button>
                                                <div class="v-drop-right" style="width: 700px;">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/motherboards">Motherboard</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/motherboards">MSI</a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/motherboards">ROG</a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/motherboards">Gigabyte</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/processors">Prosessor</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/processors">AMD</a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/processors">INTEL</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a
                                                                        href="/shop/graphic_cards">Graphic Card</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/graphic_cards">Nvidia</a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/graphic_cards">Radeon</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/power_supplies">Power Supplay</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="/shop/power_supplies">80 broze
                                                                                
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/power_supplies">80 Platinum</a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/power_supplies">80 Gold</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="js-backdrop">
                                                <a href="/shop/memories">
                                                    <i class="ion ion-ios-save"></i>
                                                    Memory & Storage
                                                    <i class="ion ion-ios-arrow-forward"></i>
                                                </a>
                                                <button class="v-button ion ion-md-add"></button>
                                                <div class="v-drop-right" style="width: 700px;">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/memories">RAM</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/memories">DDR 4</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/memories">DDR 5
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/stoirages">SSD</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/stoirages">SATA</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/stoirages">NVME
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/storages">Harddisk
                                                                    </a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="/shop/storages">WD Blue
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/storages">Samsung
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/storages">Seagate
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="js-backdrop">
                                                <a href="#">
                                                    <i class="fa fa-gamepad"></i>
                                                        Gaming Gear
                                                    <i class="ion ion-ios-arrow-forward"></i>
                                                </a>
                                                <button class="v-button ion ion-md-add"></button>
                                                <div class="v-drop-right" style="width: 700px;">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/mouse">Mouse</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/mouse">Optical</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/mouse">Laser Gaming
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/mouse">Macro
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/keyboards">Keyboard</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href="/shop/keyboards">TKL</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/keyboards">Full Size
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/keyboards">Mini
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="/shop/earphone">Headset
                                                                    </a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="/shop/earphone">ROG
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/earphone">MSI
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/earphone">Steel Series
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/shop/earphone">Hyper X
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="/shop/monitors">
                                                    <i class="fa fa-desktop"></i>
                                                    Monitor
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/shop/computer_cases">
                                                    <i class="fa-solid fa-toilet-portable"></i>
                                                    Casing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/shop/coolers">
                                                    <i class="fa fa-fan"></i>
                                                   Cooler
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom-Header /- -->
        </header>
        <!-- Header /- -->

        @yield('content')

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <!-- Outer-Footer -->
                <div class="outer-footer-wrapper u-s-p-y-80">

                </div>
                <!-- Outer-Footer /- -->
                <!-- Mid-Footer -->
                <div class="mid-footer-wrapper u-s-p-b-80">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="footer-list">
                                <h6>CUSTOMER SERVICE</h6>
                                <ul>
                                    <li>
                                        <a href="faq.html">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="track-order.html">Track Order</a>
                                    </li>
                                    <li>
                                        <a href="terms-and-conditions.html">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="footer-list">
                                <h6>COMPANY</h6>
                                <ul>
                                    <li>
                                        <a href="home.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="footer-list">
                                <h6>INFORMATION</h6>
                                <ul>
                                    <li>
                                        <a href="store-directory.html">Categories Directory</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">My Cart</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="footer-list">
                                <h6>Address</h6>
                                @foreach ($identitas as $data)
                                    <ul>
                                        <li>
                                            <i class="fas fa-location-arrow u-s-m-r-9"></i>
                                            <span>{{ $data->shopAddress }}</span>
                                        </li>
                                        <li>
                                            <a href="tel:{{ $data->shopPhoneNumber }}">
                                                <i class="fas fa-phone u-s-m-r-9"></i>
                                                <span>{{ $data->shopPhoneNumber }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:contact@domain.com">
                                                <i class="fas fa-envelope u-s-m-r-9"></i>
                                                <span>{{ $data->shopEmail }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mid-Footer /- -->
                <!-- Bottom-Footer -->
                <div class="bottom-footer-wrapper">
                    <div class="social-media-wrapper">
                        <ul class="social-media-list">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-rss"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p class="copyright-text">Copyright &copy; 2018
                        <a href="home.html">Groover</a> All Right Reserved
                    </p>
                </div>
            </div>
            <!-- Bottom-Footer /- -->
        </footer>
        <!-- Footer /- -->
        <!-- Dummy Selectbox -->
        <div class="select-dummy-wrapper">
            <select id="compute-select">
                <option id="compute-option">All</option>
            </select>
        </div>
        <!-- Dummy Selectbox /- -->
        <!-- Responsive-Search -->
        <div class="responsive-search-wrapper">
            <button type="button" class="button ion ion-md-close" id="responsive-search-close-button"></button>
            <div class="responsive-search-container">
                <div class="container">
                    <p>Start typing and press Enter to search</p>
                    <form class="responsive-search-form">
                        <label class="sr-only" for="search-text">Search</label>
                        <input id="search-text" type="text" class="responsive-search-field"
                            placeholder="PLEASE SEARCH">
                        <i class="fas fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
        <!-- Responsive-Search /- -->
        <!-- Newsletter-Modal -->
        <!-- <div id="newsletter-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="button dismiss-button ion ion-ios-close" data-dismiss="modal"></button>
                <div class="modal-body u-s-p-x-0">
                    <div class="row align-items-center u-s-m-x-0">
                        <div class="col-lg-6 col-md-6 col-sm-12 u-s-p-x-0">
                            <div class="newsletter-image">
                                <a href="shop-v1-root-category.html" class="banner-hover effect-dark-opacity">
                                    <img class="img-fluid" src="{ asset('front/') }}/images/banners/newsletter-1.jpg" alt="Newsletter Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="newsletter-wrapper">
                                <h1>New to
                                    <span>Groover</span> ?
                                    <br>Subscribe Newsletter</h1>
                                <h5>Get latest product update...</h5>
                                <form>
                                    <div class="u-s-m-b-35">
                                        <input type="text" class="newsletter-textfield" placeholder="Enter Your Email">
                                    </div>
                                    <div class="u-s-m-b-35">
                                        <button class="button button-primary d-block w-100">Subscribe</button>
                                    </div>
                                </form>
                                <h6>Be the first for getting special deals and offers, Send directly to your inbox.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Newsletter-Modal /- -->
        <!-- Quick-view-Modal -->
        <div id="quick-view" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="button dismiss-button ion ion-ios-close"
                        data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!-- Product-zoom-area -->
                                <div class="zoom-area">
                                    <img id="zoom-pro-quick-view" class="img-fluid"
                                        src="{{ asset('front/') }}/images/product/product@4x.jpg"
                                        data-zoom-image="{{ asset('front') }}/images/product/product@4x.jpg"
                                        alt="Zoom Image">
                                    <div id="gallery-quick-view" class="u-s-m-t-10">
                                        <a class="active"
                                            data-image="{{ asset('front') }}/images/product/product@4x.jpg"
                                            data-zoom-image="{{ asset('front') }}/images/product/product@4x.jpg">
                                            <img src="{{ asset('front/') }}/images/product/product@2x.jpg"
                                                alt="Product">
                                        </a>
                                        <a data-image="{{ asset('front') }}/images/product/product@4x.jpg"
                                            data-zoom-image="{{ asset('front') }}/images/product/product@4x.jpg">
                                            <img src="{{ asset('front/') }}/images/product/product@2x.jpg"
                                                alt="Product">
                                        </a>
                                        <a data-image="{{ asset('front') }}/images/product/product@4x.jpg"
                                            data-zoom-image="{{ asset('front') }}/images/product/product@4x.jpg">
                                            <img src="{{ asset('front/') }}/images/product/product@2x.jpg"
                                                alt="Product">
                                        </a>
                                        <a data-image="{{ asset('front') }}/images/product/product@4x.jpg"
                                            data-zoom-image="{{ asset('front') }}/images/product/product@4x.jpg">
                                            <img src="{{ asset('front/') }}/images/product/product@2x.jpg"
                                                alt="Product">
                                        </a>
                                        <a data-image="{{ asset('front') }}/images/product/product@4x.jpg"
                                            data-zoom-image="{{ asset('front') }}/images/product/product@4x.jpg">
                                            <img src="{{ asset('front/') }}/images/product/product@2x.jpg"
                                                alt="Product">
                                        </a>
                                        <a data-image="{{ asset('front') }}/images/product/product@4x.jpg"
                                            data-zoom-image="{{ asset('front') }}/images/product/product@4x.jpg">
                                            <img src="{{ asset('front/') }}/images/product/product@2x.jpg"
                                                alt="Product">
                                        </a>
                                    </div>
                                </div>
                                <!-- Product-zoom-area /- -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!-- Product-details -->
                                <div class="all-information-wrapper">
                                    <div class="section-1-title-breadcrumb-rating">
                                        <div class="product-title">
                                            <h1>
                                                <a href="single-product.html">Casual Hoodie Full Cotton</a>
                                            </h1>
                                        </div>
                                        <ul class="bread-crumb">
                                            <li class="has-separator">
                                                <a href="home.html">Home</a>
                                            </li>
                                            <li class="has-separator">
                                                <a href="shop-v1-root-category.html">Men's Clothing</a>
                                            </li>
                                            <li class="has-separator">
                                                <a href="shop-v2-sub-category.html">Tops</a>
                                            </li>
                                            <li class="is-marked">
                                                <a href="shop-v3-sub-sub-category.html">Hoodies</a>
                                            </li>
                                        </ul>
                                        <div class="product-rating">
                                            <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                <span style='width:67px'></span>
                                            </div>
                                            <span>(23)</span>
                                        </div>
                                    </div>
                                    <div class="section-2-short-description u-s-p-y-14">
                                        <h6 class="information-heading u-s-m-b-8">Description:</h6>
                                        <p>This hoodie is full cotton. It includes a muff sewn onto the lower front, and
                                            (usually) a drawstring to adjust the hood opening. Throughout the U.S., it
                                            is common for middle-school, high-school, and college students to wear this
                                            sweatshirts—with or without hoods—that display their respective school names
                                            or mascots across the chest, either as part of a uniform or personal
                                            preference.
                                        </p>
                                    </div>
                                    <div class="section-3-price-original-discount u-s-p-y-14">
                                        <div class="price">
                                            <h4>$55.00</h4>
                                        </div>
                                        <div class="original-price">
                                            <span>Original Price:</span>
                                            <span>$60.00</span>
                                        </div>
                                        <div class="discount-price">
                                            <span>Discount:</span>
                                            <span>8%</span>
                                        </div>
                                        <div class="total-save">
                                            <span>Save:</span>
                                            <span>$5</span>
                                        </div>
                                    </div>
                                    <div class="section-4-sku-information u-s-p-y-14">
                                        <h6 class="information-heading u-s-m-b-8">Sku Information:</h6>
                                        <div class="availability">
                                            <span>Availability:</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="left">
                                            <span>Only:</span>
                                            <span>50 left</span>
                                        </div>
                                    </div>
                                    <div class="section-5-product-variants u-s-p-y-14">
                                        <h6 class="information-heading u-s-m-b-8">Product Variants:</h6>
                                        <div class="color u-s-m-b-11">
                                            <span>Available Color:</span>
                                            <div class="color-variant select-box-wrapper">
                                                <select class="select-box product-color">
                                                    <option value="1">Heather Grey</option>
                                                    <option value="3">Black</option>
                                                    <option value="5">White</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sizes u-s-m-b-11">
                                            <span>Available Size:</span>
                                            <div class="size-variant select-box-wrapper">
                                                <select class="select-box product-size">
                                                    <option value="">Male 2XL</option>
                                                    <option value="">Male 3XL</option>
                                                    <option value="">Kids 4</option>
                                                    <option value="">Kids 6</option>
                                                    <option value="">Kids 8</option>
                                                    <option value="">Kids 10</option>
                                                    <option value="">Kids 12</option>
                                                    <option value="">Female Small</option>
                                                    <option value="">Male Small</option>
                                                    <option value="">Female Medium</option>
                                                    <option value="">Male Medium</option>
                                                    <option value="">Female Large</option>
                                                    <option value="">Male Large</option>
                                                    <option value="">Female XL</option>
                                                    <option value="">Male XL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                                        <form action="#" class="post-form">
                                            <div class="quick-social-media-wrapper u-s-m-b-22">
                                                <span>Share:</span>
                                                <ul class="social-media-list">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-rss"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="quantity-wrapper u-s-m-b-22">
                                                <span>Quantity:</span>
                                                <div class="quantity">
                                                    <input type="text" class="quantity-text-field" value="1">
                                                    <a class="plus-a" data-max="1000">&#43;</a>
                                                    <a class="minus-a" data-min="1">&#45;</a>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="button button-outline-secondary" type="submit">Add to
                                                    cart</button>
                                                <button
                                                    class="button button-outline-secondary far fa-heart u-s-m-l-6"></button>
                                                <button
                                                    class="button button-outline-secondary far fa-envelope u-s-m-l-6"></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Product-details /- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick-view-Modal /- -->
    </div>
    <!-- app /- -->
    <!--[if lte IE 9]>
<div class="app-issue">
    <div class="vertical-center">
        <div class="text-center">
            <h1>You are using an outdated browser.</h1>
            <span>This web app is not compatible with following browser. Please upgrade your browser to improve your security and experience.</span>
        </div>
    </div>
</div>
<style> #app {
    display: none;
} </style>
<![endif]-->
    <!-- NoScript -->
    <noscript>
        <div class="app-issue">
            <div class="vertical-center">
                <div class="text-center">
                    <h1>JavaScript is disabled in your browser.</h1>
                    <span>Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser to
                        register for Groover.</span>
                </div>
            </div>
        </div>
        <style>
            #app {
                display: none;
            }
        </style>
    </noscript>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <!-- Modernizr-JS -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/vendor/modernizr-custom.min.js"></script>
    <!-- NProgress -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/nprogress.min.js"></script>
    <!-- jQuery -->
    <script src="{{ asset('admin/') }}/js/jquery-3.6.1.js"></script>
    <script type="text/javascript" src="{{ asset('front/') }}/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/bootstrap.min.js"></script>
    <!-- Popper -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/popper.min.js"></script>
    <!-- ScrollUp -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/jquery.scrollUp.min.js"></script>
    <!-- Elevate Zoom -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/jquery.elevatezoom.min.js"></script>
    <!-- jquery-ui-range-slider -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/jquery-ui.range-slider.min.js"></script>
    <!-- jQuery Slim-Scroll -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/jquery.slimscroll.min.js"></script>
    <!-- jQuery Resize-Select -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/jquery.resize-select.min.js"></script>
    <!-- jQuery Custom Mega Menu -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/jquery.custom-megamenu.min.js"></script>
    <!-- jQuery Countdown -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/jquery.custom-countdown.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/owl.carousel.min.js"></script>
    <!-- Main -->
    <script type="text/javascript" src="{{ asset('front/') }}/js/app.js"></script>
    <script type="text/javascript" src="{{ asset('front/') }}/js/font.js"></script>

    <script type="text/javascript" src="{{ asset('front/') }}/js/select2.full.min.js"></script>
    <script type="text/javascript" src="{{ asset('front/') }}/js/sweetalert2.all.min.js"></script>
    @yield('javascript')

    <script>
        $(function() {
            $('.select2').select2()
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>

    

</body>

</html>
