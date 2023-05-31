@extends('admin.layout.sidebar')

@section('content')
    <div class="pagetitle">
        <h1>Pelanggan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Pelanggan</li>
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
                                        <th scope="col">#</th>
                                        <th scope="col">Pelanggan</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelanggan as $data)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $data->customerName }}</td>
                                            <td class="text-primary">{{ $data->customerEmail }}</td>
                                            <td>{{ $data->customerPhoneNumber }}</td>
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
