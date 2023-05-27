@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Keyboard
    </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Keyboard</li>
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
                <h5 class="card-title">List Keyborad</h5>
                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Keyborad</th>
                      <th scope="col">Tipe Keyboard</th>
                      <th scope="col">Merk</th>
                      <th scope="col">Stock</th>
                      <th class="text-center" scope="col ">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($keyboard as $data)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->keyboardName }}</td>
                        <td>{{ $data->keyboardType }}</td>
                        <td>{{ $data->brand->brandName }}</td>
                        <td>{{ $data->keyboardStock }}</td>
                        <td class="text-center">
                          <li class="nav-item dropdown" style="list-style-type: none;">
                            <a style="font-size:150%; color:#4154f1;" class="nav-link nav-icon" href="#"
                              data-bs-toggle="dropdown">
                              <i class="bi bi-gear"></i>
                            </a><!-- End Notification Icon -->
                            <ul class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                              <li style="font-size:20px;">
                                <button type="button" class=" btn btn-outline-primary buttonupdate"
                                  id="{{ $data->keyboardId }}"><i class="bi bi-pen"></i></button>
                                <button type="button" class="btn btn-outline-danger buttonHapus"
                                  id="{{ $data->keyboardId }}"><i class="bi  bi-trash"></i></button>
                                <button type="button" class="btn btn-outline-success button-detail"
                                  id="{{ $data->keyboardId }}"><i class="bi bi-info"></i></button>
                              </li>
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
              <!-- Tambah keyboard -->
              <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Keyboard </h5>
                <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('admin/') }}/img/card.jpg" id="gambarTambah" style="height: 220px;"
                          alt="">
                        <div class="pt-2 col-md-4 text-center">
                          <label style="width:100px;">
                            <input type="file" name="keyboardImage" id="keyboardImage" style="display:none;" required>
                            <a class="btn btn-primary " style="width: 100px;"><i class="bi bi-upload"></i></a>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Nama Keyborad</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keyboardName" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Tipe Keyboard</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keyboardType" placeholder="Mechanical/Membran/Office" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Size Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="keyboardSize" required>
                            <option selected>Pilih Size</option>
                              <option value="TKL">TKL</option>
                              <option value="Full Size">Full Size</option>
                              <option value="60">60</option>
                              <option value="64">64</option>
                          </select>
                        </div>
                      </div>
                    <div class="row col">
                     <label for="inputText" class="col-md-3 col-form-label">Switch Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="keyboardSwitch" required>
                            <option disabled selected value="">Pilih Switch</option>
                              <option value="Red">Red </option>
                              <option value="Blue">Blue</option>
                              <option value="Yellow">Yellow </option>
                              <option value="Black">Black </option>
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Brand Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="brandkeyboard" required>
                            <option disabled selected value="">Pilih Brand</option>
                            @foreach ($merk as $item)
                              <option value="{{ $item->brandId }}">{{ $item->brandName }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Feature</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keyboardFeature" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Keyborad Layout</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keyboardLayout" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Connection</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keyboardConnection" placeholder="USB/Wireless/Bluthod" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keyboardPrice" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Stock</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keyboardStock" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keyboardWarranty" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Description</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" style="height: 100px" name="keyboardDescription" required></textarea>
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
            <div class="modal fade modal-lg" id="updateKeyboard" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <form action="{{ url()->current() }}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                      <h5 class="modal-title">Update keyboard</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3">
                      <div class="row">
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-9">
                        <img src="" style="height: 220px;" id="UpdateGambar">
                          <div class="pt-2 col-md-4 text-center">
                            <label style="width:100px;">
                              <input type="hidden" name="idUpdate" id="idUpdate" required>
                              <input type="hidden" name="imageAwal" id="imageAwal" required>
                              <input type="file" name="imageUpdate" id="imageUpdate" style="display:none;">
                              <a class="btn btn-primary " style="width: 100px;"><i class="bi bi-upload"></i></a>
                            </label>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Nama Keyborad</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="updateName" id="namaUpdate" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Tipe Keyboard</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="updateType" id="typeUpdate" placeholder="Mechanical/Membran/Office" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Size Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="updateSize" id="sizeUpdate" required>
                            <option selected disabled value="">Pilih Size</option>
                              <option value="TKL">TKL </option>
                              <option value="Full Size">Full Size </option>
                              <option value="60">60 </option>
                              <option value="64">64 </option>
                          </select>
                        </div>
                      </div>
                    <div class="row col">
                     <label for="inputText" class="col-md-3 col-form-label">Switch Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="updateSwitch" id="switchUpdate" required>
                            <option selected disabled value="">Pilih Switch</option>
                              <option value="Red">Red </option>
                              <option value="Blue">Blue</option>
                              <option value="Yellow">Yellow </option>
                              <option value="Black">Black </option>
                          </select>
                        </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                    <label for="inputText" class="col-md-3 col-form-label">Brand Keyboard</label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example" name="updateBrand" id="brandUpdate" required>
                        <option disabled selected value="">Pilih Brand</option>
                        @foreach ($merk as $item)
                          <option value="{{ $item->brandId }}">{{ $item->brandName }}</option>
                        @endforeach
                      </select>
                    </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Feature</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="updateFeature" id="featureUpdate" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Keyborad Layout</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="updateLayout" id="layoutUpdate" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Connection</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="updateConnection" id="connectionUpdate" placeholder="USB/Wireless/Bluthod" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="updatePrice" id="hargaUpdate" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Stock</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="updateStock" id="stokUpdate" required>
                      </div>
                    </div>
                  </div>
                   <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="updateWarranty" id="garansiUpdate" required>
                      </div>
                    </div>
                        <div class="row col-md-6">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" style="height: 100px" name="updateDescription" id="descriptionUpdate" required></textarea>
                          </div>
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
                                <img src="" id="gambar" style="height: 220px;" alt="">
                              </div>
                              <div class="col-md-7 tab-pane fade show active profile-overview modal-dialog-scrollable"
                                id="profile-overview">
                                <h5 class="card-title" id="nama"></h5>
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
                                      <td>Keyborad Size</td>
                                      <td id="size"></td>
                                    </tr>
                                    <tr>
                                      <td>Switch</td>
                                      <td id="switc"></td>
                                    </tr>
                                    <tr>
                                      <td>Layout</td>
                                      <td id="layout"></td>
                                    </tr>
                                    <tr>
                                      <td>Connection</td>
                                      <td id="connection"></td>
                                    </tr>
                                    <tr>
                                      <td>Stok</td>
                                      <td id="stok"></td>
                                    </tr>
                                    <tr>
                                      <td>Garansi</td>
                                      <td id="garansi"></td>
                                    </tr>
                                    <tr>
                                      <td>Harga</td>
                                      <td id="harga"></td>
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
                    </div>
                    <!-- End Extra Large Modal-->
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
  <script src="{{ asset('admin/') }}/js/custom/keyboard.js"></script>
@endsection
