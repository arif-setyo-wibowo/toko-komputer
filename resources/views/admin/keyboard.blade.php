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
          
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
             
            </div>
         
            <div class="alert alert-danger alert-dismissible fade show" role="alert">

         
                <i class="bi bi-exclamation-octagon me-1">  </i><br>
             
            </div>
        
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
                    
                      <tr>
                        <th scope="row">1</th>
                        <td>Asus ROG Strix Scope PBT RX Red</td>
                        <td>Optical Mechanical Gaming Keyboard</td>
                        <td>Asus ROG</td>
                        <td>8</td>
                        <td class="text-center">
                          <li class="nav-item dropdown" style="list-style-type: none;">
                            <a style="font-size:150%; color:#4154f1;" class="nav-link nav-icon" href="#"
                              data-bs-toggle="dropdown">
                              <i class="bi bi-gear"></i>
                            </a><!-- End Notification Icon -->
                            <ul class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                              <li style="font-size:20px;">
                                <button type="button" class=" btn btn-outline-primary "
                                  data-bs-target="#update" data-bs-toggle="modal"><i class="bi bi-pen"></i></button>
                                <button type="button" class="btn btn-outline-danger "
                                  id=""><i class="bi  bi-trash"></i></button>
                                <button type="button" class="btn btn-outline-success "
                                 data-bs-target="#detail" data-bs-toggle="modal"><i class="bi bi-info"></i></button>
                              </li>
                              <li></li>
                              <li></li>
                            </ul>
                            <!-- End Notification Dropdown Items -->
                          </li>
                          <!-- End Notification Nav -->
                        </td>
                      </tr>
                  
                  </tbody>
                </table>
              </div>
              <!-- Tambah Memory -->
              <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Keyboard </h5>
                <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('admin/') }}/img/card.jpg" id="gambarTambah" style="height: 220px;"
                          alt="">
                        <div class="pt-2 col-md-4 text-center">
                          <label style="width:100px;">
                            <input type="file" name="memoryImage" id="memoryImage" style="display:none;" required>
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
                        <input type="text" class="form-control" name="nama" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Tipe Keyboard</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" placeholder="Mechanical/Membran/Office" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Size Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="brandId" required>
                            <option selected>Pilih Size</option>
                              <option value="">TKL </option>
                              <option value="">Full Size </option>
                              <option value="">60 </option>
                              <option value="">64 </option>
                          </select>
                        </div>
                      </div>
                    <div class="row col">
                     <label for="inputText" class="col-md-3 col-form-label">Switch Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="brandId" required>
                            <option selected>Pilih Switch</option>
                              <option value="">Red </option>
                              <option value="">Blue</option>
                              <option value="">Yellow </option>
                              <option value="">Black </option>
                          </select>
                        </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Keyborad Layout</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="volt" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Connection</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="stok" placeholder="USB/Wireless/Bluthod" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="volt" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Stock</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="stok" required>
                      </div>
                    </div>
                  </div>
                   <div class="row mt-4">
                        <div class="row col-md-6">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" style="height: 100px" name="moboDescription" required></textarea>
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
            <div class="modal fade modal-lg" id="update" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <form action="{{ url()->current() }}/update" method="POST" enctype="multipart/form-data">
                 
                    <div class="modal-header">
                      <h5 class="modal-title">Update Memory</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3">
                      <div class="row">
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('admin/') }}/img/card.jpg" id="gambarTambah" style="height: 220px;"
                          alt="">
                        <div class="pt-2 col-md-4 text-center">
                          <label style="width:100px;">
                            <input type="file" name="memoryImage" id="memoryImage" style="display:none;" required>
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
                        <input type="text" class="form-control" name="nama" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Tipe Keyboard</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" placeholder="Mechanical/Membran/Office" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Size Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="brandId" required>
                            <option selected>Pilih Size</option>
                              <option value="">TKL </option>
                              <option value="">Full Size </option>
                              <option value="">60 </option>
                              <option value="">64 </option>
                          </select>
                        </div>
                      </div>
                    <div class="row col">
                     <label for="inputText" class="col-md-3 col-form-label">Switch Keyboard</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="brandId" required>
                            <option selected>Pilih Switch</option>
                              <option value="">Red </option>
                              <option value="">Blue</option>
                              <option value="">Yellow </option>
                              <option value="">Black </option>
                          </select>
                        </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Keyborad Layout</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="volt" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Connection</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="stok" placeholder="USB/Wireless/Bluthod" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="volt" required>
                      </div>
                    </div>
                    <div class="row col">
                      <label for="inputText" class="col-md-3 col-form-label">Stock</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="stok" required>
                      </div>
                    </div>
                  </div>
                   <div class="row mt-4">
                        <div class="row col-md-6">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" style="height: 100px" name="moboDescription" required></textarea>
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
                                <img src="{{ asset('admin/') }}/img/card.jpg" id="gambarTambah" style="height: 220px;"
                          alt="">
                              </div>
                              <div class="col-md-7 tab-pane fade show active profile-overview modal-dialog-scrollable"
                                id="profile-overview">
                                <h5 class="card-title" id="">Asus ROG Strix Scope PBT RX Red</h5>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th scope="col">Spesifikasi</th>
                                      <th scope="col">Info</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Tipe</td>
                                      <td id="merk">ptical Mechanical Gaming Keyboard</td>
                                    </tr>
                                    <tr>
                                      <td>Keyborad Size</td>
                                      <td id="capacity">TKL</td>
                                    </tr>
                                    <tr>
                                      <td>Switch</td>
                                      <td id="type">Blue</td>
                                    </tr>
                                    <tr>
                                      <td>Layout</td>
                                      <td id="speed">Full Layout</td>
                                    </tr>
                                    <tr>
                                      <td>Connection</td>
                                      <td id="latency">USB</td>
                                    </tr>
                                    <tr>
                                      <td>Stok</td>
                                      <td id="stok">12</td>
                                    </tr>
                                    <tr>
                                      <td>Garansi</td>
                                      <td id="garansi">3 year</td>
                                    </tr>
                                    <tr>
                                      <td>Harga</td>
                                      <td id="harga">2,000,000</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <h4 class="card-title">Deskripsi</h4>
                                <p class="small ">Sunt est soluta temporibus accusantium neque nam maiores cumque
                                  temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae
                                  quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
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
  <script src="{{ asset('admin/') }}/js/custom/memory.js"></script>
@endsection