@extends('admin.layout.sidebar')

@section('content')
    <style>
        #invoice {
            padding: 30px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px;

        }

        .invoice header {
            padding: 30px;
            margin-bottom: 20px;
            background: #F1F4FA;
            border-radius: 5px;
            font-weight: 400;
        }

        .invoice .company-details {
            text-align: right;
        }

        .invoice i {
            text-align: right;
            color: #4154f1;
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0;
            color: #012970;
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            font-size: 25px;
            font-weight: bold;
        }

        .invoice .invoice-details .invoice-title {
            margin-top: 0;
            font-weight: 600;
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            font-weight: bold;
        }

        .invoice main .notices .notice {
            font-size: 1.1em;
            margin-top: 10px;
            font-weight: normal;
            width: 70%;
            color: #73828F;
        }

        .invoice main .notices .ty {
            font-size: 1.1em;
            margin-top: 10px;
            font-weight: normal;
        }

        .bxs-printer {
            font-size: 30px;
        }

        table {
            font-weight: 530;
        }

        table .total {
            margin-top: 0;
            font-size: 18px;
            font-weight: bold;
            color: #4154f1;
        }

        table .sub {
            color: #73828F;
        }

        table .tt {
            font-weight: 800;
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px !important;
                overflow: hidden !important;
            }

            table .total {
                font-size: 15px !important;
            }

            .section {
                position: fixed;
                top: 0;
            }

            .footer {
                display: none !important;
            }

            .header {
                display: none !important;
            }

            .sidebar {
                display: none !important;
            }

            .hidden-print {
                display: none !important;
            }

            .pagetitle {
                display: none !important;
            }
        }
    </style>

    <div class="pagetitle">
        <h1>Invoice</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Order</li>
                <li class="breadcrumb-item active">Invoice</li>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto p-3">
                        <div id="invoice">

                            <div class="toolbar hidden-print">
                                <div class="text-right row">
                                    <h1 class="col name">Invoice</h1>
                                    <div class="col-md-1">
                                        <button id="printInvoice" class="btn bname#printInvoicetn-info"><i
                                                class="bx bxs-printer"></i></button>
                                    </div>

                                </div>
                                <hr>
                            </div>
                            <div class="invoice overflow-auto">
                                <div style="min-width: 600px">
                                    <header>
                                        <div class="row">
                                            <div class="col">
                                                <a target="_blank" href="https://lobianijs.com">
                                                    <img src="{{ asset('admin/') }}/img/profile-img.jpg"
                                                        data-holder-rendered="true" />
                                                </a>
                                            </div>
                                            <div class="col company-details">

                                                <div class="mt-1"><i class="bi bi-geo-alt"></i>
                                                    {{ $identitas->shopAddress }}</div>
                                                <div class="mt-1"><i class="bx bx-phone"></i>
                                                    {{ $identitas->shopPhoneNumber }}</div>
                                                <div class="mt-1"><i class="bx bx-at"></i> {{ $identitas->shopEmail }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 row contacts">
                                            <div class="col invoice-to">
                                                <div class="mb-1 text-gray-light">INVOICE TO:</div>
                                                <div class="mt-3 mb-3"></div>
                                                <h2 class="to">{{ $pelanggan->customerName }}</h2>
                                                <div><i class="bx bx-phone"></i> {{ $pelanggan->customerPhoneNumber }}</div>
                                                <div><i class="bx bx-at"></i> {{ $pelanggan->customerEmail }}</div>
                                            </div>
                                            <div class="col invoice-details">
                                                <h1 class="invoice-id">Invoice</h1>
                                                <div class="invoice-title">Invoice ID.</div>
                                                <div class="id mb-2">{{ $order->orderId }}</div>
                                                <div class="invoice-title">Invoice date.</div>
                                                <div class="date">
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $order->orderDate)->format('d-m-Y') }}
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                    <main>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item</th>
                                                    <th scope="col">Barang</th>
                                                    <th scope="col" class="text-center">Harga</th>
                                                    <th scope="col" class="text-center">Jumlah</th>
                                                    <th scope="col" class="text-center">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orderdetail as $item)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $item->Categories }}</td>
                                                        <td>{{ $item->productName }}</td>
                                                        <td class="text-center">Rp.
                                                            {{ number_format($item->orderDetailProductPrice, 0, ',', '.') }}
                                                        </td>
                                                        <td class="text-center">{{ $item->orderDetailProductQty }}</td>
                                                        <td class="text-center">Rp.
                                                            {{ number_format($item->orderDetailProductPrice * $item->orderDetailProductQty, 0, ',', '.') }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td style="border-bottom: 0px" colspan="3"></td>
                                                    <td colspan="2" class="sub">SUBTOTAL</td>
                                                    <td class="text-center">Rp. {{ number_format($subtotal, 0, ',', '.') }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0px" colspan="3"></td>
                                                    <td colspan="2" class="sub">Pengiriman</td>
                                                    <td class="text-center">Rp.
                                                        {{ number_format($order->orderTotalPrice - $subtotal, 0, ',', '.') }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 0px" colspan="3"></td>
                                                    <td colspan="2" class="tt">TOTAL</td>
                                                    <td class="total text-center">Rp.
                                                        {{ number_format($order->orderTotalPrice, 0, ',', '.') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="notices">
                                            <div>NOTICE:</div>
                                            <div class="notice">Apabila mempunyai pertanyaan atau kendala, harap melakukan
                                                konfirmasi atau hubungi kami dimana saja
                                                anda
                                                berada dan jangan sungkan.</div>
                                            <div class="ty">Terima kasih telah berbelanja di Toko Kami</div>
                                        </div>
                                    </main>
                                    <footer>
                                        Invoice was created on a computer and is valid without the signature and seal.
                                    </footer>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $('#printInvoice').click(function() {
                Popup($('.invoice')[0].outerHTML);

                function Popup(data) {
                    window.print();
                    return true;
                }
            });
        </script>
    </section>
@endsection
