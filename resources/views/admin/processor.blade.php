@extends('admin.layout.sidebar') @section('content')

    <div class="pagetitle">
        <h1>Processor
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/administrator">admin</a></li>
                <li class="breadcrumb-item active">Processor</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto p-3 ">
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
                                    <h5 class="card-title">Daftar List Processor</h5>
                                    <table class="table table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Processor</th>
                                                <th scope="col">Socket</th>
                                                <th scope="col">Merk</th>
                                                <th class="text-center" scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cpu as $data)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $data->processorName }}</td>
                                                    <td>{{ $data->socket->processorSocketName }}</td>
                                                    <td>{{ $data->brand->brandName }}</td>
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
                                                                        id="{{ $data->processorId }}"><i
                                                                            class="bi bi-pen"></i></button>
                                                                    <button type="button"
                                                                        class="btn btn-outline-danger button-delete"
                                                                        id="{{ $data->processorId }}"><i
                                                                            class="bi  bi-trash"></i></button>
                                                                    <button type="button"
                                                                        class="btn btn-outline-success button-detail"
                                                                        id="{{ $data->processorId }}"><i
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

                                    <!-- Tambah Brand -->
                                </div>
                                <div class="tab-pane fade" id="bordered-profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <h5 class="card-title">Tambah Processor </h5>
                                    <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="row mb-3">
                                                <div class="col-md-8 col-lg-9">
                                                    <img src="{{ asset('admin/') }}/img/card.jpg" id="gambarTambah"
                                                        style="height: 220px;" alt="">
                                                    <div class="pt-2 col-md-4 text-center">
                                                        <label style="width:100px;">
                                                            <input type="file" name="processorImage" id="processorImage"
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
                                                <label for="inputText" class="col-md-3 col-form-label">Socket</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="socketProcessor" required>
                                                        <option selected value disabled>Pilih Socket</option>
                                                        @foreach ($processor_socket as $data)
                                                            <option value="{{ $data->processorSocketId }}">
                                                                {{ $data->processorSocketName }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">Nama Brand</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="brandProcessor" required>
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
                                                <label for="inputText" class="col-md-3 col-form-label">Processors</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorName"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Generation</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorGen"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Core</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorCore"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Threads</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorThread"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Base Speed</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorBaseSpeed"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Boost Speed</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorBoostSpeed"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Cache</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorCache"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Arsitektur</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorArch"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Integrated
                                                    Graphics</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorIgpu"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Power</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group ">
                                                        <input type="number" class="form-control"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2" name="processorPower"
                                                            required>
                                                        <span class="input-group-text" id="basic-addon2">
                                                            Watt
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Heatsink</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorHeatsink"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col ">
                                                <label for="inputText" class="col-md-3 col-form-label">Harga</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="processorPrice"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="processorWarranty"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row col">
                                                <label for="inputText" class="col-md-3 col-form-label">Stok</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="processorStock"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9" style="text-align: right">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Bordered Tabs -->

                            <!-- Modal -->

                            <!-- update -->
                            <div class="modal fade modal-lg" id="updateCPU" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Processor</h5>
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
                                                                    <input type="file" name="processorImageUpdate"
                                                                        id="processorImageUpdate" style="display:none;">
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
                                                            class="col-md-3 col-form-label">Socket</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                name="socketProcessorUpdate" id="socketProcessorUpdate"
                                                                required>
                                                                <option selected value disabled>Pilih Socket</option>
                                                                @foreach ($processor_socket as $data)
                                                                    <option value="{{ $data->processorSocketId }}">
                                                                        {{ $data->processorSocketName }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row col">
                                                        <label for="inputText" class="col-md-3 col-form-label">Nama
                                                            Brand</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                name="brandProcessorUpdate" id="brandProcessorUpdate"
                                                                required>
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
                                                            class="col-md-3 col-form-label">Processors</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorNameUpdate" id="processorNameUpdate"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Generation</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorGenUpdate" id="processorGenUpdate"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Core</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorCoreUpdate" id="processorCoreUpdate"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Threads</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorThreadUpdate" id="processorThreadUpdate"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="row col ">
                                                        <label for="inputText" class="col-md-3 col-form-label">Base
                                                            Speed</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorBaseSpeedUpdate"
                                                                id="processorBaseSpeedUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col ">
                                                        <label for="inputText" class="col-md-3 col-form-label">Boost
                                                            Speed</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorBoostSpeedUpdate"
                                                                id="processorBoostSpeedUpdate" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Cache</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorCacheUpdate" id="processorCacheUpdate"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Arsitektur</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorArchUpdate" id="processorArchUpdate"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="row col ">
                                                        <label for="inputText" class="col-md-3 col-form-label">Integrated
                                                            Graphics</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorIgpuUpdate" id="processorIgpuUpdate"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Power</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group ">
                                                                <input type="number" class="form-control"
                                                                    aria-label="Recipient's username"
                                                                    aria-describedby="basic-addon2"
                                                                    name="processorPowerUpdate" id="processorPowerUpdate"
                                                                    required>
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
                                                            class="col-md-3 col-form-label">Heatsink</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorHeatsinkUpdate"
                                                                id="processorHeatsinkUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col ">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Harga</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control"
                                                                name="processorPriceUpdate" id="processorPriceUpdate"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="row col">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Garansi</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorWarrantyUpdate"
                                                                id="processorWarrantyUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col">
                                                        <label for="inputText"
                                                            class="col-md-3 col-form-label">Stok</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="processorStockUpdate" id="processorStockUpdate"
                                                                required>
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
                                            <h5 class="modal-title">Detail Processor</h5>
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
                                                                    <h5 class="card-title" id="processorNameDetail"></h5>
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Spesifikasi</th>
                                                                                <th scope="col">Info</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Generation</td>
                                                                                <td id="processorGenDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Brand</td>
                                                                                <td id="processorBrandDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Socket</td>
                                                                                <td id="processorSocketDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Core</td>
                                                                                <td id="processorCoreDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Threads</td>
                                                                                <td id="processorThreadDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Base Speed</td>
                                                                                <td id="processorBaseSpeedDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Max Speed</td>
                                                                                <td id="processorBoostSpeedDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Chace</td>
                                                                                <td id="processorCacheDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Integrated Graphics</td>
                                                                                <td id="processorIgpuDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Power Req</td>
                                                                                <td id="processorPowerDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Heatsink</td>
                                                                                <td id="processorHeatsinkDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garansi</td>
                                                                                <td id="processorWarrantyDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Harga</td>
                                                                                <td id="processorPriceDetail"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Stok</td>
                                                                                <td id="processorStockDetail"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End modal detail-->

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
    <script src="{{ asset('admin/') }}/js/custom/cpu.js"></script>
@endsection
