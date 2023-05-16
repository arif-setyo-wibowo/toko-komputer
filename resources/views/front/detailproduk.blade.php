@extends('front.layout.navbar')

@section('content')

    
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Detail</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="faq.html">Rakit Pc</a>
                    </li>
                </ul>
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
                        <img id="zoom-pro" class="img-fluid" src="{{ asset('front/') }}/images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg" alt="Zoom Image">
                        <div id="gallery" class="u-s-m-t-10">
                            <a class="active" data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                                <img src="{{ asset('front/') }}/images/product/product@2x.jpg" alt="Product">
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
                                    <a href="single-product.html">iGame GeForce RTX 4090 24GB GDDR6X Vulcan</a>
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
                                <div>
                                    <button class="ml-5 btn-success button button-outline-secondary" type="submit">Add to cart</button>
                                </div>
                              </form>
                            </div>
                            <div class="price">
                                <h4>RP 2.000.000</h4>
                            </div>
                        </div>
                        <!-- <div class="section-4-sku-information u-s-p-y-14">
                        </div> -->
                        <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                            <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                      <div class="detail-tabs-wrapper ">
                                          <div class="detail-nav-wrapper u-s-m-b-">
                                              <ul class="nav single-product-nav justify-content-center">
                                                <li class="nav-item">
                                                      <a class="nav-link active" data-toggle="tab"  href="#specification">Specifications</a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a class="nav-link " data-toggle="tab" href="#description">Description</a>
                                                  </li>
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
                                                                  <td>Sku</td>
                                                                  <td>AY536FA08JT86NAFAMZ</td>
                                                              </tr>
                                                          </table>
                                                      </div>
                                                      <div class="spec-table u-s-m-b-20">
                                                          <h4 class="spec-heading">Product Information</h4>
                                                          <table>
                                                              <tr>
                                                                  <td>Main Material</td>
                                                                  <td>Cotton</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Color</td>
                                                                  <td>Heather Grey, Black, White</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Sleeves</td>
                                                                  <td>Long Sleeve</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Top Fit</td>
                                                                  <td>Regular</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Print</td>
                                                                  <td>Not Printed</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Neck</td>
                                                                  <td>Round Neck</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Pieces Count</td>
                                                                  <td>1 piece</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Occasion</td>
                                                                  <td>Casual</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Shipping Weight (kg)</td>
                                                                  <td>0.5</td>
                                                              </tr>
                                                          </table>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Specifications-Tab /- -->
                                              <!-- Description-Tab -->
                                              <div class="tab-pane fade  show" id="description">
                                                  <div class="description-whole-container">
                                                      <p class="desc-p u-s-m-b-26">This hoodie is full cotton. It includes a muff sewn onto the lower front, and (usually) a drawstring to adjust the hood opening. Throughout the U.S., it is common for middle-school, high-school, and college students to wear this sweatshirts—with or without hoods—that display their respective school names or mascots across the chest, either as part of a uniform or personal preference.
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
            <!-- Product-Detail /- -->
            <!-- Detail-Tabs -->
            
    </div>
    <!-- Single-Product-Full-Width-Page /- -->

@endsection