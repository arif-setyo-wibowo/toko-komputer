@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Sosial Media</h1>
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

        <!-- Recent Sales -->
        <div class="col-12">
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
              {{ $message }}
            </div>
          @endif
          <div class="card recent-sales overflow-auto p-3">

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home"
                  type="button" role="tab" aria-controls="home" aria-selected="true">Daftar</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile"
                  type="button" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</button>
              </li>
            </ul>
            <!-- ISI -->
            <div class="tab-content pt-2" id="borderedTabContent">
              <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title">List Sosial Media</h5>
                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">Sosial Media</th>
                      <th scope="col">Link</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sosmed as $data)
                      <tr>
                        <th scope="row">{{ $data->mediaName }}</th>
                        <td><a href="{{ $data->medialink }}">{{ $data->medialink }}</a></td>
                        <td>
                          <li class="nav-item dropdown" style="list-style-type: none;">
                            <a style="font-size:150%; color:#4154f1;" class="text-center col-sm-3 nav-link nav-icon"
                              href="#" data-bs-toggle="dropdown">
                              <i class="bi bi-gear"></i>
                            </a><!-- End Notification Icon -->
                            <ul class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                              <li style="font-size:20px; padding-left: 25px;" class="row">
                                <button type="button" class="m-1 col-4 btn btn-outline-primary buttonupdate"
                                  id="{{ $data->mediaId }}"><i class="bi bi-pen"></i></button>
                                {{-- <a class="m-1 col-4 btn btn-outline-danger text-danger"
                                  href="/sosmed/delete/{{ $data->mediaId }}"><i class="bi bi-trash"></i></a> --}}
                                <button type="button" class="m-1 col-4 btn btn-outline-danger buttonHapus"
                                  id="{{ $data->mediaId }}"><i class="bi bi-trash"></i></button>
                              </li>
                            </ul><!-- End Notification Dropdown Items -->
                          </li><!-- End Notification Nav -->
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>

                <!-- Tambah Sosmed -->
              </div>
              <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Sosial Media</h5>
                <form action="{{ url()->current() }}" method="POST">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Platform</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nama" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Link Platform</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="link" required>
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
            </div><!-- End Bordered Tabs -->
          </div>
        </div>
      </div><!-- End Recent Sales -->
      <!-- End Default Table Example -->
    </div>
    </div>

    <!-- Modal -->
    <!-- Vertically centered Modal -->
    <div class="modal fade modal-lg" id="updateSosmed" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="{{ url()->current() }}/update" method="post">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title">Update Sosial Media</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">
              <div class="row mb-6 mb-3">
                <label for="inputText" class="col-sm-3 col-form-label">Nama Platform</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Masukkan Nama Platform" id="mediaName"
                    name="mediaName">
                </div>
              </div>
              <div class="row mb-6 mb-3">
                <label for="inputText" class="col-sm-3 col-form-label">Link Platform</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Masukkan Link Platform" id="medialink"
                    name="medialink">
                  <input type="hidden" class="form-control" id="mediaId" name="mediaId">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="buttonupdate">Save changes</button>
            </div>
          </form>
        </div>
        <!-- End Vertically centered Modal-->
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
    </div><!-- End Vertically centered Modal-->
    {{-- End Modal Hapus --}}
  </section>
@endsection

@section('javascript')
  <script src="{{ asset('admin/') }}/js/custom/sosmed.js"></script>
@endsection
