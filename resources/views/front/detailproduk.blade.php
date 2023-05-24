@extends('front.layout.navbar')

@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Detail {{ $itemType }}</h2>
            </div>
        </div>
    </div>
    <!-- Single-Product-Full-Width-Page -->
    <div class="page-detail u-s-p-t-80">
        <div class="container">
            <!-- Product-Detail -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Product-zoom-area -->
                    <div class="zoom-area">
                        <img id="zoom-pro" class="img-fluid" src="{{ asset('uploads/gambar') . $item['Image'] }}"
                            data-zoom-image="{{ asset('uploads/gambar') . $item['Image'] }}" alt="Zoom Image">
                        <div id="gallery" class="u-s-m-t-10">
                            <a class="active" data-image="{{ asset('uploads/gambar') . $item['Image'] }}"
                                data-zoom-image="{{ asset('uploads/gambar') . $item['Image'] }}">
                                <img src="{{ asset('uploads/gambar') . $item['Image'] }}" alt="Product">
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
                                    {{ $item['Name'] }}
                                </h1>
                            </div>
                            {{-- <ul class="bread-crumb">
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
                            </ul> --}}
                        </div>
                        <div class="section-3-price-original-discount u-s-p-y-14">

                            <div class="float-right mr-2">
                                <form action="#" class="post-form">
                                    <div class="quantity-wrapper u-s-m-b-">
                                        <!-- <span>Quantity:</span>
                                                            <div class="quantity">
                                                                <input type="text" class="quantity-text-field" value="1">
                                                                <a class="plus-a" data-max="1000">&#43;</a>
                                                                <a class="minus-a" data-min="1">&#45;</a>
                                                            </div> -->
                                    </div>
                                </form>
                                <div>
                                    <button class="ml-5 btn-success button button-outline-secondary add-to-cart-btn"
                                        data-product-id="{{ $item['Id'] }}">Add
                                        to cart</button>
                                </div>
                            </div>
                            <div class="price">
                                <h4>Rp. {{ number_format($item['Price']) }}</h4>
                            </div>
                        </div>

                        <!-- <div class="section-4-sku-information u-s-p-y-14">
                                                </div> -->
                        <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="detail-tabs-wrapper ">
                                        <div class="detail-nav-wrapper ">
                                            <ul class="nav single-product-nav justify-content-center">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab"
                                                        href="#specification">Specifications</a>
                                                </li>
                                                <?php if ($item["Description"] != "") { ?>
                                                <li class="nav-item">
                                                    <a class="nav-link " data-toggle="tab"
                                                        href="#description">Description</a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <!-- Specifications-Tab -->
                                            <div class="tab-pane active show fade" id="specification">
                                                <div class="specification-whole-container">
                                                    <div class="spec-table u-s-m-b-10">
                                                        <h4 class="spec-heading">General Information</h4>
                                                        <table>
                                                            <tr>
                                                                <td>Product Code</td>
                                                                <td>{{ $item['Id'] }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="spec-table u-s-m-b-20">
                                                        <h4 class="spec-heading">Product Information</h4>
                                                        <table>
                                                            <tr>
                                                                <td>Brand</td>
                                                                <td><img style="width: 70px"
                                                                        src="{{ asset('uploads/gambar') . $item['Brand'] }}"
                                                                        alt="Brand"></td>
                                                            </tr>
                                                            <?php foreach ($item as $key => $value) {
                                                                if ($key != "Id" and $key != "Description" and $key != "Image" and $key != "Price" and $key != "Name" and $key != "Brand") { ?>
                                                            <tr>
                                                                <td>{{ $key }}</td>
                                                                <td>{{ $value }}</td>
                                                            </tr>
                                                            <?php }} ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Specifications-Tab /- -->
                                            <!-- Description-Tab -->
                                            <?php if ($item["Description"] != "") { ?>
                                            <div class="tab-pane fade  show" id="description">
                                                <div class="description-whole-container">
                                                    <p class="desc-p u-s-m-b-26">{{ $item['Description'] }}</p>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <!-- Description-Tab /- -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail-Tabs /- -->
                        </div>
                    </div>
                </div>
                <!-- Product-details /- -->
            </div>
        </div>
        <!-- Product-Detail /- -->
        <!-- Detail-Tabs -->

    </div>
    <!-- Single-Product-Full-Width-Page /- -->
@endsection
