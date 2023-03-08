@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Brand</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">brand</li>
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
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home"
                  type="button" role="tab" aria-controls="home" aria-selected="true">Daftar</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile"
                  type="button" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</button>
              </li>
            </ul>
            <!-- ISI -->
            <div class="tab-content p-2" id="borderedTabContent">
              <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title">List Brand</h5>
                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $count = 1 ?>
                    @foreach ($brand as $data)
                    <tr>
                      <th scope="row">{{$count++}}</th>
                      <td><img src="{{ asset('uploads/gambar/brand/' . $data->brandLogo)}}" style="height:120px;"></td>
                      <td>{{$data->brandName}}</td>
                      <td>{{$data->brandCategory}}</td>
                      <td>
                        <li class="nav-item dropdown" style="list-style-type: none;">
                          <a style="font-size:150%; color:#4154f1;" class="text-center col-sm-3 nav-link nav-icon"
                            href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-gear"></i>
                          </a><!-- End Notification Icon -->
                          <ul class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                            <li style="font-size:20px; padding-left: 25px;" class="row">
                              <button type="button" class="m-1 col-4 btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#updateSosmed"><i class="bi bi-pen"></i></button>
                              <button type="button" class="m-1 col-4 btn btn-outline-danger"><i
                                  class="bi  bi-trash"></i></button>
                            </li>
                          </ul><!-- End Notification Dropdown Items -->
                        </li><!-- End Notification Nav -->
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                <!-- Tambah Brand -->
              </div>
              <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Brand </h5>
                <form action="/brand" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Brand</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="brandName" id="brandName">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Kategori Brand</label>
                    <div class="col-sm-6">
                      <select name="brandCategory" id="brandCategory">
                          <option value="Ram">Ram</option>
                          <option value="Ssd">Ssd</option>
                          <option value="Hardisk">Hardisk</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Logo Brand</label>
                    <div class="col-sm-6">
                      <input class="mb-3 form-control" type="file" id="brandLogo" name="brandLogo">
                    </div>
                    <div class="row ">
                      <label class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                      </div>
                    </div>
                </form>
              </div>
            </div><!-- End Bordered Tabs -->

            <!-- Modal -->
            <!-- Vertically centered Modal -->
            <div class="modal fade modal-lg" id="updateBrand" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Update Brand</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-3">
                    <form action="">
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Brand</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kategori Brand</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control ">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Logo Brand</label>
                        <div class="col-sm-6">
                          <input class="mb-3 form-control" type="file" id="formFile">
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- End Vertically centered Modal-->

              </div>
            </div><!-- End Recent Sales -->
            <!-- End Default Table Example -->
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
