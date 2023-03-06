@extends('admin.layout.sidebar')

@section('content')

    <div class="pagetitle">
            <h1>User</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">admin</a></li>
                <li class="breadcrumb-item active">user</li>
                </ol>
            </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto ">


              <div class="card-body">
                <h5 class="card-title">user <span>| daftar</span></h5>

                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Role</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Brandon Jacob</td>
                      <td><a href="#" class="text-primary">BrandonJakob@gmail.com</a></td>
                      <td>
                        <button style="font-size :12px; width:100px; background-color:#CDF5E9; border:none ; " type="button" class="btn  btn-primary  rounded-pill" >
                            <div style="color:#038E86;"> Manager
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2147</a></th>
                      <td>Bridie Kessler</td>
                      <td><a href="#" class="text-primary">Blanditiis@gmial.com</a></td>
                      <td>
                        <button style="font-size :12px; width:100px; background-color:#CAC9FB; border:none ; " type="button" class="btn  btn-primary  rounded-pill" >
                            <div style="color:#3A36DB;"> Karyawan
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2049</a></th>
                      <td>Ashleigh Langosh</td>
                      <td><a href="#" class="text-primary">Atrecusandae@gmail.com</a></td>
                      <td>
                      <button style="font-size :12px; width:100px; background-color:#CAC9FB; border:none ; " type="button" class="btn  btn-primary  rounded-pill" >
                            <div style="color:#3A36DB;"> Karyawan
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Angus Grady</td>
                      <td><a href="#" class="text-primar">voluptatem@gmail.com</a></td>
                      <td><button style="font-size :12px; width:100px; background-color:#CAC9FB; border:none ; " type="button" class="btn  btn-primary  rounded-pill" >
                            <div style="color:#3A36DB;"> Karyawan
                        </button></td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Raheem Lehner</td>
                      <td><a href="#" class="text-primary">Suntsimilique@gmail.com</a></td>
                      <td>
                        <button style="font-size :12px; width:100px; background-color:#CDF5E9; border:none ; " type="button" class="btn  btn-primary  rounded-pill" >
                            <div style="color:#038E86;"> Manager
                        </button>
                      </td>
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