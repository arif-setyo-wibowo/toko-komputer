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
                @foreach ($banner1 as $data)
                    <img class="img-fluid" src="{{ asset('uploads/') }}/{{ $data->sliderImage }}"
                        alt="Winter Season Banner">
                @endforeach
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
                    <a href="/shop/processors">
                        <img src="{{ asset('front/') }}/images/brand-logos/prosesor.png" alt="Brand Logo 1">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/motherboards">
                        <img src="{{ asset('front/') }}/images/brand-logos/mobo.png" alt="Brand Logo 2">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/graphic_cards">
                        <img src="{{ asset('front/') }}/images/brand-logos/vga.png" alt="Brand Logo 3">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/memories">
                        <img src="{{ asset('front/') }}/images/brand-logos/ram.png" alt="Brand Logo 5">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/storages">
                        <img src="{{ asset('front/') }}/images/brand-logos/storage.png" alt="Brand Logo 6">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/power_supplies">
                        <img src="{{ asset('front/') }}/images/brand-logos/psu.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/computer_cases">
                        <img src="{{ asset('front/') }}/images/brand-logos/case.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/coolers">
                        <img src="{{ asset('front/') }}/images/brand-logos/cooler.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/earphone">
                        <img src="{{ asset('front/') }}/images/brand-logos/headset.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/keyboards">
                        <img src="{{ asset('front/') }}/images/brand-logos/keyboard.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/mouse">
                        <img src="{{ asset('front/') }}/images/brand-logos/mouse.png" alt="Brand Logo 7">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="/shop/monitors">
                        <img src="{{ asset('front/') }}/images/brand-logos/monitor.png" alt="Brand Logo 7">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand-Slider /- -->

    <!-- Men-Clothing -->

    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Komponen PC</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#komponen-mobo">Motherboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#komponen-pros">Processor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#komponen-vga">VGA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#komponen-memory">Memory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#komponen-storage">Storage</a>
                    </li>

                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="komponen-mobo">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    @foreach ($mobo as $data)
                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="/detailproduk/{{ $data->moboId }}">
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
                                                        <a
                                                            href="/detailproduk/{{ $data->moboId }}">{{ $data->moboName }}</a>
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
                        <div class="tab-pane  show fade" id="komponen-pros">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    @foreach ($processor as $data)
                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="/detailproduk/{{ $data->processorId }}">
                                                    <img class="img-fluid"
                                                        src="{{ asset('uploads/') }}/{{ $data->processorImage }}"
                                                        alt="Product">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <div class="what-product-is">
                                                    <ul class="bread-crumb">
                                                        &nbsp;
                                                    </ul>
                                                    <h4 class="item-title">
                                                        <a
                                                            href="/detailproduk/{{ $data->processorId }}">{{ $data->processorName }}</a>
                                                    </h4>
                                                </div>
                                                <div class="price-template">
                                                    <div class="item-new-price">
                                                        @currency($data->processorPrice)
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
                        <div class="tab-pane  show fade" id="komponen-vga">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    @foreach ($gpu as $data)
                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="/detailproduk/{{ $data->gpuId }}">
                                                    <img class="img-fluid"
                                                        src="{{ asset('uploads/') }}/{{ $data->gpuImage }}"
                                                        alt="Product">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <div class="what-product-is">
                                                    <ul class="bread-crumb">
                                                        &nbsp;
                                                    </ul>
                                                    <h4 class="item-title">
                                                        <a
                                                            href="/detailproduk/{{ $data->gpuId }}">{{ $data->gpuName }}</a>
                                                    </h4>
                                                </div>
                                                <div class="price-template">
                                                    <div class="item-new-price">
                                                        @currency($data->gpuPrice)
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
                        <div class="tab-pane  show fade" id="komponen-memory">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    @foreach ($memory as $data)
                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="/detailproduk/{{ $data->memoryId }}">
                                                    <img class="img-fluid gbr"
                                                        src="{{ asset('uploads/') }}/{{ $data->memoryImage }}"
                                                        alt="Product">
                                                </a>
                                            </div>
                                            <div class="item-content ">
                                                <div class="what-product-is float-bottom">
                                                    <ul class="bread-crumb">
                                                        &nbsp;
                                                    </ul>
                                                    <h4 class="item-title">
                                                        <a
                                                            href="/detailproduk/{{ $data->memoryId }}">{{ $data->memoryName }}</a>
                                                    </h4>
                                                </div>
                                                <div class="price-template">
                                                    <div class="item-new-price ">
                                                        @currency($data->memoryPrice)
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
                        <div class="tab-pane  show fade" id="komponen-storage">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    @foreach ($storage as $data)
                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="/detailproduk/{{ $data->storageId }}">
                                                    <img class="img-fluid gbr"
                                                        src="{{ asset('uploads/') }}/{{ $data->storageImage }}"
                                                        alt="Product">
                                                </a>
                                            </div>
                                            <div class="item-content ">
                                                <div class="what-product-is float-bottom">
                                                    <ul class="bread-crumb">
                                                        &nbsp;
                                                    </ul>
                                                    <h4 class="item-title">
                                                        <a
                                                            href="/detailproduk/{{ $data->storageId }}">{{ $data->storageName }}</a>
                                                    </h4>
                                                </div>
                                                <div class="price-template">
                                                    <div class="item-new-price ">
                                                        @currency($data->storagePrice)
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
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="/shop/motherboards">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Banner-Image & View-more -->
    <div class="banner-image-view-more">
        <div class="container">
            <div class="image-banner u-s-m-y-40">
                @foreach ($banner2 as $data)
                    <img class="img-fluid" src="{{ asset('uploads/') }}/{{ $data->sliderImage }}"
                        alt="Winter Season Banner">
                @endforeach
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
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="mobiles-latest-products">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-12">
                                    <ul class="nav tab-nav-style-2-a">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#mouse" title="Mouse">
                                                <i class="fa-solid fa-computer-mouse"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#keyboard" title="Keyboard">
                                                <i class="fa-regular fa-keyboard"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#earphone" title="Earphone">
                                                <i class="fa-solid fa-headphones-simple"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#monitor" title="Monitor">
                                                <i class="fa-solid fa-desktop"></i>
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
                                        <div class="tab-pane fade show active" id="mouse">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    @foreach ($mouse as $data)
                                                        <div class="item">
                                                            <div class="image-container">
                                                                <a class="item-img-wrapper-link"
                                                                    href="/detailproduk/{{ $data->mouseId }}">
                                                                    <img class="img-fluid gbr"
                                                                        src="{{ asset('uploads/') }}/{{ $data->mouseImage }}"
                                                                        alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="what-product-is">
                                                                    <ul class="bread-crumb">
                                                                        &nbsp;
                                                                    </ul>
                                                                    <h4 class="item-title">
                                                                        <a
                                                                            href="/detailproduk/{{ $data->mouseId }}">{{ $data->mouseName }}</a>
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
                                        <div class="tab-pane fade" id="keyboard">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    @foreach ($keyboard as $data)
                                                        <div class="item">
                                                            <div class="image-container">
                                                                <a class="item-img-wrapper-link"
                                                                    href="/detailproduk/{{ $data->keyboardId }}">
                                                                    <img class="img-fluid gbr"
                                                                        src="{{ asset('uploads/') }}/{{ $data->keyboardImage }}"
                                                                        alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="what-product-is">
                                                                    <ul class="bread-crumb">
                                                                        &nbsp;
                                                                    </ul>
                                                                    <h4 class="item-title">
                                                                        <a
                                                                            href="/detailproduk/{{ $data->keyboardId }}">{{ $data->keyboardName }}</a>
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
                                        <div class="tab-pane fade" id="earphone">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    @foreach ($earphone as $data)
                                                        <div class="item">
                                                            <div class="image-container">
                                                                <a class="item-img-wrapper-link"
                                                                    href="/detailproduk/{{ $data->earphoneId }}">
                                                                    <img class="img-fluid gbr"
                                                                        src="{{ asset('uploads/') }}/{{ $data->earphoneImage }}"
                                                                        alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="what-product-is">
                                                                    <ul class="bread-crumb">
                                                                        &nbsp;
                                                                    </ul>
                                                                    <h4 class="item-title">
                                                                        <a
                                                                            href="/detailproduk/{{ $data->earphoneId }}">{{ $data->earphoneName }}</a>
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
                                        <div class="tab-pane fade show" id="monitor">
                                            <div class="slider-fouc">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    @foreach ($monitor as $data)
                                                        <div class="item">
                                                            <div class="image-container">
                                                                <a class="item-img-wrapper-link"
                                                                    href="/detailproduk/{{ $data->monitorId }}">
                                                                    <img class="img-fluid gbr"
                                                                        src="{{ asset('uploads/') }}/{{ $data->monitorImage }}"
                                                                        alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="what-product-is">
                                                                    <ul class="bread-crumb">
                                                                        &nbsp;
                                                                    </ul>
                                                                    <h4 class="item-title">
                                                                        <a
                                                                            href="/detailproduk/{{ $data->monitorId }}">{{ $data->monitorName }}</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="store-directory.html">
                </a>
            </div>
        </div>
    </section>
    <!-- Mobiles-&-Tablets /- -->
    <!-- Banner-Layer -->
    <div class="banner-layer">
        <div class="container">
            <div class="image-banner">
                @foreach ($banner3 as $data)
                    <img class="img-fluid" src="{{ asset('uploads/') }}/{{ $data->sliderImage }}"
                        alt="Winter Season Banner">
                @endforeach
            </div>
        </div>
    </div>
    <!-- Banner-Layer /- -->
    <section class="section-maker ">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3">Casing Gaming</h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#men-latest-products">Casing Terbaru</a>
                    </li> --}}
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="men-latest-products">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <!-- Item -->
                                    @foreach ($case as $data)
                                        <div class="item">
                                            <div class="image-container">
                                                <a class="item-img-wrapper-link"
                                                    href="/detailproduk/{{ $data->caseId }}">
                                                    <img class="img-fluid gbr"
                                                        src="{{ asset('uploads/') }}/{{ $data->caseImage }}"
                                                        alt="Product">
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <div class="what-product-is">
                                                    <ul class="bread-crumb">
                                                        &nbsp;
                                                    </ul>
                                                    <h4 class="item-title">
                                                        <a
                                                            href="/detailproduk/{{ $data->caseId }}">{{ $data->caseName }}</a>
                                                    </h4>
                                                </div>
                                                <div class="price-template">
                                                    <div class="item-new-price">
                                                        @currency($data->casePrice)
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
            <a class="redirect-link"></a>
        </div>
    </section>
    <!-- Brand-Slider -->
    <div class="brand-slider u-s-p-b-80">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="sec-maker-h3">BRAND</h3>
            </div>
            <div class="brand-slider-content owl-carousel" style="height: 40px" data-item="5">
                @foreach ($merk as $data)
                    <div class="brand-pic">
                        <a>
                            <img src="{{ asset('uploads/') }}/{{ $data->brandLogo }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Brand-Slider /- -->
@endsection
