@extends('admin.layout.sidebar')

@section('content')

  <div class="pagetitle">
    <h1>Identitas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">identitas</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            @foreach ($identitas as $data)
              <img src="{{ asset('uploads/gambar/identitas/' . $data->shopLogo) }}" alt="Profile" class="rounded-circle">
            @endforeach
            <h2>Toko Komputer</h2>
            <h3></h3>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                  Toko</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>
                @foreach ($identitas as $data)
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Toko</div>
                    <div class="col-lg-9 col-md-8">{{ $data->shopName }}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">{{ $data->shopAddress }}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No Telepon</div>
                    <div class="col-lg-9 col-md-8">{{ $data->shopPhoneNumber }}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $data->shopEmail }}</div>
                  </div>
                @endforeach
              </div>
              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <!-- Toko Edit Form -->
                @if ($errors->any())
                  <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                      {{ $error }}
                    @endforeach
                  </div>
                @endif
                @foreach ($identitas as $data)
                  <form action="/identitas" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                      <label for="shopLogo" class="col-md-4 col-lg-3 col-form-label">Logo Toko</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('uploads/gambar/identitas/' . $data->shopLogo) }}" style="height: 150px;"
                          alt="">
                        <div class="pt-2">
                          <label>
                            <input type="file" name="shopLogo" id="shopLogo" style="display:none;">
                            <a class="btn btn-primary btn-sm"><i class="bi bi-upload"></i></a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="shopName" class="col-md-4 col-lg-3 col-form-label">Nama Toko</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="shopName" type="text" class="form-control" id="shopName"
                          value="{{ $data->shopName }}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat Toko</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="shopAddress" class="form-control" id="about" style="height: 100px">{{ $data->shopAddress }}</textarea>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="shopPhoneNumber" type="text" class="form-control" id="shopPhoneNumber"
                          value="{{ $data->shopPhoneNumber }}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email Toko</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="shopEmail" type="email" class="form-control" id="shopEmail"
                          value="{{ $data->shopEmail }}">
                      </div>
                    </div>
                @endforeach
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                </form><!-- End Toko Edit Form -->
              </div>
            </div><!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
