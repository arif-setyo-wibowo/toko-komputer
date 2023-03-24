@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Testing Payment Gateway</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
        <li class="breadcrumb-item active">Testing Payment Gateway</li>
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
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home"
                  type="button" role="tab" aria-controls="home" aria-selected="true">Test Tripay</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile"
                  type="button" role="tab" aria-controls="profile" aria-selected="false">Test Midtrans</button>
              </li>
            </ul>
            <!-- ISI -->
            <div class="tab-content pt-2" id="borderedTabContent">
              <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title">TESTING TRIPAY</h5>
                <form action="{{ url()->current() }}/bayar" method="post">
                  @csrf
                  <div class="row col">
                    <label for="inputText" class="col-md-2 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" name="pelanggan" required>
                        <option selected disabled value="">Pilih Pelanggan</option>
                        @foreach ($pelanggan as $pelanggans)
                          <option value="{{ $pelanggans->customerId }}">{{ $pelanggans->customerName }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row col mt-2">
                    <label for="inputText" class="col-md-2 col-form-label">Barang (Memories)</label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example" name="barang1" required>
                        <option selected disabled value="">Pilih Memori</option>
                        @foreach ($memori as $memories)
                          <option value="{{ $memories->memoryId }}">{{ $memories->memoryName }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-select" aria-label="Default select example" name="jumlah1" required>
                        <option selected value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                      </select>
                    </div>
                  </div>
                  <div class="row col mt-2">
                    <label for="inputText" class="col-md-2 col-form-label">Barang (Casing)</label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example" name="barang2" required>
                        <option selected disabled value="">Pilih Casing</option>
                        @foreach ($casing as $casings)
                          <option value="{{ $casings->caseId }}">{{ $casings->caseName }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-select" aria-label="Default select example" name="jumlah2" required>
                        <option selected value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                      </select>
                    </div>
                  </div>
                  <div class="row col mt-2">
                    <label for="inputText" class="col-md-2 col-form-label">Metode Pembayaran</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" name="metode" required>
                        <option selected disabled value="">Pilih Metode Pembayaran</option>
                        @foreach ($listbank as $bank)
                          <option value="{{ $bank->code }}">{{ $bank->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-sm-12" align="right">
                      <button type="submit" class="btn btn-primary">Bayar</button>
                    </div>
                  </div>
                </form>

                <!-- Tambah Sosmed -->
              </div>
              <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">TESTING MIDTRANS</h5>
                <form action="{{ url()->current() }}/bayarmidtrans" method="post">
                  @csrf
                  <div class="row col">
                    <label for="inputText" class="col-md-2 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" name="pelanggan" required>
                        <option selected disabled value="">Pilih Pelanggan</option>
                        @foreach ($pelanggan as $pelanggans)
                          <option value="{{ $pelanggans->customerId }}">{{ $pelanggans->customerName }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row col mt-2">
                    <label for="inputText" class="col-md-2 col-form-label">Barang (Memories)</label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example" name="barang1" required>
                        <option selected disabled value="">Pilih Memori</option>
                        @foreach ($memori as $memories)
                          <option value="{{ $memories->memoryId }}">{{ $memories->memoryName }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-select" aria-label="Default select example" name="jumlah1" required>
                        <option selected value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                      </select>
                    </div>
                  </div>
                  <div class="row col mt-2">
                    <label for="inputText" class="col-md-2 col-form-label">Barang (Casing)</label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example" name="barang2" required>
                        <option selected disabled value="">Pilih Casing</option>
                        @foreach ($casing as $casings)
                          <option value="{{ $casings->caseId }}">{{ $casings->caseName }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-select" aria-label="Default select example" name="jumlah2" required>
                        <option selected value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                      </select>
                    </div>
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
