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
          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

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
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Intel.png</td>
                      <td>Intel</td>
                      <td>Processor</td>
                      <td>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateBrand"><i class="bi bi-pen"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Intel.png</td>
                      <td>Intel</td>
                      <td>Processor</td>
                      <td>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateBrand"><i class="bi bi-pen"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Intel.png</td>
                      <td>Intel</td>
                      <td>Processor</td>
                      <td>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateBrand"><i class="bi bi-pen"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Intel.png</td>
                      <td>Intel</td>
                      <td>Processor</td>
                      <td>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateBrand"><i class="bi bi-pen"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Intel.png</td>
                      <td>Intel</td>
                      <td>Processor</td>
                      <td>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateBrand"><i class="bi bi-pen"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>

              

              <!-- Tambah Sosmed -->
                </div>
                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Brand </h5>
                <form action="">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Platform</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Link Platform</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control ">
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
                <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">
                  Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                </div>
              </div><!-- End Bordered Tabs -->

                <!-- Modal -->
                  <!-- Vertically centered Modal -->
                  <div class="modal fade modal-lg" id="updateBrand" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Update Sosial Media</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-3">
                        <form action="">   
                            <div class="row mb-6 mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Nama Platform</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-6 mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Link Platform</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control ">
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
          </div><!-- End Recent Sales -->
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>
      </div>
    </section>
    @endsection