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
                        <div class="table-wrapper u-s-m-b-60 text-center">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Id Order</th>
                                        <th>Tanggal</th>
                                        <th>Total</th>
                                        <th>Status Pembayaran</th>
                                        <th>Status Pengiriman</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($order->isEmpty())
                                        <tr>
                                            <td colspan="6">Tidak Ada Data</td>
                                        </tr>
                                    @else
                                        @foreach ($order as $item)
                                            <tr>
                                                <td>
                                                    <div class="">
                                                        {{ $item->orderId }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-quantity">
                                                        <div class="quantity">
                                                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->orderDate)->format('d-m-Y') }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-price">
                                                        Rp. {{ number_format($item->orderTotalPrice, 0, ',', '.') }}
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item->orderStatus == 'Unpaid')
                                                        Belum Dibayar
                                                    @else
                                                        Selesai
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (empty($item->orderResi))
                                                        Sedang Dikemas
                                                    @else
                                                        Selesai
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="action-wrapper">
                                                        <a href="/detailhistory/{{ $item->orderId }}">Lihat Detail</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- Products-List-Wrapper /- -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart-Page /- -->
@endsection
