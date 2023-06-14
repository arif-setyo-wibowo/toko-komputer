@extends('front.layout.navbar')

@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Search</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="/">Home</a>
                    </li>
                    <li class="is-marked">
                        <a>Search</a>
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

            <!-- Shop-Intro /- -->
            <div class="row">
                <!-- Shop-Left-Side-Bar-Wrapper -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <!-- Fetch-Categories-from-Root-Category  -->
                    <div class="fetch-categories">
                        <h3 class="title-name">Browse Categories</h3>
                        <h3 class="fetch-mark-category">
                            <a href="shop-v2-sub-category.html">Component PC
                            </a>
                        </h3>
                        <!-- Level 3 -->
                        <ul>
                            <li>
                                <a href="/shop/motherboards">Motherboard
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/processors">Prossesor
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/graphic_cards">VGA
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/memories">Memory
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/storages">Storage
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/power_supplies">PSU
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/coolers">Cooler
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- //end Level 3 -->
                        <h3 class="fetch-mark-category">
                            <a href="shop-v2-sub-category.html">Gaming Gear
                            </a>
                        </h3>
                        <ul>
                            <li>
                                <a href="/shop/keyboards">Keyboard
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/mouse">Mouse
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/monitors">Monitor
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop/earphone">Headset
                                    <span class="total-fetch-items"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Fetch-Categories-from-Root-Category  /- -->
                    <!-- Filters -->
                    

                    <!-- Filters /- -->
                </div>
                <!-- Shop-Left-Side-Bar-Wrapper /- -->
                <!-- Shop-Right-Wrapper -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- Page-Bar -->
                    <div class="page-bar clearfix">
                        <div class="shop-settings">
                            <a id="list-anchor" >
                                <i class="fas fa-th-list"></i>
                            </a>
                            <a id="grid-anchor" class="active">
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

                    <div class="row product-container grid-style">
                        
                        <div class="product-item col-lg-4 col-md-6 col-sm-6">
                            <div class="item col-md-12">
                                <div class="image-container">
                                    <a class="item-img-wrapper-link" href="/detailproduk/">
                                        <img class="img-fluid mt-2"style="max-height:223.21px; "
                                            src="{{ asset('uploads/') . " alt="Product">
                                    </a>
                                </div>
                                <div class="item-content">
                                    <div class="what-product-is">
                                        <h2 class="item-title">
                                            <a href="/detailproduk/"> </a>
                                        </h2>
                                        <div class="item-description ">
                                            <p>ini deskripsi<a
                                                    class="text-primary font-weight-bold"
                                                    href=""> see more...</a></p>
                                        </div>
                                    </div>
                                    <div class="price-template ">
                                        <div class="item-new-price ">
                                            Rp. 200.000
                                        </div>
                                        <div class="item-old-price text-decoration-none">
                                            <div class="item-action-behaviors">
                                                <button
                                                    class=" item-addCart btn-success button button-outline-secondary add-to-cart-btn">

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="tag new">
                                        <span>NEW</span>
                                    </div> 
                            </div>
                        </div>
                        
                    </div>

                    <!-- Row-of-Product-Container /- -->
                </div>
                <!-- Shop-Right-Wrapper /- -->
            </div>
        </div>
    </div>
@endsection
