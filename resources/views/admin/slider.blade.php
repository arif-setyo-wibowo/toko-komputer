@extends('admin.layout.sidebar')

@section('content')
    <div class="pagetitle">
        <h1>Slider</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Slider</li>
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
                    <div class="card recent-sales overflow-auto p-3 ">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Daftar</button>
                            </li>
                        </ul>
                        <!-- ISI -->
                        <div class="tab-content p-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <h5 class="card-title">Daftar List Banner</h5>
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($slider as $data)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('uploads/' . $data->sliderImage) }}"
                                                        style="width:120px;"></td>
                                                <td>Banner {{ $loop->iteration }}</td>
                                                <td>
                                                    <li class="nav-item dropdown" style="list-style-type: none;">
                                                        <a style="font-size:150%; color:#4154f1;"
                                                            class="text-center col-sm-3 nav-link nav-icon" href="#"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bi bi-gear"></i>
                                                        </a><!-- End Notification Icon -->
                                                        <ul
                                                            class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                                                            <li style="font-size:20px; padding-left: 25px;" class="row">
                                                                <button type="button"
                                                                    class="m-1 col-4 btn btn-outline-primary buttonupdate"
                                                                    id="{{ $data->sliderId }}"><i
                                                                        class="bi bi-pen"></i></button>
                                                             </li>
                                                        </ul><!-- End Notification Dropdown Items -->
                                                    </li><!-- End Notification Nav -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- End Bordered Tabs -->

                        <!-- Modal Update-->
                        <div class="modal fade modal-lg" id="updateSlider" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="{{ url()->current() }}/update" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Banner</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-3">
                                            <p>Ukuran Minimum Lebar = 1110px, Tinggi = 236px</p>
                                            <input type="hidden" name="IdUpdate" id="IdUpdate">
                                            <input type="hidden" name="imageAwal" id="imageAwal">
                                            <div class="col-md-8 col-lg-9">
                                                <img id="updateGambar" style="height: 140px; width: 570px;" alt="">
                                                <div class="pt-2 col-md-4 text-center">
                                                    <label style="width:100px;">
                                                        <input type="file" name="sliderImageUpdate"
                                                            id="sliderImageUpdate" style="display:none;">
                                                        <a class="btn btn-primary " style="width: 100px;"><i
                                                                class="bi bi-upload"></i></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Vertically centered Modal-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="{{ asset('admin/') }}/js/custom/banner.js"></script>
@endsection
