@extends('admin.layout.sidebar') @section('content')

    <div class="pagetitle">
        <h1>Power Supply
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Power Supply</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- Recent Sales -->
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-1"></i> {{ $message }}
                        </div>
                        @endif @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach ($errors->all() as $error)
                                    <i class="bi bi-exclamation-octagon me-1"> {{ $error }} </i><br>
                                @endforeach
                            </div>
                        @endif
                        <div class="card recent-sales overflow-auto p-3 ">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Daftar</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Tambah Data</button>
                                </li>
                            </ul>
                            <!-- ISI -->
                            <div class="tab-content p-2" id="borderedTabContent">
                                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <h5 class="card-title">Daftar List Power Supply</h5>
                                    <table class="table table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Psu</th>
                                                <th scope="col">Merk</th>
                                                <th scope="col">Power</th>
                                                <th scope="col">PLUS Certification</th>
                                                <th class="text-center" scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($power as $data)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $data->psuName }}</td>
                                                    <td>{{ $data->brand->brandName }}</td>
                                                    <td>{{ $data->psuPower }} W</td>
                                                    <td>{{ $data->psuCertification }}</td>
                                                    <td class="text-center">
                                                        <li class="nav-item dropdown" style="list-style-type: none;">
                                                            <a style="font-size:150%; color:#4154f1;"
                                                                class="nav-link nav-icon" href="#"
                                                                data-bs-toggle="dropdown">
                                                                <i class="bi bi-gear"></i>
                                                            </a>
                                                            <!-- End Notification Icon -->
                                                            <ul
                                                                class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                                                                <li style="font-size:20px;">
                                                                    <button type="button"
                                                                        class=" btn btn-outline-primary button-update"
                                                                        id="{{ $data->psuId }}"><i
                                                                            class="bi bi-pen"></i></button>
                                                                    <button type="button"
                                                                        class="btn btn-outline-danger button-delete"
                                                                        id="{{ $data->psuId }}"><i
                                                                            class="bi  bi-trash"></i></button>
                                                                    <button type="button"
                                                                        class="btn btn-outline-success button-detail"
                                                                        id="{{ $data->psuId }}"><i
                                                                            class="bi  bi-info"></i></button>
                                                                </li>
                                                                <li></li>
                                                                <li></li>
                                                            </ul>
                                                            <!-- End Notification Dropdown Items -->
                                                        </li>
                                                        <!-- End Notification Nav -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>



                                    <!-- Tambah PSU -->
                                </div>
                                <div class="tab-pane fade" id="bordered-profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <h5 class="card-title">Tambah Power Supply </h5>
                                    <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="row mb-3">
                                                <div class="col-md-8 col-lg-9">
                                                    <img src="{{ asset('admin/') }}/img/card.jpg" id="gambarTambah"
                                                        style="height: 220px;" alt="">
                                                    <div class="pt-2 col-md-4 text-center">
                                                        <label style="width:100px;">
                                                            <input type="file" name="psuImage" id="psuImage"
                                                                style="display:none;" required>
                                                            <a class="btn btn-primary " style="width: 100px;"><i
                                                                    class="bi bi-upload"></i></a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">Nama</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="psuName"
                                                        id="psuName" required>
                                                </div>
                                            </div>
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">Nama Brand</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="brandPsu" required>
                                                        <option selected value disabled>Pilih Brand</option>
                                                        @foreach ($merk as $data)
                                                            <option value="{{ $data->brandId }}">{{ $data->brandName }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">80 PLUS
                                                    Certification</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="psuCertification" required>
                                                        <option selected value disabled>Pilih Certification</option>
                                                        <option value="80 PLUS Bronze">80 PLUS Bronze</option>
                                                        <option value="80 PLUS Silver">80 PLUS Silver</option>
                                                        <option value="80 PLUS Gold">80 PLUS Gold</option>
                                                        <option value="80 PLUS Platinum">80 PLUS Platinum</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">Power</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group ">
                                                        <input type="number" class="form-control"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2" name="psuPower" required>
                                                        <span class="input-group-text" id="basic-addon2">
                                                            Watt
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Efficiency</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="psuEfficiency"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Cooling</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="psuCooling"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Modular</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="psuModular"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Connector</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="psuConnector"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="psuPrice" required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group ">
                                                        <input type="number" class="form-control"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2" name="psuWarranty"
                                                            required>
                                                        <span class="input-group-text" id="basic-addon2">
                                                            Tahun
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">Stok</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="psuStock" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9" style="text-align: right">
                                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Bordered Tabs -->

                            <!-- Modal -->

                            <!-- update -->
                            <div class="modal fade modal-lg" id="updatePower" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Power Supply</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-3">
                                            <form action="{{ url()->current() }}/update" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="row mb-3">
                                                        <div class="col-md-8 col-lg-9">
                                                            <input type="hidden" name="idUpdate" id="idUpdate"
                                                                style="display:none;">
                                                            <input type="hidden" name="imageAwal" id="imageAwal"
                                                                style="display:none;">
                                                            <img id="updateGambar" style="height: 220px;" alt="">
                                                            <div class="pt-2 col-md-4 text-center">
                                                                <label style="width:100px;">
                                                                    <input type="file" name="imageUpdate"
                                                                        id="imageUpdate" style="display:none;">
                                                                    <a class="btn btn-primary " style="width: 100px;"><i
                                                                            class="bi bi-upload"></i></a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="row col">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Nama</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="namaUpdate"
                                                                id="namaUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col">
                                                        <label for="inputText" class="col-md-4 col-form-label">Nama
                                                            Brand</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-select"
                                                                aria-label="Default select example" name="brandUpdate"
                                                                id="brandUpdate" required>
                                                                <option selected value disabled>Pilih Brand</option>
                                                                @foreach ($merk as $data)
                                                                    <option value="{{ $data->brandId }}">
                                                                        {{ $data->brandName }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="row col">
                                                        <label for="inputText" class="col-md-4 col-form-label">80 PLUS
                                                            Certification</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                name="certificationUpdate" id="certificationUpdate"
                                                                required>
                                                                <option selected value disabled>Pilih Certification</option>
                                                                <option value="80 PLUS Bronze">80 PLUS Bronze</option>
                                                                <option value="80 PLUS Silver">80 PLUS Silver</option>
                                                                <option value="80 PLUS Gold">80 PLUS Gold</option>
                                                                <option value="80 PLUS Platinum">80 PLUS Platinum</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row col">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Power</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group ">
                                                                <input type="number" class="form-control"
                                                                    aria-label="Recipient's username"
                                                                    aria-describedby="basic-addon2" name="powerUpdate"
                                                                    id="powerUpdate" required>
                                                                <span class="input-group-text" id="basic-addon2">
                                                                    Watt
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Efficiency</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                name="efficiencyUpdate" id="efficiencyUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Cooling</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                name="coolingUpdate" id="coolingUpdate" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Modular</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                name="modularUpdate" id="modularUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Connector</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                name="connectorUpdate" id="connectorUpdate">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="row col">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Harga</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="hargaUpdate"
                                                                id="hargaUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Garansi</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control"
                                                                name="garansiUpdate" id="garansiUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col">
                                                        <label for="inputText"
                                                            class="col-md-4 col-form-label">Stok</label>
                                                        <div class="col-sm-12">
                                                            <input type="number" class="form-control" name="stokUpdate"
                                                                id="stokUpdate">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer mt-4 ">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Vertically centered Modal-->
                                </div>
                            </div>

                            <!-- detail Modal-->
                            <div class="modal fade" id="detail" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Power Supply</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body center">
                                            <div class="col-xl-12">
                                                <div class="col-xl-12">
                                                    <div class="">
                                                        <div class="">
                                                            <!-- Bordered Tabs -->
                                                            <div class="tab-content row ">
                                                                <div
                                                                    class="card-body col-md-5 pt-4 d-flex flex-column align-items-center">
                                                                    <img id="gambarDetail" class="rounded mb-3 img-fluid">
                                                                </div>

                                                                <div class="col-md-7 tab-pane fade show active profile-overview modal-dialog-scrollable"
                                                                    id="profile-overview">
                                                                    <h5 class="card-title" id="namaDetail"></h5>
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
                                                                                <td id="brandDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Wattage</td>
                                                                                <td id="powerDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>80 PLUS Certification </td>
                                                                                <td id="certificationDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Max. Efficiency </td>
                                                                                <td id="efficiencyDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Cooling </td>
                                                                                <td id="coolingDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Modularity </td>
                                                                                <td id="modularDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Connector</td>
                                                                                <td id="connectorDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garansi</td>
                                                                                <td id="garansi"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Stok</td>
                                                                                <td id="stok"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Harga</td>
                                                                                <td id="harga"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end detail Modal-->

                            {{-- Modal Hapus --}}
                            <div class="modal fade" id="hapusData" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            Apakah Yakin Menghapus Data ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="button"
                                                class="btn btn-sm btn-primary buttonAksiHapus">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Modal Hapus --}}
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script src="{{ asset('admin/') }}/js/custom/psu.js"></script>
@endsection
