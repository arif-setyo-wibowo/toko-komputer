@extends('front.layout.navbar')

@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Detail History</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="/">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="/detail history">Detail History</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Checkout-Page -->
    <div class="page-checkout u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <!-- Billing-&-Shipping-Details -->
                        <div class="col-lg-8">
                            <h4 class="section-h4">Detail Produk</h4>
                            <div class="table-wrapper u-s-m-b-60">
                                <table>
                                    <thead class="text-center">
                                        <tr>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderDetail as $item)
                                            <tr>
                                                <td>
                                                    <div class="cart-anchor-image">
                                                        <a href="/detailproduk/{{ $item->orderDetailProductId }}">
                                                            <img src="{{ asset('front/') }}/images/product/product@1x.jpg"
                                                                alt="Product">
                                                            <h6>{{ $item->productName }}</h6>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-price">
                                                        Rp. {{ number_format($item->orderDetailProductPrice, 0, ',', '.') }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-price text-center">
                                                        {{ $item->orderDetailProductQty }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-price">
                                                        Rp.
                                                        {{ number_format($item->orderDetailProductPrice * $item->orderDetailProductQty, 0, ',', '.') }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="showdifferent">
                            </div>
                        </div>
                        <!-- Billing-&-Shipping-Details /- -->
                        <!-- Checkout -->
                        <div class="col-lg-4">
                            <h4 class="section-h4">Ringkasan</h4>
                            <div class="order-table">
                                <table class="u-s-m-b-13">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3 class="order-h3">Subtotal</h3>
                                            </td>
                                            <td>
                                                <h3 class="order-h3">Rp. {{ number_format($subtotal, 0, ',', '.') }}</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="order-h3">Ongkos Kirim</h3>
                                            </td>
                                            <td>
                                                <h3 class="order-h3">Rp.
                                                    {{ number_format($order->orderTotalPrice - $subtotal, 0, ',', '.') }}
                                                </h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 class="order-h3">Total</h3>
                                            </td>
                                            <td>
                                                <h3 class="order-h3">
                                                    Rp. {{ number_format($order->orderTotalPrice, 0, ',', '.') }}</h3>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/history"><button class="button button-outline-secondary">Kembali</button></a>
                            </div>
                        </div>
                        <!-- Checkout /- -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout-Page /- -->
@endsection
