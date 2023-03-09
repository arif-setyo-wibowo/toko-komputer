@extends('admin.layout.sidebar')

@section('content')

    <div class="pagetitle">
            <h1>Memory
            </h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">admin</a></li>
                <li class="breadcrumb-item active">Memory</li>
                </ol>
            </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto p-3 ">

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Daftar</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</button>
                </li>
              </ul>
              <!-- ISI -->
              <div class="tab-content p-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title">List VGA</h5>
                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">RAM</th>
                      <th scope="col">Memory Size</th>
                      <th scope="col">Merk</th>
                      <th class="text-center" scope="col ">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>ADATA DDR4 XPG SPECTRIX D60G PC28800 3600MHz 16GB (2X8GB) Dual Channel - RGB</td>
                      <td>16 GB</td>
                      <td>ADATA</td>
                      <td class="text-center">
                      <li class="nav-item dropdown" style="list-style-type: none;">
                        <a style="font-size:150%; color:#4154f1;" class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                          <i class="bi bi-gear"></i>
                        </a><!-- End Notification Icon -->
                        <ul class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                          <li style="font-size:20px;">
                              <button type="button" class=" btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateBrand"><i class="bi bi-pen"></i></button>
                              <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                              <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#detail"><i class="bi  bi-info"></i></button>
                          </li>
                          <li></li>
                          <li></li>
                        </ul><!-- End Notification Dropdown Items -->
                      </li><!-- End Notification Nav -->
                      </td>
                    </tr>
                  </tbody>
                </table>

              

              <!-- Tambah Brand -->
                </div>
                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Memory </h5>
                <form action="">
                  <div class="row">
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-9">
                        <img src="{{asset('admin/')}}/img/card.jpg" style="height: 220px;"
                          alt="">
                        <div class="pt-2 col-md-4 text-center">
                          <label style="width:100px;">
                            <input type="file" name="shopLogo" id="shopLogo" style="display:none;">
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
                                <input type="text" class="form-control">
                            </div>
                      </div>
                      <div class="row col" >
                            <label for="inputText" class="col-md-3 col-form-label">Nama Brand</label>
                            <div class="col-sm-8">
                              <select class="form-select" aria-label="Default select example">
                                  <option selected>Pilih Brand</option>
                                  <option value="1">AMD</option>
                                  <option value="2">Intel</option>
                                </select>
                            </div>
                      </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col" >
                        <label for="inputText" class="col-md-3 col-form-label">Type</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Type</option>
                              <option value="1">DDR3</option>
                              <option value="2">DDR4</option>
                              <option value="2">DDR5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col" >
                        <label for="inputText" class="col-md-3 col-form-label">Capacity</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Capacity</option>
                              <option value="1">2GB </option>
                              <option value="2">4GB </option>
                              <option value="2">4GB (2X2GB)</option>
                              <option value="2">8GB </option>
                              <option value="2">8GB (2X4GB)</option>
                              <option value="2">16GB </option>
                              <option value="2">16GB (2X8GB)</option>
                              <option value="2">32GB </option>
                              <option value="2">32GB (2X16GB)</option>
                              <option value="2">64GB </option>
                              <option value="2">64GB (2X32GB)</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col" >
                      <label for="inputText" class="col-md-3 col-form-label">Speed</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row col" >
                      <label for="inputText" class="col-md-3 col-form-label">Cas Latency</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="row col" >
                      <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row col" >
                      <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
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
              </div><!-- End Bordered Tabs -->

                <!-- Modal -->

                  <!-- update -->
                  <div class="modal fade modal-lg" id="updateBrand" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Update Item</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-3">
                        <form action="">
                  <div class="row">
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-9">
                        <img src="{{asset('admin/')}}/img/card.jpg" style="height: 220px;"
                          alt="">
                        <div class="pt-2 col-md-4 text-center">
                          <label style="width:100px;">
                            <input type="file" name="shopLogo" id="shopLogo" style="display:none;">
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
                                <input type="text" class="form-control">
                            </div>
                      </div>
                      <div class="row col" >
                            <label for="inputText" class="col-md-3 col-form-label">Nama Brand</label>
                            <div class="col-sm-8">
                              <select class="form-select" aria-label="Default select example">
                                  <option selected>Pilih Brand</option>
                                  <option value="1">AMD</option>
                                  <option value="2">Intel</option>
                                </select>
                            </div>
                      </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col" >
                        <label for="inputText" class="col-md-3 col-form-label">Type</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Type</option>
                              <option value="1">DDR3</option>
                              <option value="2">DDR4</option>
                              <option value="2">DDR5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col" >
                        <label for="inputText" class="col-md-3 col-form-label">Capacity</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Capacity</option>
                              <option value="1">2GB </option>
                              <option value="2">4GB </option>
                              <option value="2">4GB (2X2GB)</option>
                              <option value="2">8GB </option>
                              <option value="2">8GB (2X4GB)</option>
                              <option value="2">16GB </option>
                              <option value="2">16GB (2X8GB)</option>
                              <option value="2">32GB </option>
                              <option value="2">32GB (2X16GB)</option>
                              <option value="2">64GB </option>
                              <option value="2">64GB (2X32GB)</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="row col" >
                      <label for="inputText" class="col-md-3 col-form-label">Speed</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row col" >
                      <label for="inputText" class="col-md-3 col-form-label">Cas Latency</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="row col" >
                      <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row col" >
                      <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
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
          </div>
          <!-- detail Modal-->
                <div class="modal fade" id="detail" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable" >
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
                                            <img src="{{asset('admin/')}}/img/card.jpg" alt="Profile" class="rounded mb-3 img-fluid">
                                        </div>

                                        <div class="col-md-7 tab-pane fade show active profile-overview modal-dialog-scrollable" id="profile-overview">
                                            

                                            <h5 class="card-title">ADATA DDR4 XPG SPECTRIX D60G PC28800 3600MHz 16GB (2X8GB) Dual Channel - RGB</h5>
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
                                                <td>ADATA</td>
                                            </tr>
                                            <tr>
                                              <td>Capacity</td>
                                              <td>16GB (2x8GB)</td>
                                            </tr>
                                            <tr>
                                                <td>Type	</td>
                                                <td>288 Pins</td>
                                            </tr>
                                            <tr>
                                                <td>Speed	</td>
                                                <td>DDR4 3600 (PC4 28800)</td>
                                            </tr>
                                            <tr>
                                                <td>Cas Latency	</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Voltage	1.2 V</td>
                                                <td>1.2 V</td>
                                            </tr>
                                            
                                            <tr>
                                              <td>Garansi</td>
                                              <td>3 Tahun</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                            <h4 class="card-title">Deskripsi</h4>
                                            <p class="small ">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
                                </div>      
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div><!-- End Extra Large Modal-->
            </div>
          </div>

        </div>
      </div>
    </section>
    @endsection