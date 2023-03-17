@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Storage
    </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">storage</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

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
                <h5 class="card-title">List Storage</h5>
                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Merk</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Size</th>
                      <th scope="col">Tipe</th>
                      <th class="text-center" scope="col ">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $count = 1; ?>
                    @foreach ($storage as $data)
                      <tr>
                        <th scope="row">{{ $count++ }}</th>
                        <td>{{ $data->brand->brandName }}</td>
                        <td>{{ $data->storageName }}</td>
                        <td>{{ $data->storageSize }}</td>
                        <td>{{ $data->storageType }}</td>
                        <td class="text-center">
                          <li class="nav-item dropdown" style="list-style-type: none;">
                            <a style="font-size:150%; color:#4154f1;" class="nav-link nav-icon" href="#"
                              data-bs-toggle="dropdown">
                              <i class="bi bi-gear"></i>
                            </a><!-- End Notification Icon -->
                            <ul class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                              <li style="font-size:20px;">
                                <button type="button" class=" btn btn-outline-primary buttonupdate"
                                  id="{{ $data->storageId }}"><i class="bi bi-pen"></i></button>
                                <button type="button" class="btn btn-outline-danger buttonHapus"
                                  id="{{ $data->storageId }}"><i class="bi bi-trash"></i></button>
                                <button type="button" class="btn btn-outline-success button-detail"
                                  id="{{ $data->storageId }}"><i class="bi bi-info"></i></button>
                              </li>
                              <li></li>
                              <li></li>
                            </ul>
                            <!-- End Notification Dropdown Items -->
                          </li>
                          <!-- End Notification Nav -->
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- Tambah Brand -->
              <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Storage </h5>
                <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('admin/') }}/img/card.jpg" style="height: 220px;" alt=""
                          id="gambarTambah">
                        <div class="pt-2 col-md-4 text-center">
                          <label style="width:100px;">
                            <input type="file" name="storageImage" id="storageImage" style="display:none;">
                            <a class="btn btn-primary " style="width: 100px;"><i class="bi bi-upload"></i></a>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="storageName">
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Nama Brand</label>
                      <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" name="brandId" required>
                          <option disabled selected value="">Pilih Brand</option>
                          @foreach ($merk as $item)
                            <option value="{{ $item->brandId }}">{{ $item->brandName }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Tipe</label>
                      <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" name="storageType" required>
                          <option selected disabled>Pilih Type</option>
                          <option value="SSD">SSD</option>
                          <option value="Harddisk">Harddisk</option>
                        </select>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Size</label>
                      <div class="col-sm-8">
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" aria-label="Recipient's username"
                            aria-describedby="basic-addon2" name="storageSize" required>
                          <span class="input-group-text" id="basic-addon2">
                            <select class="form-select" name="storageSize2" required>
                              <option value="TB" selected>TB</option>
                              <option value="GB">GB </option>
                              <option value="MB">MB </option>
                            </select>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col-md-4">
                      <label for="inputText" class="col-md-2 col-form-label">Read</label>
                      <div class="input-group col-sm-3">
                        <input type="number" class="form-control" aria-label="Recipient's username"
                          aria-describedby="basic-addon2" name="storageReadSpeed" required>
                        <span class="input-group-text" id="basic-addon2">
                          MB/s
                        </span>
                      </div>
                    </div>
                    <div class="row col-md-4">
                      <label for="inputText" class="col-md-2 col-form-label">Write</label>
                      <div class="input-group col-sm-3">
                        <input type="number" class="form-control" aria-label="Recipient's username"
                          aria-describedby="basic-addon2" name="storageWriteSpeed" required>
                        <span class="input-group-text" id="basic-addon2">
                          MB/s
                        </span>
                      </div>
                    </div>
                    <div class="row col-md-4">
                      <label for="inputText" class="col-md-2 col-form-label">RPM</label>
                      <div class="input-group col-sm-3">
                        <input type="number" class="form-control" aria-label="Recipient's username"
                          aria-describedby="basic-addon2" name="storageRpm" required>
                        <span class="input-group-text" id="basic-addon2">
                          RPM
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="row col mt-3">
                      <label for="inputText" class="col-md-3 col-form-label">Ukuran</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="storageDimension" required>
                      </div>
                    </div>
                    <div class="row col mt-3">
                      <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="storageWarranty" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" name="storagePrice">
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Stok</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" name="storageStock">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Bordered Tabs -->

            <!-- Modal -->

            <!-- update -->
            <div class="modal fade modal-lg" id="updateStorage" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <form action="{{ url()->current() }}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                      <h5 class="modal-title">Update Item</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3">
                      <div class="row">
                        <div class="row mb-3">
                          <div class="col-md-8 col-lg-9">
                            <img src="" style="height: 220px;" id="UpdateGambar">
                            <div class="pt-2 col-md-4 text-center">
                              <label style="width:100px;">
                                <input type="file" name="imageUpdate" id="imageUpdate" style="display:none;">
                                <a class="btn btn-primary " style="width: 100px;"><i class="bi bi-upload"></i></a>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="storageName" id="nameUpdate">
                          </div>
                        </div>
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Nama Brand</label>
                          <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" name="brandId"
                              id="brandUpdate" required>
                              <option disabled selected value="">Pilih Brand</option>
                              @foreach ($merk as $item)
                                <option value="{{ $item->brandId }}">{{ $item->brandName }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Tipe</label>
                          <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" name="storageType"
                              id="typeUpdate" required>
                              <option selected disabled value="">Pilih Type</option>
                              <option value="SSD">SSD</option>
                              <option value="Harddisk">Harddisk</option>
                            </select>
                          </div>
                        </div>
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Size</label>
                          <div class="col-sm-8">
                            <div class="input-group mb-3">
                              <input type="number" class="form-control" aria-label="Recipient's username"
                                aria-describedby="basic-addon2" name="storageSize" id="sizeUpdate" required>
                              <span class="input-group-text" id="basic-addon2">
                                <select class="form-select" name="storageSize2" id="sizeUpdate2" required>
                                  <option value="TB">TB</option>
                                  <option value="GB">GB </option>
                                  <option value="MB">MB </option>
                                </select>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="row col-md-4">
                          <label for="inputText" class="col-md-2 col-form-label">Read</label>
                          <div class="input-group col-sm-3">
                            <input type="number" class="form-control" aria-label="Recipient's username"
                              aria-describedby="basic-addon2" name="storageReadSpeed" id="readUpdate" required>
                            <span class="input-group-text" id="basic-addon2">
                              MB/s
                            </span>
                          </div>
                        </div>
                        <div class="row col-md-4">
                          <label for="inputText" class="col-md-2 col-form-label">Write</label>
                          <div class="input-group col-sm-3">
                            <input type="number" class="form-control" aria-label="Recipient's username"
                              aria-describedby="basic-addon2" name="storageWriteSpeed" id="writeUpdate" required>
                            <span class="input-group-text" id="basic-addon2">
                              MB/s
                            </span>
                          </div>
                        </div>
                        <div class="row col-md-4">
                          <label for="inputText" class="col-md-2 col-form-label">RPM</label>
                          <div class="input-group col-sm-3">
                            <input type="number" class="form-control" aria-label="Recipient's username"
                              aria-describedby="basic-addon2" name="storageRpm" id="rpmUpdate" required>
                            <span class="input-group-text" id="basic-addon2">
                              RPM
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <div class="row col mt-3">
                          <label for="inputText" class="col-md-3 col-form-label">Ukuran</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="storageDimension" id="dimensionUpdate"
                              required>
                          </div>
                        </div>
                        <div class="row col mt-3">
                          <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="storageWarranty" id="garansiUpdate"
                              required>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" name="storagePrice" id="hargaUpdate">
                          </div>
                        </div>
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Stok</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" name="storageStock" id="stokUpdate">
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="idUpdate" id="idUpdate" required>
                      <input type="hidden" name="imageAwal" id="imageAwal" required>
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

            <!-- detail Modal-->
            <div class="modal fade" id="detail" tabindex="-1">
              <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body center">
                    <div class="col-xl-12">

                      <div class="col-xl-12">
                        <div class="">
                          <div class="">
                            <!-- Bordered Tabs -->
                            <div class="tab-content row ">
                              <div class="card-body col-md-5 pt-4 d-flex flex-column align-items-center">
                                <img src="" alt="Profile" class="rounded mb-3 img-fluid" id="gambarStorage">
                              </div>

                              <div class="col-md-7 tab-pane fade show active profile-overview modal-dialog-scrollable"
                                id="profile-overview">

                                <h5 class="card-title" id="storageName">KLEVV SSD CRAS C920</h5>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th scope="col">Spesifikasi</th>
                                      <th scope="col">Info</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Merk</td>
                                      <td id="merk"></td>
                                    </tr>
                                    <tr>
                                      <td>Tipe</td>
                                      <td id="type"></td>
                                    </tr>
                                    <tr>
                                      <td>Size</td>
                                      <td id="size"></td>
                                    </tr>
                                    <tr>
                                      <td>Max. Sequential Read </td>
                                      <td id="read"></td>
                                    </tr>
                                    <tr>
                                      <td>Max. Sequential Write </td>
                                      <td id="write"></td>
                                    </tr>
                                    <tr>
                                      <td>RPM </td>
                                      <td id="rpm"></td>
                                    </tr>
                                    <tr>
                                      <td>Form Factor </td>
                                      <td id="dimension"></td>
                                    </tr>
                                    <tr>
                                      <td>Harga </td>
                                      <td id="harga"></td>
                                    </tr>
                                    <tr>
                                      <td>Stok </td>
                                      <td id="stok"></td>
                                    </tr>
                                    <tr>
                                      <td>Garansi</td>
                                      <td id="garansi"></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <h4 class="card-title">Deskripsi</h4>
                                <p class="small" id="deskripsi"></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Extra Large Modal-->
                  </div>
                </div>
              </div>
            </div>
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
  <script src="{{ asset('admin/') }}/js/custom/storage.js"></script>
@endsection
