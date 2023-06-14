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
                        <a href="/">Home</a>
                    </li>
                    <li class="is-marked">
                        <a>Cart</a>
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
                    <!-- Products-List-Wrapper -->
                    <div class="table-wrapper u-s-m-b-60">
                        <table id="cart-items">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyId">
                                @if (empty($cart))
                                    <tr class="text-center">
                                        <td colspan="5">Tidak Ada Data</td>
                                    </tr>
                                @else
                                    @foreach ($cart as $item)
                                        <tr data-product-id="{{ $item['product_id'] }}">
                                            <td>
                                                <div class="cart-anchor-image">
                                                    <a href="/detailproduk/{{ $item['product_id'] }}">
                                                        <img src="{{ asset('uploads') }}/{{ $item['product_images'] }}"
                                                            alt="Product">
                                                        <h6>{{ substr($item['product_name'], 0, 35) }} ....</h6>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-price">
                                                    Rp. {{ number_format($item['product_price'], 0, ',', '.') }}
                                                    <input type="hidden" id="cart-price_{{ $item['product_id'] }}"
                                                        value="{{ $item['product_price'] }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-quantity">
                                                    <div class="quantity">
                                                        <input type="text" class="quantity-text-field"
                                                            id="qty_{{ $item['product_id'] }}"
                                                            value="{{ $item['quantity'] }}" disabled>
                                                        <input type="hidden" class="quantity-text-field"
                                                            id="qty2_{{ $item['product_id'] }}"
                                                            value="{{ $item['quantity'] }}">
                                                        <a class="plus-a btn-increase-quantity"
                                                            data-product-id="{{ $item['product_id'] }}">&#43;</a>
                                                        <a class="minus-a btn-decrease-quantity"
                                                            data-product-id="{{ $item['product_id'] }}">&#45;</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-price">
                                                    Rp. <span
                                                        id="viewsubtotal_{{ $item['product_id'] }}">{{ number_format($item['product_price'] * $item['quantity'], 0, ',', '.') }}</span>
                                                    <input type="hidden" id="subtotal_{{ $item['product_id'] }}"
                                                        value="{{ $item['product_price'] * $item['quantity'] }}">
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
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- Products-List-Wrapper /- -->

                    <div class="coupon-continue-checkout u-s-m-b-60">
                        @if (!empty($cart))
                            <div class="button-area">
                                <a href="/" class="continue">Continue Shopping</a>
                                <a href="/checkout" class="checkout">Proceed to Checkout</a>
                            </div>
                        @endif
                    </div>

                    <!-- Coupon /- -->

                </div>
            </div>
        </div>
    </div>
    <!-- Cart-Page /- -->

    </div>
    <!-- Single-Product-Full-Width-Page /- -->
@endsection
