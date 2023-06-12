@extends('admin.layout.sidebar')
@section('content')

    <div class="pagetitle">
        <h1>Graphic Card
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Graphic Card</li>
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
                            <i class="bi bi-check-circle me-1"></i>
                            {{ $message }}
                        </div>
                    @endif
                    @if ($errors->any())
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
                                    data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Tambah Data</button>
                            </li>
                        </ul>
                        <!-- ISI -->
                        <div class="tab-content p-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <h5 class="card-title">Daftar List Graphic Card</h5>
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">GPU</th>
                                            <th scope="col">Memory Size</th>
                                            <th scope="col">Merk</th>
                                            <th class="text-center" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gpu as $data)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $data->gpuName }}</td>
                                                <td>{{ $data->gpuMemorySize }}</td>
                                                <td>{{ $data->brand->brandName }}</td>
                                                <td class="text-center">
                                                    <li class="nav-item dropdown" style="list-style-type: none;">
                                                        <a style="font-size:150%; color:#4154f1;" class="nav-link nav-icon"
                                                            href="#" data-bs-toggle="dropdown">
                                                            <i class="bi bi-gear"></i>
                                                        </a>
                                                        <!-- End Notification Icon -->
                                                        <ul
                                                            class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                                                            <li style="font-size:20px;">
                                                                <button type="button"
                                                                    class=" btn btn-outline-primary button-update"
                                                                    id="{{ $data->gpuId }}"><i
                                                                        class="bi bi-pen"></i></button>
                                                                <button type="button"
                                                                    class="btn btn-outline-danger button-delete"
                                                                    id="{{ $data->gpuId }}"><i
                                                                        class="bi  bi-trash"></i></button>
                                                                <button type="button"
                                                                    class="btn btn-outline-success button-detail"
                                                                    id="{{ $data->gpuId }}"><i
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

                            </div>
                            <!-- Tambah VGA -->
                            <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h5 class="card-title">Tambah Graphic Card </h5>
                                <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ asset('admin/') }}/img/card.jpg" id="gambarTambah"
                                                    style="height: 220px;" alt="">
                                                <div class="pt-2 col-md-4 text-center">
                                                    <label style="width:100px;">
                                                        <input type="file" name="gpuImage" id="gpuImage"
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
                                            <label for="inputText" class="col-md-4 col-form-label">Nama</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="gpuName" required>
                                            </div>
                                        </div>
                                        <div class="row col">
                                            <label for="inputText" class="col-md-4 col-form-label">Nama Brand</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="brandGpu" required>
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
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Interface</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="gpuInterface" required>
                                            </div>
                                        </div>
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Base Clock</label>
                                            <div class="col-sm-8">
                                                <div class="input-group ">
                                                    <input type="number" class="form-control"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" name="gpuBaseClock"
                                                        required>
                                                    <span class="input-group-text" id="basic-addon2">
                                                        MHz
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Boost Clock</label>
                                            <div class="col-sm-8">
                                                <div class="input-group ">
                                                    <input type="number" class="form-control"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" name="gpuBoostClock"
                                                        required>
                                                    <span class="input-group-text" id="basic-addon2">
                                                        MHz
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Memory Clock
                                                Speed</label>
                                            <div class="col-sm-8">
                                                <div class="input-group ">
                                                    <input type="number" class="form-control"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" name="gpuMemoryClockSpeed"
                                                        required>
                                                    <span class="input-group-text" id="basic-addon2">
                                                        MHz
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Memory Interface</label>
                                            <div class="col-sm-8">
                                                <div class="input-group ">
                                                    <input type="number" class="form-control"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" name="gpuMemoryInterface"
                                                        required>
                                                    <span class="input-group-text" id="basic-addon2">
                                                        Bit
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Memory Size</label>
                                            <div class="col-sm-8">
                                                <div class="input-group ">
                                                    <input type="number" class="form-control"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" name="gpuMemorySize"
                                                        required>
                                                    <span class="input-group-text" id="basic-addon2">
                                                        GB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Memory Type</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="gpuMemoryType" required>
                                            </div>
                                        </div>
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Fitur</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="gpuFeature" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Power
                                                Requipment</label>
                                            <div class="col-sm-8">
                                                <div class="input-group ">
                                                    <input type="number" class="form-control"
                                                        aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                        name="gpuPowerReq" id="gpuPowerReq" required>
                                                    <span class="input-group-text" id="basic-addon2">
                                                        Watt
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Case Support</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" name="gpuCaseSupport" required>
                                                    <option value="Mini-ITX">Mini-ITX</option>
                                                    <option value="Micro-ATX">Micro-ATX</option>
                                                    <option value="ATX">ATX</option>
                                                    <option value="Extended ATX">Extended ATX</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="row col">
                                            <label for="inputText" class="col-md-4 col-form-label">Harga</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="gpuPrice" required>
                                            </div>
                                        </div>
                                        <div class="row col ">
                                            <label for="inputText" class="col-md-4 col-form-label">Garansi</label>
                                            <div class="col-sm-8">
                                                <div class="input-group ">
                                                    <input type="number" class="form-control"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" name="gpuWarranty"
                                                        required>
                                                    <span class="input-group-text" id="basic-addon2">
                                                        Tahun
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col">
                                            <label for="inputText" class="col-md-4 col-form-label">Stok</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="gpuStock" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10" style="text-align: right">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- end tambah  --}}

                        </div>
                        <!-- End Bordered Tabs -->

                        <!-- Modal -->

                        <!-- update -->
                        <div class="modal fade modal-lg" id="updatePower" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Graphic Card</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-3">
                                        <form action="{{ url()->current() }}/update" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="row mb-3">
                                                    <input type="hidden" name="idUpdate" id="idUpdate">
                                                    <input type="hidden" name="imageAwal" id="imageAwal">
                                                    <div class="col-md-8 col-lg-9">
                                                        <img id="updateGambar" style="height: 220px;" alt="">
                                                        <div class="pt-2 col-md-4 text-center">
                                                            <label style="width:100px;">
                                                                <input type="file" name="gpuImageUpdate"
                                                                    id="gpuImageUpdate" style="display:none;">
                                                                <a class="btn btn-primary " style="width: 100px;"><i
                                                                        class="bi bi-upload"></i></a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="row col">
                                                    <label for="inputText" class="col-md-4 col-form-label">Nama</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="gpuNameUpdate"
                                                            id="gpuNameUpdate" required>
                                                    </div>
                                                </div>
                                                <div class="row col">
                                                    <label for="inputText" class="col-md-4 col-form-label">Nama
                                                        Brand</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="gpuBrandUpdate" id="gpuBrandUpdate" required>
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
                                                <div class="row col ">
                                                    <label for="inputText"
                                                        class="col-md-4 col-form-label">Interface</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="gpuInterfaceUpdate" id="gpuInterfaceUpdate" required>
                                                    </div>
                                                </div>
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Base
                                                        Clock</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="gpuBaseClockUpdate" id="gpuBaseClockUpdate" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Boot
                                                        Clock</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="gpuBoostClockUpdate" id="gpuBoostClockUpdate" required>
                                                    </div>
                                                </div>
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Memory Clock
                                                        Speed</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="gpuMemoryClockSpeedUpdate"
                                                            id="gpuMemoryClockSpeedUpdate" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Memory
                                                        Size</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="gpuMemorySizeUpdate" id="gpuMemorySizeUpdate" required>
                                                    </div>
                                                </div>
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Memory
                                                        Interface</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="gpuMemoryInterfaceUpdate" id="gpuMemoryInterfaceUpdate"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Memory
                                                        Type</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="gpuMemoryTypeUpdate" id="gpuMemoryTypeUpdate" required>
                                                    </div>
                                                </div>
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Fitur</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="gpuFeatureUpdate" id="gpuFeatureUpdate" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Power
                                                        Requipment</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group ">
                                                            <input type="number" class="form-control"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2" name="gpuPowerReqUpdate"
                                                                id="gpuPowerReqUpdate" required>
                                                            <span class="input-group-text" id="basic-addon2">
                                                                Watt
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col ">
                                                    <label for="inputText" class="col-md-4 col-form-label">Case
                                                        Support</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-select" name="gpuCaseSupportUpdate"
                                                            id="gpuCaseSupportUpdate" required>
                                                            <option value="Mini-ITX">Mini-ITX</option>
                                                            <option value="Micro-ATX">Micro-ATX</option>
                                                            <option value="ATX">ATX</option>
                                                            <option value="Extended ATX">Extended ATX</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="row col">
                                                    <label for="inputText" class="col-md-4 col-form-label">Harga</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="hargaUpdate"
                                                            id="hargaUpdate" required>
                                                    </div>
                                                </div>
                                                <div class="row col">
                                                    <label for="inputText" class="col-md-4 col-form-label">Garansi</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="garansiUpdate"
                                                            id="garansiUpdate" required>
                                                    </div>
                                                </div>
                                                <div class="row col">
                                                    <label for="inputText" class="col-md-4 col-form-label">Stok</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" name="stokUpdate"
                                                            id="stokUpdate">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="modal-footer mt-4">
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
                        <!-- end update modal -->

                        <!-- detail Modal-->
                        <div class="modal fade" id="detail" tabindex="-1">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Detail Graphic Card</h5>
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
                                                                <img id="gpuImageDetail" class="rounded mb-3 img-fluid">
                                                            </div>

                                                            <div class="col-md-7 tab-pane fade show active profile-overview modal-dialog-scrollable"
                                                                id="profile-overview">


                                                                <h5 class="card-title" id="gpuNameDetail"></h5>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Spesifikasi</th>
                                                                            <th scope="col">Info</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Brand</td>
                                                                            <td id="gpuBrandDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Interface</td>
                                                                            <td id="gpuInterfaceDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Base Clock</td>
                                                                            <td id="gpuBaseClockDetail"></td>
                                                                        </tr>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Boost Clock</td>
                                                                            <td id="gpuBoostClockDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Memory Clock Speed</td>
                                                                            <td id="gpuMemoryClockSpeedDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Memory Size </td>
                                                                            <td id="gpuMemorySizeDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Memory Interface </td>
                                                                            <td id="gpuMemoryInterfaceDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Memory Type </td>
                                                                            <td id="gpuMemoryTypeDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Fitur </td>
                                                                            <td id="gpuFeatureDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Min. Power Requipment </td>
                                                                            <td id="gpuPowerReqDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Case Supp</td>
                                                                            <td id="gpuCaseSupportDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Garansi</td>
                                                                            <td id="gpuWarrantyDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Harga</td>
                                                                            <td id="gpuPriceDetail"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Stok</td>
                                                                            <td id="gpuStockDetail"></td>
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
                                        <!-- End Extra Large Modal-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end detail modal -->

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
    <script src="{{ asset('admin/') }}/js/custom/gpu.js"></script>
@endsection
