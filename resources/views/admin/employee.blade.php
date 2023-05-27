@extends('admin.layout.sidebar') @section('content')
<div class="pagetitle">
    <h1>Karyawan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">admin</a></li>
            <li class="breadcrumb-item active">karyawan</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->
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
                <div class="card recent-sales overflow-auto ">
                    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Daftar</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</button>
                        </li>
                    </ul>
                    <!-- List Data -->
                    <div class="tab-content pt-2" id="borderedTabContent">
                        <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body">
                                <h5 class="card-title">user <span>| daftar</span></h5>
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
                                                @if ($data->employeeRole === 'Manager')
                                                    <button style="font-size :12px; width:100px; background-color:#CDF5E9; border:none ; " type="button" class="btn  btn-primary  rounded-pill">
                                                        <div style="color:#038E86;"> {{ $data->employeeRole }}
                                                    </button> 
                                                    <button type="button" class=" btn rounded-pill btn-primary button-update" id="{{ $data->employeeId }}"><i class="bi bi-pen"></i></button>
                                                    <button type="button" class="btn rounded-pill btn-danger button-delete"  id="{{ $data->employeeId }}"><i class="bi  bi-trash"></i></button>
                                                @else
                                                    <button style="font-size :12px; width:100px; background-color:#CAC9FB; border:none ; " type="button" class="btn  btn-primary  rounded-pill">
                                                        <div style="color:#3A36DB;"> {{ $data->employeeRole }}
                                                    </button>
                                                    <button type="button" class=" btn rounded-pill btn-primary button-update" id="{{ $data->employeeId }}"><i class="bi bi-pen"></i></button> 
                                                    <button type="button" class="btn rounded-pill btn-danger button-delete"  id="{{ $data->employeeId }}"><i class="bi  bi-trash"></i></button>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Tambah Data -->
                        <div class="tab-pane fade m-3" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h5 class="card-title">Tambah Karyawan</h5>
                            <form action="{{ url()->current() }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="employeeName" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" name="employeeEmail" required>
                                    </div>
                                </div><div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="employeePassword" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-md-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-6">
                                        <select class="form-select" aria-label="Default select example" name="employeeRole" required>
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
            </div>
            <!-- End Recent Sales -->
            <!-- End Default Table Example -->
        </div>
    </div>

    </div>
    </div>
    
    <!-- Modal -->
    <!-- update -->
    <div class="modal fade modal-lg" id="update" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ url()->current() }}/update" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Update Karyawan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3">
                        <div class="row mt-4">
                            <div class="row col">
                                <label for="inputText" class="col-md-3 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-8">
                                    <input type="hidden" name="idUpdate" id="idUpdate">
                                    <input type="text" class="form-control" name="updateName" id="namaUpdate" required>
                                </div>
                            </div>
                            <div class="row col">
                                <label for="inputText" class="col-md-3 col-form-label">Email Karyawan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="updateEmail" id="emailUpdate" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="row col ">
                                <label for="inputText" class="col-md-3 col-form-label">Role</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="updateRole" id="roleUpdate" required>
                                    <option selected disabled value="">Pilih Jabatan</option>
                                      <option value="Manager">Manager</option>
                                      <option value="Karyawan">Karyawan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row col">
                                <label for="inputText" class="col-md-3 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="hidden" class="form-control" name="passwordLama" id="passwordLama">
                                    <input type="text" class="form-control" name="updatePassword" id="passwordUpdate">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="buttonupdate">Update</button>
                    </div>
                </form>
            </div>
            <!-- End Vertically centered Modal-->
        </div>
    </div>
    {{-- End Update --}}

    {{-- Modal Hapus --}}
    <div class="modal fade" id="hapusData" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              Apakah Yakin Menghapus Data ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-sm btn-primary buttonAksiHapus">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Hapus --}}
</section>


@endsection

@section('javascript')
  <script src="{{ asset('admin/') }}/js/custom/karyawan.js"></script>
@endsection