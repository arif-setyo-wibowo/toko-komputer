@extends('admin.layout.sidebar')

@section('content')
    <div class="pagetitle">
        <h1>Order</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Order</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-1"></i>
                        {{ $message }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">

                        @foreach ($errors->all() as $error)
                            <i class="bi bi-exclamation-octagon me-1"> {{ $error }} </i><br>
                        @endforeach
                    </div>
                @endif
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <!-- Bordered Tabs -->
                        <!-- ISI -->
                        <div class="tab-content p-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <h5 class="card-title">Daftar List Order</h5>
                                <table class="table table-hovered datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Order</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Status Pesanan</th>
                                            <th scope="col">No Resi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $item)
                                            <tr>
                                                <th scope="row"><a href="#">#{{ substr($item->orderId, 0, 8) }}</a>
                                                </th>
                                                <td><i class="bi bi-person-fill "></i> {{ $item->customerName }}</td>

                                                <td><i class="bi  bi-calendar-week-fill" style="color:#198754;"></i>
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->orderDate)->format('d-m-Y') }}
                                                </td>
                                                <td>
                                                    @if (empty($item->orderResi) && $item->orderStatus == 'Unpaid')
                                                        <button
                                                            style="font-size :12px; width:100px; background-color:#F5CDD9; border:none ; "
                                                            type="button" class="btn btn-primary rounded-pill">
                                                            <div style="color:#ff7f00;"> Perlu Dibayar
                                                        </button>
                                                    @elseif (empty($item->orderResi) && $item->orderStatus == 'Paid')
                                                        <button
                                                            style="font-size :12px; width:100px; background-color:#CAC9FB; border:none ; "
                                                            type="button" class="btn btn-primary rounded-pill btn-resi"
                                                            data-bs-target="#inputResi" data-bs-toggle="modal"
                                                            data-id="{{ $item->orderId }}">
                                                            <div style="color:#3A36DB;"> Input Resi
                                                        </button>
                                                    @elseif (empty($item->orderResi) && $item->orderStatus == 'Cancelled')
                                                        <button
                                                            style="font-size :12px; width:100px; background-color:#F5CDD9; border:none ; "
                                                            type="button" class="btn btn-primary rounded-pill">
                                                            <div style="color:#FF5368;"> Dibatalkan
                                                        </button>
                                                    @else
                                                        <button
                                                            style="font-size :12px; width:100px; background-color:#CDF5E9; border:none ; "
                                                            type="button" class="btn btn-primary rounded-pill">
                                                            <div style="color:#038E86;"> Selesai
                                                        </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (empty($item->orderResi))
                                                        -
                                                    @else
                                                        {{ $item->orderResi }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url()->current() }}/invoice/{{ $item->orderId }}">lihat
                                                        invoice</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Tambah Brand -->
                            </div>
                        </div><!-- End Bordered Tabs -->

                        <!-- Modal -->
                        <!-- Vertically centered Modal -->
                        <div class="modal fade modal-lg" id="inputResi" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="{{ url()->current() }}/input-resi" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Input Resi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-3">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">No Resi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="resi"
                                                        id="resi">
                                                    <input type="hidden" name="orderId" id="orderId" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Vertically centered Modal-->

                            </div>
                        </div><!-- End Recent Sales -->
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script src="{{ asset('admin/') }}/js/custom/order.js"></script>
@endsection
