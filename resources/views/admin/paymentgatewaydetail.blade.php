@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Detail</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Detail</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
      <div class="col-xl-8">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column ">

            <h2 class="text-center">Detail Transaksi</h2>
            <h3></h3>
            <div class="social-links mt-2">
              <h4>Total : Rp. {{ number_format($detail->amount, 0, ',', '.') }}</h4>
              <h6>Metode Pembayaran : {{ $detail->payment_name }}</h6>
              <h6>Status : {{ $detail->status }}</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column">

            <h2>Instruksi Pembayaran</h2>
            <h3></h3>
            @foreach ($detail->instructions as $instruksi)
              <div class="social-links mt-2">
                <p style="font-size: 16px" class="fw-bold">{{ $instruksi->title }}</p>
                @foreach ($instruksi->steps as $steps)
                  <p style="font-size: 12px"><b>{{ $loop->iteration }}.</b> {!! $steps !!}</p>
                @endforeach
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
