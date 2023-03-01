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
          <div class="card">
            <div class="card-body">

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
              <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="card-title">List Sosial Media</h5>
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Sosmed</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Facebook</td>
                    <td>https://www.facebook.com/</td>
                    <td>
                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-pen"></i></button>
                    <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Facebook</td>
                    <td>https://www.facebook.com/</td>
                    <td>
                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-pen"></i></button>
                    <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Facebook</td>
                    <td>https://www.facebook.com/</td>
                    <td>
                    <button type="button" class="btn btn-outline-primary"><i class="bi bi-pen"></i></button>
                    <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
                </div>
                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Sosial Media</h5>
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

            </div>
          </div>

        </div>
      </div>
    </section>
    @endsection