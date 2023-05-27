@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Column -->
  <div class="col-lg-12">
    <div class="row">

      <!-- Sales Card -->
      <div class="col-xxl-3 col-md-6 col-sm-6 col-xs-6">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title">Total Jenis Barang</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cart"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $barang }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Sales Card -->

      <!-- Customers Card -->
      <div class="col-xxl-3 col-xl-6 col-sm-6 col-xs-6">
        <div class="card info-card customers-card">
          <div class="card-body">
            <h5 class="card-title">Pelanggan Terdaftar</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $pelanggan }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Customers Card --><!-- Customers Card -->
      <div class="col-xxl-3 col-xl-6 col-sm-6 col-xs-6">
        <div class="card info-card customers-card">
          <div class="card-body">
            <h5 class="card-title">Karyawan Terdaftar</h5>
            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $karyawan }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Customers Card -->

    </div>
  </div><!-- End Left side columns -->
@endsection
