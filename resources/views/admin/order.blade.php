@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Order</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">order</li>
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

            <!-- ISI -->
            <div class="tab-content p-2" id="borderedTabContent">
              <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title">List Order</h5>
                <table class="table table-hovered datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID Order</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Status Pesanan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td><i class="bi bi-person-fill "></i> Burhan Adi J</td>
                      <td><i class="bi  bi-envelope-fill " style="color:#4154f1;"></i> Burhan@gmail.com</td>
                      <td><i class="bi  bi-calendar-week-fill" style="color:#198754;"></i> 12-12-2023</td>
                      <td>
                        <button style="font-size :12px; width:100px; background-color:#CDF5E9; border:none ; "
                          type="button" class="btn  btn-primary  rounded-pill">
                          <div style="color:#038E86;"> Selesai
                        </button>
                      </td>
                      <td>
                        <a href="{{ url()->current() }}/invoice">lihat invoice</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td><i class="bi bi-person-fill "></i> Burhan Adi J</td>
                      <td><i class="bi  bi-envelope-fill " style="color:#4154f1;"></i> Burhan@gmail.com</td>
                      <td><i class="bi  bi-calendar-week-fill" style="color:#198754;"></i> 12-12-2023</td>
                      <td>
                        <button style="font-size :12px; width:100px; background-color:#CAC9FB; border:none ; "
                          type="button" class="btn  btn-primary  rounded-pill">
                          <div style="color:#3A36DB;"> Pending
                        </button>
                      </td>
                      <td>
                        <a href="{{ url()->current() }}/invoice">lihat invoice</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td><i class="bi bi-person-fill "></i> Burhan Adi J</td>
                      <td><i class="bi  bi-envelope-fill " style="color:#4154f1;"></i> Burhan@gmail.com</td>
                      <td><i class="bi  bi-calendar-week-fill" style="color:#198754;"></i> 12-12-2023</td>
                      <td>
                        <button style="font-size :12px; width:100px; background-color:#F5CDD9; border:none ; "
                          type="button" class="btn  btn-primary  rounded-pill">
                          <div style="color:#FF5368;"> Batal
                        </button>
                      </td>
                      <td>
                        <a href="{{ url()->current() }}/invoice">lihat invoice</a>
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
                    <div class="row ">
                      <label class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                      </div>
                    </div>
                </form>
              </div>
              <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">
                Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam
                perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum
                iure. Dignissimos fuga tempore dolor.
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
