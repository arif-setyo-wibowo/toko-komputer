@extends('admin.layout.sidebar')

@section('content')
    <div class="pagetitle">
        <h1>Karyawan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Karyawan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto ">
                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Daftar</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Tambah Data</button>
                            </li>
                        </ul>
                        <!-- List Data -->
                        <div class="tab-content pt-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="card-body">
                                    <h5 class="card-title">Daftar List Karyawan</span></h5>
                                    <table class="table table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan as $data)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $data->employeeName }}</td>
                                                    <td>{{ $data->employeeEmail }}</td>
                                                    <td>

                                                        @if ($data->employeeRole === 'Admin')
                                                            <button
                                                                style="font-size :12px; width:100px; background-color:#CDF5E9; border:none ; "
                                                                type="button" class="btn  btn-primary  rounded-pill">
                                                                <div style="color:#038E86;"> {{ $data->employeeRole }}
                                                            </button>
                                                        @else
                                                            <button
                                                                style="font-size :12px; width:100px; background-color:#CAC9FB; border:none ; "
                                                                type="button" class="btn  btn-primary  rounded-pill">
                                                                <div style="color:#3A36DB;"> {{ $data->employeeRole }}
                                                            </button>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Tambah Data -->
                            <div class="tab-pane fade m-3" id="bordered-profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <h5 class="card-title">Tambah Karyawan</h5>
                                <form action="" method="POST">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" name="link" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-md-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-6">
                                            <select class="form-select" aria-label="Default select example"
                                                name="socketUpdate" id="socketUpdate" required>
                                                <option selected value disabled>Pilih Jabatan</option>
                                                <option value="Manager">Manager</option>
                                                <option Value="Karyawan">Karyawan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- End Recent Sales -->
                <!-- End Default Table Example -->
            </div>
        </div>

        </div>
        </div>
    </section>
@endsection
