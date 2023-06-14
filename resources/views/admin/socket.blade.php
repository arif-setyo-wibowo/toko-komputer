@extends('admin.layout.sidebar')

@section('content')

    <div class="pagetitle">
        <h1>Socket</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Socket</li>
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
                    <div class="card recent-sales overflow-auto p-3 ">
                        <!-- Bordered Tabs -->
                        @if ((Session::get('role.manager')))
                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Daftar</button>
                            </li>
                        </ul>
                        @endif
                        @if ((Session::get('role.karyawan')))
                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Daftar</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">Tambah Data</button>
                            </li>
                        </ul>
                        @endif
                        @if ((Session::get('role.manager')))
                        <div class="tab-content p-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <h5 class="card-title">Daftar List Socket</h5>
                                <button class="btn btn-primary btn-sm btn-success mb-4" id="btnExcel">Export</button>
                                <table class="table table-hover datatable" id="tblData">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Socket</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($socket as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->processorSocketName }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Tambah Socket -->
                            </div>
                        </div>
                        @endif
                        @if ((Session::get('role.karyawan')))
                        <!-- ISI -->
                        <div class="tab-content p-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <h5 class="card-title">Daftar List Socket</h5>
                                <a href="{{ route('socket.export') }}"><button
                                        class="btn btn-success btn-sm mb-4">Export</button></a>
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Socket</th>
                                            <th scope="col">Aksi</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($socket as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->processorSocketName }}</td>
                                                <td class="text-center">
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
                                                                    id="{{ $item->processorSocketId }}"><i
                                                                        class="bi bi-pen"></i></button>
                                                                <button type="button"
                                                                    class="m-1 col-4 btn btn-outline-danger buttonHapus"
                                                                    id="{{ $item->processorSocketId }}"><i
                                                                        class="bi bi-trash"></i></button>
                                                            </li>
                                                        </ul><!-- End Notification Dropdown Items -->
                                                        </ul><!-- End Notification Dropdown Items -->
                                                    </li><!-- End Notification Nav -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Tambah Socket -->
                            </div>
                            <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h5 class="card-title">Tambah Socket </h5>
                                <form action="{{ url()->current() }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nama Socket</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-6" style="text-align: right">
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- End Bordered Tabs -->

                        <!-- Modal -->
                        <!-- Vertically centered Modal -->
                        <div class="modal fade modal-lg" id="updateSocket" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="{{ url()->current() }}/update" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Socket</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-3">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Nama Socket</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nama"
                                                        id="socketName" required>
                                                    <input type="hidden" name="processorSocketId" id="socketId">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" id="buttonupdate">Ubah
                                                Data</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Vertically centered Modal-->

                            </div>
                        </div><!-- End Recent Sales -->
                        <!-- End Default Table Example -->
                        @endif
                    </div>
                </div>

            </div>
        </div>
        {{-- Modal Hapus --}}
        <div class="modal fade" id="hapusData" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        Apakah Yakin Menghapus Data ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary buttonAksiHapus">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal Hapus --}}
    </section>
@endsection
@section('javascript')
    <script src="{{ asset('admin/') }}/js/custom/socket.js"></script>
    <script>
        $(function () {
            $("#btnExcel").click(function () {
                $("#tblData").table2excel({
                    filename: "socket.xls"
                })
            })
        })
    </script>
@endsection
