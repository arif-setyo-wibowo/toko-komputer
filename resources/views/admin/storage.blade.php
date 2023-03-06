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
                <h5 class="card-title">List Storage</h5>
                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Merk</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Size</th>
                      <th scope="col">Tipe</th>
                      <th class="text-center" scope="col ">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>KLEVV</td>
                      <td>KLEVV SSD CRAS C920</td>
                      <td>2TB</td>
                      <td>SSD</td>
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
                <h5 class="card-title">Tambah Brand </h5>
                <form action="">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Socket</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Merk</label>
                        <div class="col-sm-6">
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Merk</option>
                            <option value="1">AMD</option>
                            <option value="2">Intel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row ">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">
                  Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
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
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Socket</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Merk</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Merk</option>
                                    <option value="1">AMD</option>
                                    <option value="2">Intel</option>
                                    </select>
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
                                            

                                            <h5 class="card-title">KLEVV SSD CRAS C920</h5>
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
                                                <td>KLEVV</td>
                                            </tr>
                                            <tr>
                                              <td>Tipe</td>
                                              <td>SSD</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>2TB</td>
                                            </tr>
                                            <tr>
                                                <td>Max. Sequential Read	</td>
                                                <td>7,000MB/s</td>
                                            </tr>
                                            <tr>
                                                <td>Max. Sequential Write	</td>
                                                <td>6,850MB/s</td>
                                            </tr>
                                            <tr>
                                                <td>Form Factor	</td>
                                                <td>M.2 2280</td>
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