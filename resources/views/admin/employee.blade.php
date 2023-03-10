@extends('admin.layout.sidebar')

@section('content')
  <div class="pagetitle">
    <h1>Karyawan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">karyawan</li>
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
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  @foreach ($karyawan as $data)
                    <tr>
                      <th scope="row">{{ $count++ }}</th>
                      <td>{{ $data->employeeName }}</td>
                      <td>{{ $data->employeeEmail }}</td>
                      <td>

                        @if ($data->employeeRole === 'Admin')
                          <button style="font-size :12px; width:100px; background-color:#CDF5E9; border:none ; "
                            type="button" class="btn  btn-primary  rounded-pill">
                            <div style="color:#038E86;"> {{ $data->employeeRole }}
                          </button>
                        @else
                          <button style="font-size :12px; width:100px; background-color:#CAC9FB; border:none ; "
                            type="button" class="btn  btn-primary  rounded-pill">
                            <div style="color:#3A36DB;"> {{ $data->employeeRole }}
                          </button>
                        @endif

                      </td>
                    </tr>
                  @endforeach
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
