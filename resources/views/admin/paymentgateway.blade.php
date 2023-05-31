@extends('admin.layout.sidebar')

@section('content')
    <div class="pagetitle">
        <h1>Testing Payment Gateway</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                <li class="breadcrumb-item active">Testing Cart & Payment Gateway</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <!-- Recent Sales -->
                <div class="col-12">
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
                    <div class="card recent-sales overflow-auto p-3">

                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Test Keranjang</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Bayar</button>
                            </li>
                        </ul>
                        <!-- ISI -->
                        <div class="tab-content pt-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <h5 class="card-title">TESTING KERANJANG</h5>
                                <div class="row">
                                    @foreach ($memori as $memories)
                                        <div class="col-3">
                                            <div class="card">
                                                <img src="/uploads/gambar/ram/{{ $memories->memoryImage }}"
                                                    class="card-img-top" alt="">
                                                <div class="card-body">
                                                    <h6 class="card-text ">{{ $memories->memoryName }}</h6>
                                                    <p class="card-text">Rp. {{ $memories->memoryPrice }}</p>
                                                    <form method="POST" action="{{ route('cart.add') }}">
                                                        @csrf
                                                        <input type="hidden" name="productId"
                                                            value="{{ $memories->memoryId }}">
                                                        <button type="submit">Tambahkan ke Keranjang</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach ($storage as $storages)
                                        <div class="col-3">
                                            <div class="card">
                                                <img src="/uploads/gambar/storage/{{ $storages->storageImage }}"
                                                    class="card-img-top" alt="">
                                                <div class="card-body">
                                                    <h6 class="card-text ">{{ $storages->storageName }}</h6>
                                                    <p class="card-text">Rp. {{ $storages->storagePrice }}</p>
                                                    <form method="POST" action="{{ route('cart.add') }}">
                                                        @csrf
                                                        <input type="hidden" name="productId"
                                                            value="{{ $storages->storageId }}">
                                                        <button type="submit">Tambahkan ke Keranjang</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach ($casing as $case)
                                        <div class="col-3">
                                            <div class="card">
                                                <img src="/uploads/gambar/casing/{{ $case->caseImage }}"
                                                    class="card-img-top" alt="">
                                                <div class="card-body">
                                                    <h6 class="card-text ">{{ $case->caseName }}</h6>
                                                    <p class="card-text">Rp. {{ $case->casePrice }}</p>
                                                    <form method="POST" action="{{ route('cart.add') }}">
                                                        @csrf
                                                        <input type="hidden" name="productId" value="{{ $case->caseId }}">
                                                        <button type="submit">Tambahkan ke Keranjang</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Tambah Sosmed -->
                            </div>
                            <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h5 class="card-title">TESTING BAYAR</h5>
                                <form action="{{ url()->current() }}/bayarmidtrans" method="post">
                                    @csrf
                                    <div class="row col">
                                        @foreach ($pelanggan as $data)
                                            <p>session customerId = {{ $data->customerId }}</p>
                                            <label for="inputText" class="col-md-2 col-form-label">Nama Pelanggan</label>
                                            <div class="col-sm-10 mb-2">
                                                <input class="form-control" type="text" name=""
                                                    value="{{ $data->customerName }}" disabled>
                                                <input class="form-control" type="hidden" name="pelanggan"
                                                    value="{{ $data->customerName }}">
                                                <input class="form-control" type="hidden" name="idpelanggan"
                                                    value="{{ $data->customerId }}">
                                            </div>
                                            <label for="inputText" class="col-md-2 col-form-label">Alamat Lengkap</label>
                                            <div class="col-sm-10 mb-2">
                                                <textarea name="alamat" id="" style="width:100%" rows="5" required></textarea>
                                            </div>
                                            <label for="inputText" class="col-md-2 col-form-label">Kota</label>
                                            <div class="col-sm-10 mb-2">
                                                <input class="form-control" type="text" name="kota" required>
                                            </div>
                                            <label for="inputText" class="col-md-2 col-form-label">Kode pos</label>
                                            <div class="col-sm-10 mb-2">
                                                <input class="form-control" type="text" name="kodepos" required>
                                            </div>
                                            <label for="inputText" class="col-md-2 col-form-label">No Telepon</label>
                                            <div class="col-sm-10 mb-2">
                                                <input class="form-control" type="number" name=""
                                                    value="{{ $data->customerPhoneNumber }}" disabled>
                                                <input class="form-control" type="hidden" name="telp"
                                                    value="{{ $data->customerPhoneNumber }}">
                                            </div>
                                        @endforeach
                                        <h1 class="mt-5">Keranjang Belanja</h1>
                                        @if (empty($cart))
                                            <p>Keranjang belanja kosong.</p>
                                        @else
                                            <div class="row">
                                                <div class="container">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Id Produk</th>
                                                                <th>Nama Produk</th>
                                                                <th>Harga</th>
                                                                <th>Jumlah</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($cart as $item)
                                                                <tr>
                                                                    <td>{{ $item['product_id'] }}</td>
                                                                    <td>{{ $item['product_name'] }}</td>
                                                                    <td>{{ $item['product_price'] }}</td>
                                                                    <td>{{ $item['quantity'] }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">Sub Total : </td>
                                                                <td colspan="2">{{ $subtotal }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12" align="right">
                                            <button type="submit" class="btn btn-primary">Bayar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div><!-- End Recent Sales -->
            <!-- End Default Table Example -->
        </div>
        </div>
    </section>
@endsection
