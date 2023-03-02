@extends('admin.layout.sidebar')

@section('content')

    <div class="pagetitle">
            <h1>Pelanggan</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">admin</a></li>
                <li class="breadcrumb-item active">pelanggan</li>
                </ol>
            </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">


              <div class="card-body">
                <h5 class="card-title">Pelanggan <span>| daftar</span></h5>

                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Pelanggan</th>
                      <th scope="col">Email</th>
                      <th scope="col">Telp</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Brandon Jacob</td>
                      <td><a href="#" class="text-primary">BrandonJakob@gmail.com</a></td>
                      <td>03r82335</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2147</a></th>
                      <td>Bridie Kessler</td>
                      <td><a href="#" class="text-primary">Blanditiis@gmial.com</a></td>
                      <td>3495345</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2049</a></th>
                      <td>Ashleigh Langosh</td>
                      <td><a href="#" class="text-primary">Atrecusandae@gmail.com</a></td>
                      <td>092348234</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Angus Grady</td>
                      <td><a href="#" class="text-primar">voluptatem@gmail.com</a></td>
                      <td>0928392</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Raheem Lehner</td>
                      <td><a href="#" class="text-primary">Suntsimilique@gmail.com</a></td>
                      <td>3495385</td>
                    </tr>
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>
      </div>
    </section>
    @endsection