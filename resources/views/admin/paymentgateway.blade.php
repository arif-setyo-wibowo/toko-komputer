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

        <div class="col-12">
          <div class="card recent-sales overflow-auto p-3 pt-0">
            <!-- ISI -->
            <div class="tab-content " id="borderedTabContent">
              <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title text-center">TESTING PAYMENT GATEWAY</h5>
                <div class="row">
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
                </div>
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
