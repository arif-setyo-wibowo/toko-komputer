@extends('front.layout.navbar')

@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Cart</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="faq.html">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Cart-Page -->
    <div class="page-cart u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="cart-container">
                    @if (empty($cart))
                        <h2>Keranjang Kosong</h2>
                    @else
                        <!-- Products-List-Wrapper -->
                        <div class="table-wrapper u-s-m-b-60">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        <tr data-product-id="{{ $item['product_id'] }}">
                                            <td>
                                                <div class="cart-anchor-image">
                                                    <a href="single-product.html">
                                                        <img src="{{ asset('front/') }}/images/product/product@1x.jpg"
                                                            alt="Product">
                                                        <h6>{{ substr($item['product_name'], 0, 35) }} ....</h6>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-price">
                                                    Rp. {{ number_format($item['product_price'], 0, ',00', '.') }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-quantity">
                                                    <div class="quantity">
                                                        <input type="text" class="quantity-text-field"
                                                            value="{{ $item['quantity'] }}">
                                                        <a class="plus-a" data-max="1000">&#43;</a>
                                                        <a class="minus-a" data-min="1">&#45;</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-price">
                                                    Rp.
                                                    {{ number_format($item['product_price'] * $item['quantity'], 0, ',00', '.') }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="action-wrapper">
                                                    <button
                                                        class="button button-outline-secondary fas fa-trash btn-remove-from-cart"
                                                        data-product-id="{{ $item['product_id'] }}"></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Products-List-Wrapper /- -->
                        <div class="coupon-continue-checkout u-s-m-b-60">
                            <div class="button-area">
                                <a href="/" class="continue">Continue Shopping</a>
                                <a href="/checkout" class="checkout">Proceed to Checkout</a>
                            </div>
                        </div>
                        <!-- Coupon /- -->
                    @endif


                </div>
            </div>
        </div>
    </div>
    <!-- Cart-Page /- -->

    </div>
    <!-- Single-Product-Full-Width-Page /- -->
@endsection
