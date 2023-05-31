@extends('front.layout.navbar')

@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Shop</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="shop-v2-sub-category.html">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Shop-Page -->
    <div class="page-shop u-s-p-t-80">
        <div class="container">
            <!-- Shop-Intro -->
            <div class="shop-intro">
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <a href="home.html">Home</a>
                    </li>
                    <li class="has-separator">
                        <a href="shop-v1-root-category.html">Men's Clothing</a>
                    </li>
                    <li class="is-marked">
                        <a href="shop-v3-sub-sub-category.html">Tops</a>
                    </li>
                </ul>
            </div>
            <!-- Shop-Intro /- -->
            <div class="row">
                <!-- Shop-Left-Side-Bar-Wrapper -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <!-- Fetch-Categories-from-Root-Category  -->
                    <div class="fetch-categories">
                        <h3 class="title-name">Browse Categories</h3>
                        <h3 class="fetch-mark-category">
                            <a href="shop-v2-sub-category.html">Tops
                                <span class="total-fetch-items">(5)</span>
                            </a>
                        </h3>
                        <!-- Level 3 -->
                        <ul>
                            <li>
                                <a href="shop-v3-sub-sub-category.html">T-Shirts
                                    <span class="total-fetch-items">(2)</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.html">Hoodies
                                    <span class="total-fetch-items">(1)</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.html">Suits
                                    <span class="total-fetch-items">(1)</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.html">Black Bean T-Shirt
                                    <span class="total-fetch-items">(1)</span>
                                </a>
                            </li>
                        </ul>
                        <!-- //end Level 3 -->
                    </div>
                    <!-- Fetch-Categories-from-Root-Category  /- -->
                    <!-- Filters -->
                    <!-- Filter-Brand -->
                    <div class="facet-filter-associates">
                        <h3 class="title-name">Brand</h3>
                        <form class="facet-form" action="#" method="post">
                            <div class="associate-wrapper">
                                <input type="checkbox" class="check-box" id="cbs-21">
                                <label class="label-text" for="cbs-21">Calvin Klein
                                    <span class="total-fetch-items">(0)</span>
                                </label>
                                <input type="checkbox" class="check-box" id="cbs-22">
                                <label class="label-text" for="cbs-22">Diesel
                                    <span class="total-fetch-items">(0)</span>
                                </label>
                                <input type="checkbox" class="check-box" id="cbs-23">
                                <label class="label-text" for="cbs-23">Polo
                                    <span class="total-fetch-items">(0)</span>
                                </label>
                                <input type="checkbox" class="check-box" id="cbs-24">
                                <label class="label-text" for="cbs-24">Tommy Hilfiger
                                    <span class="total-fetch-items">(0)</span>
                                </label>
                            </div>
                        </form>
                    </div>
                    <!-- Filter-Brand /- -->
                    <!-- Filter-Price -->
                    <div class="facet-filter-by-price">
                        <h3 class="title-name">Price</h3>
                        <form class="facet-form" action="#" method="post">
                            <!-- Final-Result -->
                            <div class="amount-result clearfix">
                                <div class="price-from">$0</div>
                                <div class="price-to">$3000</div>
                            </div>
                            <!-- Final-Result /- -->
                            <!-- Range-Slider  -->
                            <div class="price-filter"></div>
                            <!-- Range-Slider /- -->
                            <!-- Range-Manipulator -->
                            <div class="price-slider-range" data-min="0" data-max="5000" data-default-low="0"
                                data-default-high="3000" data-currency="$"></div>
                            <!-- Range-Manipulator /- -->
                            <button type="submit" class="button button-primary">Filter</button>
                        </form>
                    </div>
                    <!-- Filter-Price /- -->
                    <!-- Filters /- -->
                </div>
                <!-- Shop-Left-Side-Bar-Wrapper /- -->
                <!-- Shop-Right-Wrapper -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- Page-Bar -->
                    <div class="page-bar clearfix">
                        <div class="shop-settings">
                            <a id="list-anchor" class="active">
                                <i class="fas fa-th-list"></i>
                            </a>
                            <a id="grid-anchor">
                                <i class="fas fa-th"></i>
                            </a>
                        </div>
                        <!-- Toolbar Sorter 1  -->
                        <div class="toolbar-sorter">
                            <div class="select-box-wrapper">
                                <label class="sr-only" for="sort-by">Sort By</label>
                                <select class="select-box" id="sort-by">
                                    <option selected="selected" value="">Sort By: Best Selling</option>
                                    <option value="">Sort By: Latest</option>
                                    <option value="">Sort By: Lowest Price</option>
                                    <option value="">Sort By: Highest Price</option>
                                    <option value="">Sort By: Best Rating</option>
                                </select>
                            </div>
                        </div>
                        <!-- //end Toolbar Sorter 1  -->
                        <!-- Toolbar Sorter 2  -->
                        <div class="toolbar-sorter-2">
                            <div class="select-box-wrapper">
                                <label class="sr-only" for="show-records">Show Records Per Page</label>
                                <select class="select-box" id="show-records">
                                    <option selected="selected" value="">Show: 8</option>
                                    <option value="">Show: 16</option>
                                    <option value="">Show: 28</option>
                                </select>
                            </div>
                        </div>
                        <!-- //end Toolbar Sorter 2  -->
                    </div>
                    <!-- Page-Bar /- -->
                    <!-- Row-of-Product-Container -->
                    
                        <div class="row product-container list-style">
                            <?php foreach ($item as $key => $value) { ?>
                            <div class="product-item col-lg-4 col-md-6 col-sm-6">
                                <div class="item">
                                    <div class="image-container">
                                        <a class="item-img-wrapper-link" href="/detailproduk/<?= $item[$key]["Id"] ?>">
                                            <img class="img-fluid" src="{{ asset('uploads/') . $item[$key]['Image'] }}"
                                                alt="Product">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="what-product-is">
                                            <h2 class="item-title">
                                                <a href="/detailproduk/<?= $item[$key]["Id"] ?>"><?= $item[$key]['Name'] ?></a>
                                            </h2>
                                            <div class="item-description">
                                                <p><?= $item[$key]["Description"] ?></p>
                                            </div>
                                        </div>
                                        <div class="price-template">
                                            <div class="item-new-price">
                                                Rp. <?= number_format($item[$key]["Price"]) ?>
                                            </div>
                                            <div class="item-old-price text-decoration-none">
                                                <div class="item-action-behaviors">
                                                    <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick
                                                        Look</a>
                                                    <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="tag new">
                                        <span>NEW</span>
                                    </div> --}}
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    <!-- Row-of-Product-Container /- -->
                </div>
                <!-- Shop-Right-Wrapper /- -->

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
                                                src="{{ asset('front/') }}/images/product/product@4x.jpg">
                                        </div>
                                        <!-- Product-zoom-area /- -->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <!-- Product-details -->
                                                <div class="all-information-wrapper">
                                                    <div class="section-1-title-breadcrumb-rating">
                                                        <div class="product-title">
                                                            <h1>
                                                                <a href="">iGame GeForce RTX 4090 24GB GDDR6X
                                                                    Vulcan</a>
                                                            </h1>
                                                        </div>
                                                        <ul class="bread-crumb">
                                                        </ul>
                                                    </div>
                                                    <div class="section-3-price-original-discount u-s-p-y-14">
                                                        <div class="float-right mr-2">
                                                            <form action="#" class="post-form">
                                                                <div class="quantity-wrapper u-s-m-b-">
                                                                </div>
                                                            </form>
                                                            <div>
                                                                <button
                                                                    class="ml-5 btn-success button button-outline-secondary add-to-cart-btn"
                                                                    data-product-id="">Add
                                                                    to cart</button>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <h4>Rp. 2.000.00</h4>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="section-4-sku-information u-s-p-y-14">
                                                                        </div> -->
                                                    <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="detail-tabs-wrapper ">
                                                                    <div class="detail-nav-wrapper ">
                                                                        <ul
                                                                            class="nav single-product-nav justify-content-center">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active"
                                                                                    data-toggle="tab"
                                                                                    href="#specification">Specifications</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " data-toggle="tab"
                                                                                    href="#description">Description</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-content">
                                                                        <!-- Specifications-Tab -->
                                                                        <div class="tab-pane active show fade"
                                                                            id="specification">
                                                                            <div class="specification-whole-container">
                                                                                <div class="spec-table u-s-m-b-10">
                                                                                    <h4 class="spec-heading">General
                                                                                        Information</h4>
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td>Product Code</td>
                                                                                            <td>1</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="spec-table u-s-m-b-20">
                                                                                    <h4 class="spec-heading">Product
                                                                                        Information</h4>
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td>Brand</td>
                                                                                            <td><img style="width: 70px"
                                                                                                    src=""alt="Brand">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>as</td>
                                                                                            <td>as</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>as</td>
                                                                                            <td>as</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>as</td>
                                                                                            <td>as</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>as</td>
                                                                                            <td>as</td>
                                                                                        </tr>

                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Specifications-Tab /- -->
                                                                        <!-- Description-Tab -->

                                                                        <div class="tab-pane fade  show" id="description">
                                                                            <div class="description-whole-container">
                                                                                <p class="desc-p u-s-m-b-26">This hoodie is
                                                                                    full cotton. or middle-school,
                                                                                    high-school, and college students to
                                                                                    wear this sweatshirts—with or without
                                                                                    hoods—that display their respective
                                                                                    school names or mascots across the
                                                                                    chest, either as part of a uniform or
                                                                                    personal preference.
                                                                                </p>
                                                                            </div>
                                                                        </div>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Quick-view-Modal /- -->
            </div>
        </div>
    </div>
    <!-- Shop-Page /-->
@endsection
