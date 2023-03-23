@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Payment Gateway</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">sosmed</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="col-12">
          <div class="card recent-sales overflow-auto p-3">
            <!-- ISI -->
            <div class="tab-content " id="borderedTabContent">
              <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title mb-5">List Bank</h5>
                <div class="row">
                  @foreach ($listbank as $bank)
                    <div class="col-lg-3 mb-4">
                      <form action="{{ url()->current() }}/bayar" method="post">
                        @csrf
                        <input type="hidden" name="method" value="{{ $bank->code }}">
                        <button type="submit" class="btn btn-light w-100">
                          <p><img src="{{ $bank->icon_url }}" width="100" height="50"></p>
                          <p>{{ $bank->name }}</p>
                        </button>
                      </form>
                    </div>
                  @endforeach
                </div>
                <!-- Tambah Sosmed -->
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
