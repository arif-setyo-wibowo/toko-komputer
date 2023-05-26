@extends('admin.layout.sidebar')

@section('content')

    <div class="pagetitle">
        <h1>Identitas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Identitas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">
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
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        @foreach ($identitas as $data)
                            <img src="{{ asset('uploads/' . $data->shopLogo) }}" alt="Profile" class="rounded-circle">
                        @endforeach
                        <h2>{{ $identitas[0]->shopName }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Ringkasan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Toko</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Profile Details</h5>
                                @if ($totalData === 0)
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama Toko</div>
                                        <div class="col-lg-9 col-md-8">-</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                                        <div class="col-lg-9 col-md-8">-</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">No Telepon</div>
                                        <div class="col-lg-9 col-md-8">-</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">-</div>
                                    </div>
                                @else
                                    @foreach ($identitas as $data)
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Nama Toko</div>
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
                                @endif
                            </div>
                            <!-- Toko Edit Form -->
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                @if ($totalData === 0)
                                    {{-- Insert Data --}}
                                    <form action="{{ url()->current() }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="shopLogo" class="col-md-4 col-lg-3 col-form-label">Logo Toko</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="" style="height: 150px;" id="gambarTambah">
                                                <div class="pt-2">
                                                    <label>
                                                        <input type="file" name="shopLogo" id="shopLogo"
                                                            style="display:none;">
                                                        <a class="btn btn-primary btn-sm"><i class="bi bi-upload"></i></a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="shopName" class="col-md-4 col-lg-3 col-form-label">Nama Toko</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="shopName" type="text" class="form-control" id="shopName">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat
                                                Toko</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="shopAddress" class="form-control" id="about" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No
                                                Telepon</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="shopPhoneNumber" type="number" class="form-control"
                                                    id="shopPhoneNumber"">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email
                                                Toko</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="shopEmail" type="email" class="form-control"
                                                    id="shopEmail">
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                                        </div>
                                    </form><!-- End Toko Edit Form -->
                                @else
                                    {{-- Update Data --}}
                                    @foreach ($identitas as $data)
                                        <form action="{{ url()->current() }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="row mb-3">
                                                <label for="shopLogo" class="col-md-4 col-lg-3 col-form-label">Logo
                                                    Toko</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img src="{{ asset('uploads/' . $data->shopLogo) }}"
                                                        style="height: 130px;" id="gambarTambah">
                                                    <div class="pt-2">
                                                        <label>
                                                            <input type="file" name="shopLogo" id="shopLogo"
                                                                style="display:none;">
                                                            <a class="btn btn-primary btn-sm"><i
                                                                    class="bi bi-upload"></i></a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="shopName" class="col-md-4 col-lg-3 col-form-label">Nama
                                                    Toko</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="shopName" type="text" class="form-control"
                                                        id="shopName" value="{{ $data->shopName }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat
                                                    Toko</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <textarea name="shopAddress" class="form-control" id="about" style="height: 100px">{{ $data->shopAddress }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No
                                                    Telepon</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="shopPhoneNumber" type="number" class="form-control"
                                                        id="shopPhoneNumber" value="{{ $data->shopPhoneNumber }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email
                                                    Toko</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="shopEmail" type="email" class="form-control"
                                                        id="shopEmail" value="{{ $data->shopEmail }}">
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form><!-- End Toko Edit Form -->
                                    @endforeach
                                @endif
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script src="{{ asset('admin/') }}/js/custom/identitas.js"></script>
@endsection
