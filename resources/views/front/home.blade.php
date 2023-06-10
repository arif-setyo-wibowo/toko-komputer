@extends('front.layout.navbar')

@section('content')
    <!-- Main-Slider -->
    <div class="default-height ph-item">
        <div class="slider-main owl-carousel">
            <div class="bg-image one">
                <div class="slide-content slide-animation">
                    <h1>Toko Komputer</h1>
                    <h2>Gaming / Office / Server</h2>
                </div>
            </div>
            <div class="bg-image two">
                <div class="slide-content-2 slide-animation">
                    <h2 class="slide-2-h2-a">Grand</h2>
                    <h2 class="slide-2-h2-b">Opening</h2>
                    <h1>2023</h1>
                </div>
            </div>
            <div class="bg-image three">
                <div class="slide-content slide-animation">
                    <h1>Tech
                        <span style="color:#38B6FF">Deals</span>
                    </h1>
                    <h2 style="color:#333"># shopping</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-Slider /- -->

    <!-- Banner-Layer -->
    <div class="banner-layer">
        <div class="container">
            <div class="image-banner">
                <a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
                    <img class="img-fluid" src="{{ asset('front/') }}/images/brand-logos/baner1.png"
                        alt="Winter Season Banner">
                </a>
            </div>
        </div>
    </div>
    <!-- Banner-Layer /- -->

    <!-- Brand-Slider -->
    <div class="brand-slider u-s-p-b-80 ">
        <div class="container ">
            <div class="text-center mb-2">
                <h3 class="sec-maker-h3">Kategori</h3>
            </div>
            <div class="brand-slider-content owl-carousel" data-item="5">
                <div class="brand-pic">
                    <a href="/shop">
                        <img src="{{ asset('front/') }}/images/brand-logos/prosesor.png" alt="Brand Logo 1">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/mobo.png" alt="Brand Logo 2">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/vga.png" alt="Brand Logo 3">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/ram.png" alt="Brand Logo 5">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/storage.png" alt="Brand Logo 6">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/psu.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/case.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/cooler.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/headset.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/keyboard.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/mouse.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="{{ asset('front/') }}/images/brand-logos/monitor.png" alt="Brand Logo 7">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand-Slider /- -->

    <!-- Men-Clothing -->
    <section class="section-maker ">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Motherboard</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#men-latest-products">Latest Products</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="men-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <!-- Item -->
                                    @foreach ($mobo as $data)
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link"
                                                href="/detailproduk/{{$data->moboId}}">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/') }}/{{ $data->moboImage }}"
                                                    alt="Product">
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    &nbsp;
                                                </ul>
                                                <h4 class="item-title">
                                                    <a href="/detailproduk/{{$data->moboId}}">{{$data->moboName}}</a>
                                                </h4>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    @currency($data->moboPrice)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="store-directory.html">
                    <span>View more on this category</span>
                </a>
            </div>
    </section>
    
    <!-- Banner-Image & View-more -->
    <div class="banner-image-view-more">
        <div class="container">
            <div class="image-banner u-s-m-y-40">
                <a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
                    <img class="img-fluid" src="{{ asset('front/') }}/images/brand-logos/baner1.png" alt="Banner Image">
                </a>
            </div>
            <!-- <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="store-directory.html">
                    <span>View more on this category</span>
                </a>
            </div> -->
        </div>
    </div>
    <!-- Banner-Image & View-more /- -->
    <!-- Men-Clothing /- -->

    <!-- Mobiles-&-Tablets -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Gaming Gear</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#mobiles-latest-products">Latest
                            Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mobiles-best-selling-products">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mobiles-top-rating-products">Top Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mobiles-featured-products">Featured Products</a>
                    </li> -->
                </ul>
                <span class="sec-maker-span-text u-s-m-b-8 d-block">Select products in specific category</span>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="mobiles-latest-products">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-12">
                                    <ul class="nav tab-nav-style-2-a">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#smart-phones"
                                                title="Smart Phones">
                                                <i class="ion ion-ios-phone-portrait"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tablets" title="Tablets">
                                                <i class="ion ion-md-phone-landscape"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#smart-watches"
                                                title="Smart Watches">
                                                <i class="ion ion-md-watch"></i>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#device-accessories"
                                                title="Device Accessories">
                                                <i class="ion ion-md-settings"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#power-banks"
                                                title="Power Banks">
                                                <i class="ion ion-md-battery-charging"></i>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="col-lg-11 col-md-12">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="smart-phones">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">   
                                                    @foreach ($mouse as $data)                                             
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link"
                                                                href="/detailproduk/{{ $data->mouseId }}">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('uploads/') }}/{{$data->mouseImage}}"
                                                                    alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    &nbsp;
                                                                </ul>
                                                                <h4 class="item-title">
                                                                    <a href="/detailproduk/{{ $data->mouseId }}">{{ $data->mouseName}}</a>
                                                                </h4>
                                                            </div>
                                                            <div class="price-template">
                                                                <div class="item-new-price">
                                                                    @currency($data->mousePrice)
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tag new">
                                                            <span>NEW</span>
                                                        </div>
                                                    </div>
                                                    @endforeach                                                     
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tablets">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3"> 
                                                    @foreach ($keyboard as $data)
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link"
                                                                href="/detailproduk/{{ $data->keyboardId}}">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('uploads/') }}/{{$data->keyboardImage}}"
                                                                    alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    &nbsp;
                                                                </ul>
                                                                <h4 class="item-title">
                                                                    <a href="/detailproduk/{{ $data->keyboardId}}">{{ $data->keyboardName}}</a>
                                                                </h4>
                                                            </div>
                                                            <div class="price-template">
                                                                <div class="item-new-price">
                                                                    @currency($data->keyboardPrice)
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tag new">
                                                            <span>NEW</span>
                                                        </div>
                                                    </div> 
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="smart-watches">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    @foreach ($earphone as $data)
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link"
                                                                href="/detailproduk/{{ $data->earphoneId}}">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('uploads/') }}/{{ $data->earphoneImage}}"
                                                                    alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    &nbsp;
                                                                </ul>
                                                                <h4 class="item-title">
                                                                    <a href="/detailproduk/{{ $data->earphoneId}}">{{$data->earphoneName}}</a>
                                                                </h4>
                                                            </div>
                                                            <div class="price-template">
                                                                <div class="item-new-price">
                                                                    @currency($data->earphonePrice)
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tag new">
                                                            <span>NEW</span>
                                                        </div>
                                                    </div> 
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mobiles-best-selling-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="mobiles-top-rating-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="mobiles-featured-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="store-directory.html">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Mobiles-&-Tablets /- -->
    <!-- Banner-Layer -->
    <div class="banner-layer">
        <div class="container">
            <div class="image-banner">
                <a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
                    <img class="img-fluid" src="{{ asset('front/') }}/images/brand-logos/baner1.png"
                        alt="Winter Season Banner">
                </a>
            </div>
        </div>
    </div>
    <!-- Banner-Layer /- -->
    <!-- Women-Clothing -->
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Monitor</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#women-latest-products">Latest Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#women-best-selling-products">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#women-top-rating-products">Top Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#women-featured-products">Featured Products</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="women-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    @foreach ($monitor as $data)
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link"
                                                href="/detailproduk/{{$data->monitorId}}">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/') }}/{{$data->monitorImage}}"
                                                    alt="Product">
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    &nbsp;
                                                </ul>
                                                <h4 class="item-title">
                                                    <a href="/detailproduk/{{$data->monitorId}}">{{ $data->monitorName}}</a>
                                                </h4>
                                            </div>
                                            <div class="price-template">
                                                <div class="item-new-price">
                                                    @currency($data->monitorPrice)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="women-best-selling-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="women-top-rating-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <div class="tab-pane fade" id="women-featured-products">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="store-directory.html">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Women-Clothing /- -->
    <!-- Continue-Link -->
    <div class="continue-link-wrapper u-s-p-b-80">
        <a class="continue-link" href="store-directory.html" title="View all products on site">
            <i class="ion ion-ios-more"></i>
        </a>
    </div>
    <!-- Continue-Link /- -->
    <!-- Brand-Slider -->
    <div class="brand-slider u-s-p-b-80">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="sec-maker-h3">BRAND</h3>
            </div>
            <div class="brand-slider-content owl-carousel" data-item="5">
                @foreach ($merk as $data)
                <div class="brand-pic">
                    <a href="/shop">
                        <img src="{{ asset('uploads/') }}/{{$data->brandLogo}}">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Brand-Slider /- -->
    <!-- Site-Priorities -->
    <section class="app-priority">
        <div class="container">
            <div class="priority-wrapper u-s-p-b-80">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-star"></i>
                            </div>
                            <h2>
                                Great Value
                            </h2>
                            <p>We offer competitive prices on our 100 million plus product range</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-cash"></i>
                            </div>
                            <h2>
                                Shop with Confidence
                            </h2>
                            <p>Our Protection covers your purchase from click to delivery</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-ios-card"></i>
                            </div>
                            <h2>
                                Safe Payment
                            </h2>
                            <p>Pay with the world’s most popular and secure payment methods</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-contacts"></i>
                            </div>
                            <h2>
                                24/7 Help Center
                            </h2>
                            <p>Round-the-clock assistance for a smooth shopping experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site-Priorities /- -->
@endsection
