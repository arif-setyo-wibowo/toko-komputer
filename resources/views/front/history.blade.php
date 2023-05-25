@extends('front.layout.navbar')

@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>History</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="/">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="/history">History</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Cart-Page -->
    <div class="page-cart u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form>
                        <!-- Products-List-Wrapper -->
                        <div class="table-wrapper u-s-m-b-60">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Id Order</th>
                                        <th>Product</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Total</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-anchor-image">
                                                #12
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-anchor-image">
                                                <a href="single-product.html">
                                                    <img src="{{ asset('front/') }}/images/product/product@1x.jpg" alt="Product">
                                                    <h6>Casual Hoodie Full Cotton</h6>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            Selesai  
                                        </td>
                                        <td>
                                            <div class="cart-quantity">
                                                <div class="quantity">
                                                    12/12/2003
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                             <div class="cart-price">
                                                Rp.13.000.000
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <a href="/detailhistory">Lihat Detail</a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- Products-List-Wrapper /- -->
                        <!-- Coupon -->
                        <div class="coupon-continue-checkout u-s-m-b-60">
                            <div class="coupon-area">
                                
                            </div>
                            <div class="button-area">
                                <a href="shop-v1-root-category.html" class="continue">Continue Shopping</a>
                                <!-- <a href="checkout.html" class="checkout">Proceed to Checkout</a> -->
                            </div>
                        </div>
                        <!-- Coupon /- -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart-Page /- -->
@endsection
