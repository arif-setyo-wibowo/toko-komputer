@extends('admin.layout.sidebar') @section('content')

  <div class="pagetitle">
    <h1>Motherboard
    </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">motherboard</li>
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
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home"
                    type="button" role="tab" aria-controls="home" aria-selected="true">Daftar</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile"
                    type="button" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</button>
                </li>
              </ul>
              <!-- ISI -->
              <div class="tab-content p-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                  <h5 class="card-title">List Motherboard</h5>
                  <table class="table table-hover datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Motherboard</th>
                        <th scope="col">Socket</th>
                        <th scope="col">Merk</th>
                        <th class="text-center" scope="col ">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1; ?> @foreach ($mobo as $data)
                        <tr>
                          <th scope="row">{{ $count++ }}</th>
                          <td>{{ $data->moboName }}</td>
                          <td>{{ $data->socket->processorSocketName }}</td>
                          <td>{{ $data->brand->brandName }}</td>
                          <td class="text-center">
                            <li class="nav-item dropdown" style="list-style-type: none;">
                              <a style="font-size:150%; color:#4154f1;" class="nav-link nav-icon" href="#"
                                data-bs-toggle="dropdown">
                                <i class="bi bi-gear"></i>
                              </a>
                              <!-- End Notification Icon -->
                              <ul class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                                <li style="font-size:20px;">
                                  <button type="button" class=" btn btn-outline-primary button-update"
                                    id="{{ $data->moboId }}"><i class="bi bi-pen"></i></button>
                                  <button type="button" class="btn btn-outline-danger button-hapus"
                                    id="{{ $data->moboId }}"><i class="bi  bi-trash"></i></button>
                                  <button type="button" class="btn btn-outline-success button-detail"
                                    id="{{ $data->moboId }}"><i class="bi  bi-info"></i></button>
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
                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                  <h5 class="card-title">Tambah Storage </h5>
                  <form action="{{ url()->current() }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="row mb-3">
                        <div class="col-md-8 col-lg-9">
                          <img src="{{ asset('admin/') }}/img/card.jpg" id="gambarTambah" style="height: 220px;"
                            alt="">
                          <div class="pt-2 col-md-4 text-center">
                            <label style="width:100px;">
                              <input type="file" name="moboImage" id="moboImage" style="display:none;" required>
                              <a class="btn btn-primary " style="width: 100px;" required><i class="bi bi-upload"></i></a>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Nama Socket</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="processorSocketId"
                            required>
                            <option>Pilih Socket</option>
                            @foreach ($processor as $data)
                              <option value="{{ $data->processorSocketId }}">{{ $data->processorSocketName }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Nama</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="moboName" required>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Brand</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example" name="brandId" required>
                            <option selected>Pilih Brand</option>
                            @foreach ($merk as $data)
                              <option value="{{ $data->brandId }}">{{ $data->brandName }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Chipset</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="moboChipset" required>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <!-- Accordion without outline borders -->
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item" style="background-color:#f8f9fa; border-radius:5px;">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button style="background-color:#dee2e6; padding:20px; border-radius:5px;"
                              class=" accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseOne" aria-expanded="false"
                              aria-controls="flush-collapseOne">
                              Rear Panel Parts
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body row mt-3" style="padding-left:30px;">
                              <!-- rear port -->
                              <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="USB C" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="USB C x 1">1</option>
                                      <option value="USB C x 2">2</option>
                                      <option value="USB C x 3">3</option>
                                      <option value="USB C x 4">4</option>
                                      <option value="USB C x 5">5</option>
                                      <option value="USB C x 6">6</option>
                                      <option value="USB C x 7">7</option>
                                      <option value="USB C x 8">8</option>
                                      <option value="USB C x 9">9</option>
                                      <option value="USB C x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="USB 2.0" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="USB 2.0 x 1">1</option>
                                      <option value="USB 2.0 x 2">2</option>
                                      <option value="USB 2.0 x 3">3</option>
                                      <option value="USB 2.0 x 4">4</option>
                                      <option value="USB 2.0 x 5">5</option>
                                      <option value="USB 2.0 x 6">6</option>
                                      <option value="USB 2.0 x 7">7</option>
                                      <option value="USB 2.0 x 8">8</option>
                                      <option value="USB 2.0 x 9">9</option>
                                      <option value="USB 2.0 x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="USB 3.2" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="3.2 x 1">1</option>
                                      <option value="3.2 x 2">2</option>
                                      <option value="3.2 x 3">3</option>
                                      <option value="3.2 x 4">4</option>
                                      <option value="3.2 x 5">5</option>
                                      <option value="3.2 x 6">6</option>
                                      <option value="3.2 x 7">7</option>
                                      <option value="3.2 x 8">8</option>
                                      <option value="3.2 x 9">9</option>
                                      <option value="3.2 x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="AT/PS 2" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="AT/PS 2 x 1">1</option>
                                      <option value="AT/PS 2 x 2">2</option>
                                      <option value="AT/PS 2 x 3">3</option>
                                      <option value="AT/PS 2 x 4">4</option>
                                      <option value="AT/PS 2 x 5">5</option>
                                      <option value="AT/PS 2 x 6">6</option>
                                      <option value="AT/PS 2 x 7">7</option>
                                      <option value="AT/PS 2 x 8">8</option>
                                      <option value="AT/PS 2 x 9">9</option>
                                      <option value="AT/PS 2 x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="D-sub" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="D-sub x 1">1</option>
                                      <option value="D-sub x 2">2</option>
                                      <option value="D-sub x 3">3</option>
                                      <option value="D-sub x 4">4</option>
                                      <option value="D-sub x 5">5</option>
                                      <option value="D-sub x 6">6</option>
                                      <option value="D-sub x 7">7</option>
                                      <option value="D-sub x 8">8</option>
                                      <option value="D-sub x 9">9</option>
                                      <option value="D-sub x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="S/PDIF" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="S/PDIF x 1">1</option>
                                      <option value="S/PDIF x 2">2</option>
                                      <option value="S/PDIF x 3">3</option>
                                      <option value="S/PDIF x 4">4</option>
                                      <option value="S/PDIF x 5">5</option>
                                      <option value="S/PDIF x 6">6</option>
                                      <option value="S/PDIF x 7">7</option>
                                      <option value="S/PDIF x 8">8</option>
                                      <option value="S/PDIF x 9">9</option>
                                      <option value="S/PDIF x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="Ethernet" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="Ethernet x 1">1</option>
                                      <option value="Ethernet x 2">2</option>
                                      <option value="Ethernet x 3">3</option>
                                      <option value="Ethernet x 4">4</option>
                                      <option value="Ethernet x 5">5</option>
                                      <option value="Ethernet x 6">6</option>
                                      <option value="Ethernet x 7">7</option>
                                      <option value="Ethernet x 8">8</option>
                                      <option value="Ethernet x 9">9</option>
                                      <option value="Ethernet x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="Firewire" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="Firewire x 1">1</option>
                                      <option value="Firewire x 2">2</option>
                                      <option value="Firewire x 3">3</option>
                                      <option value="Firewire x 4">4</option>
                                      <option value="Firewire x 5">5</option>
                                      <option value="Firewire x 6">6</option>
                                      <option value="Firewire x 7">7</option>
                                      <option value="Firewire x 8">8</option>
                                      <option value="Firewire x 9">9</option>
                                      <option value="Firewire x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="Paralel" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="Paralel x 1">1</option>
                                      <option value="Paralel x 2">2</option>
                                      <option value="Paralel x 3">3</option>
                                      <option value="Paralel x 4">4</option>
                                      <option value="Paralel x 5">5</option>
                                      <option value="Paralel x 6">6</option>
                                      <option value="Paralel x 7">7</option>
                                      <option value="Paralel x 8">8</option>
                                      <option value="Paralel x 9">9</option>
                                      <option value="Paralel x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="Serial" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="Serial x 1">1</option>
                                      <option value="Serial x 2">2</option>
                                      <option value="Serial x 3">3</option>
                                      <option value="Serial x 4">4</option>
                                      <option value="Serial x 5">5</option>
                                      <option value="Serial x 6">6</option>
                                      <option value="Serial x 7">7</option>
                                      <option value="Serial x 8">8</option>
                                      <option value="Serial x 9">9</option>
                                      <option value="Serial x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="Audio" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="Audio x 1">1</option>
                                      <option value="Audio x 2">2</option>
                                      <option value="Audio x 3">3</option>
                                      <option value="Audio x 4">4</option>
                                      <option value="Audio x 5">5</option>
                                      <option value="Audio x 6">6</option>
                                      <option value="Audio x 7">7</option>
                                      <option value="Audio x 8">8</option>
                                      <option value="Audio x 9">9</option>
                                      <option value="Audio x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="Hdmi" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="Hdmi x 1">1</option>
                                      <option value="Hdmi x 2">2</option>
                                      <option value="Hdmi x 3">3</option>
                                      <option value="Hdmi x 4">4</option>
                                      <option value="Hdmi x 5">5</option>
                                      <option value="Hdmi x 6">6</option>
                                      <option value="Hdmi x 7">7</option>
                                      <option value="Hdmi x 8">8</option>
                                      <option value="Hdmi x 9">9</option>
                                      <option value="Hdmi x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="Display Port" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="Display Port x 1">1</option>
                                      <option value="Display Port x 2">2</option>
                                      <option value="Display Port x 3">3</option>
                                      <option value="Display Port x 4">4</option>
                                      <option value="Display Port x 5">5</option>
                                      <option value="Display Port x 6">6</option>
                                      <option value="Display Port x 7">7</option>
                                      <option value="Display Port x 8">8</option>
                                      <option value="Display Port x 9">9</option>
                                      <option value="Display Port x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="eSata" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="eSata x 1">1</option>
                                      <option value="eSata x 2">2</option>
                                      <option value="eSata x 3">3</option>
                                      <option value="eSata x 4">4</option>
                                      <option value="eSata x 5">5</option>
                                      <option value="eSata x 6">6</option>
                                      <option value="eSata x 7">7</option>
                                      <option value="eSata x 8">8</option>
                                      <option value="eSata x 9">9</option>
                                      <option value="eSata x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input type="text" class=" form-control" value="DVI" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="moboPort[]">
                                      <option value="0" selected></option>
                                      <option value="DVI x 1">1</option>
                                      <option value="DVI x 2">2</option>
                                      <option value="DVI x 3">3</option>
                                      <option value="DVI x 4">4</option>
                                      <option value="DVI x 5">5</option>
                                      <option value="DVI x 6">6</option>
                                      <option value="DVI x 7">7</option>
                                      <option value="DVI x 8">8</option>
                                      <option value="DVI x 9">9</option>
                                      <option value="DVI x 10">10</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <!-- end rear port -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion without outline borders -->

                      <div class="row mt-4">
                        <h4>Storage</h4>
                        <div class="row col" style="padding-left:50px;">
                          <div class="row col-md-4 ">
                            <div class="col-sm-6 form-check" style="padding-left:10px;">
                              <input type="text" class=" form-control" value="SATA" disabled>
                            </div>
                            <div class="col-md-4">
                              <select class="form-select" aria-label="Default select example" name="moboStorageSata"
                                required>
                                <option value="" disabled selected></option>
                                <option value=" SATA x 1">1</option>
                                <option value="SATA x 2">2</option>
                                <option value="SATA x 3">3</option>
                                <option value="SATA x 4">4</option>
                                <option value="SATA x 5">5</option>
                                <option value="SATA x 6">6</option>
                                <option value="SATA x 7">7</option>
                                <option value="SATA x 8">8</option>
                                <option value="SATA x 9">9</option>
                                <option value="SATA x 10">10</option>
                              </select>
                            </div>
                          </div>
                          <div class="row col-md-4 ">
                            <div class="col-sm-6 form-check" style="padding-left:10px;">
                              <input type="text" class=" form-control" value="M.2" disabled>
                            </div>
                            <div class="col-md-4">
                              <select class="form-select" aria-label="Default select example" name="moboStorageM2"
                                required>
                                <option value="" disabled selected></option>
                                <option value="M.2 x 1">1</option>
                                <option value="M.2 x 2">2</option>
                                <option value="M.2 x 3">3</option>
                                <option value="M.2 x 4">4</option>
                                <option value="M.2 x 5">5</option>
                                <option value="M.2 x 6">6</option>
                                <option value="M.2 x 7">7</option>
                                <option value="M.2 x 8">8</option>
                                <option value="M.2 x 9">9</option>
                                <option value="M.2 x 10">10</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row mt-4">
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Memory Type</label>
                          <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" name="moboMemoryType"
                              required>
                              <option value="" disabled selected></option>
                              <option value="DDR3">DDR3</option>
                              <option value="DDR4">DDR4</option>
                              <option value="DDR5">DDR5</option>
                            </select>
                          </div>
                          <label for="inputText" class="col-md-3 mt-3 col-form-label">Memory Slot</label>
                          <div class="col-sm-8 mt-3">
                            <select class="form-select" aria-label="Default select example" name="moboMemorySlot"
                              required>
                              <option value="" disabled selected></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                        </div>
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Max Memory</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="moboMemoryCap" required>
                          </div>
                        </div>
                      </div>

                      <div class="row mt-4">
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Form Factor</label>
                          <div class="col-sm-8">
                            <select class="form-select" name="moboFormFactor" required>
                              <option value="mITX">Mini-ITX</option>
                              <option value="mATX">Micro-ATX</option>
                              <option value="ATX">ATX</option>
                              <option value="eATX">Extended ATX</option>
                            </select>
                          </div>
                        </div>
                        <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Garansi</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="moboWarranty" required>
                          </div>
                        </div>
                      </div>

                      <div class="row mt-4">
                        <div class="row col">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Description</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" name="moboDescription" required></textarea>
                          </div>
                        </div>
                        <div class="row col">
                          <label for="number" class="col-md-3 col-form-label">Harga</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" name="moboPrice" required>
                          </div>

                          <label for="number" class="col-md-3 mt-3 col-form-label">Stok</label>
                          <div class="col-sm-8 mt-3">
                            <input type="number" class="form-control" name="moboStock" required>
                          </div>
                        </div>

                      </div>

                      <div class="row col">
                        <div class="col-12 mt-5" style="text-align:right;">
                          <button type="sumbit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                  </form>
                </div>

              </div>
              <!-- End Tambah Brand -->

              <!-- Modal -->

              <!-- update -->
              <div class="modal fade modal-lg" id="updateMobo" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Update Item</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3">
                      <form action="{{ url()->current() }}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="row mb-3">
                            <div class="col-md-8 col-lg-9">
                              <input type="hidden" name="idUpdate" id="idUpdate" required>
                              <input type="hidden" name="imageAwal" id="imageAwal" required>
                              <img src="" id="updateGambar" style="height: 220px;" alt="">
                              <div class="pt-2 col-md-4 text-center">
                                <label style="width:100px;">
                                  <input type="file" name="imageUpdate" id="imageUpdate" style="display:none;"
                                    required>
                                  <a class="btn btn-primary " style="width: 100px;"><i class="bi bi-upload"></i></a>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="row col">
                            <label for="inputText" class="col-md-3 col-form-label">Nama Socket</label>
                            <div class="col-sm-8">
                              <select class="form-select" aria-label="Default select example" name="socketUpdate"
                                id="socketUpdate" required>
                                <option selected>Pilih Socket</option>
                                @foreach ($processor as $data)
                                  <option value="{{ $data->processorSocketId }}">{{ $data->processorSocketName }}
                                  </option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row col">
                            <label for="inputText" class="col-md-3 col-form-label">Nama</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control"name="namaUpdate" id="namaUpdate" required>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-4">
                          <div class="row col">
                            <label for="inputText" class="col-md-3 col-form-label">Brand</label>
                            <div class="col-sm-8">
                              <select class="form-select" aria-label="Default select example" name="brandUpdate"
                                id="brandUpdate" required>
                                <option selected>Pilih Brand</option>
                                @foreach ($merk as $data)
                                  <option value="{{ $data->brandId }}">{{ $data->brandName }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row col">
                            <label for="inputText" class="col-md-3 col-form-label">Chipset</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="chipsetUpdate" id="chipsetUpdate"
                                required>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-4">
                          <!-- Accordion without outline borders -->
                          <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item" style="background-color:#f8f9fa; border-radius:5px;">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button style="background-color:#dee2e6; padding:20px; border-radius:5px;"
                                  class=" accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapseOne" aria-expanded="false"
                                  aria-controls="flush-collapseOne">
                                  Rear Panel Parts
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body row mt-3" style="padding-left:30px;">
                                  <!-- rear port -->
                                  <div class="row mt-2">
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="USB C" disabled>
                                      </div>
                                      <div class="col-sm-6">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]" id="usbcUpdate">
                                          <option value="0" selected></option>
                                          <option value="USB C x 1">1</option>
                                          <option value="USB C x 2">2</option>
                                          <option value="USB C x 3">3</option>
                                          <option value="USB C x 4">4</option>
                                          <option value="USB C x 5">5</option>
                                          <option value="USB C x 6">6</option>
                                          <option value="USB C x 7">7</option>
                                          <option value="USB C x 8">8</option>
                                          <option value="USB C x 9">9</option>
                                          <option value="USB C x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="USB 2.0" disabled>
                                      </div>
                                      <div class="col-sm-6">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]" id="usb2.0Update">
                                          <option value="0" selected></option>
                                          <option value="USB 2.0 x 1">1</option>
                                          <option value="USB 2.0 x 2">2</option>
                                          <option value="USB 2.0 x 3">3</option>
                                          <option value="USB 2.0 x 4">4</option>
                                          <option value="USB 2.0 x 5">5</option>
                                          <option value="USB 2.0 x 6">6</option>
                                          <option value="USB 2.0 x 7">7</option>
                                          <option value="USB 2.0 x 8">8</option>
                                          <option value="USB 2.0 x 9">9</option>
                                          <option value="USB 2.0 x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="USB 3.2" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="3.2 x 1">1</option>
                                          <option value="3.2 x 2">2</option>
                                          <option value="3.2 x 3">3</option>
                                          <option value="3.2 x 4">4</option>
                                          <option value="3.2 x 5">5</option>
                                          <option value="3.2 x 6">6</option>
                                          <option value="3.2 x 7">7</option>
                                          <option value="3.2 x 8">8</option>
                                          <option value="3.2 x 9">9</option>
                                          <option value="3.2 x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row mt-2">
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="AT/PS 2" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="AT/PS 2 x 1">1</option>
                                          <option value="AT/PS 2 x 2">2</option>
                                          <option value="AT/PS 2 x 3">3</option>
                                          <option value="AT/PS 2 x 4">4</option>
                                          <option value="AT/PS 2 x 5">5</option>
                                          <option value="AT/PS 2 x 6">6</option>
                                          <option value="AT/PS 2 x 7">7</option>
                                          <option value="AT/PS 2 x 8">8</option>
                                          <option value="AT/PS 2 x 9">9</option>
                                          <option value="AT/PS 2 x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="D-sub" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="D-sub x 1">1</option>
                                          <option value="D-sub x 2">2</option>
                                          <option value="D-sub x 3">3</option>
                                          <option value="D-sub x 4">4</option>
                                          <option value="D-sub x 5">5</option>
                                          <option value="D-sub x 6">6</option>
                                          <option value="D-sub x 7">7</option>
                                          <option value="D-sub x 8">8</option>
                                          <option value="D-sub x 9">9</option>
                                          <option value="D-sub x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="S/PDIF" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="S/PDIF x 1">1</option>
                                          <option value="S/PDIF x 2">2</option>
                                          <option value="S/PDIF x 3">3</option>
                                          <option value="S/PDIF x 4">4</option>
                                          <option value="S/PDIF x 5">5</option>
                                          <option value="S/PDIF x 6">6</option>
                                          <option value="S/PDIF x 7">7</option>
                                          <option value="S/PDIF x 8">8</option>
                                          <option value="S/PDIF x 9">9</option>
                                          <option value="S/PDIF x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row mt-2">
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="Ethernet" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="Ethernet x 1">1</option>
                                          <option value="Ethernet x 2">2</option>
                                          <option value="Ethernet x 3">3</option>
                                          <option value="Ethernet x 4">4</option>
                                          <option value="Ethernet x 5">5</option>
                                          <option value="Ethernet x 6">6</option>
                                          <option value="Ethernet x 7">7</option>
                                          <option value="Ethernet x 8">8</option>
                                          <option value="Ethernet x 9">9</option>
                                          <option value="Ethernet x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="Firewire" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="Firewire x 1">1</option>
                                          <option value="Firewire x 2">2</option>
                                          <option value="Firewire x 3">3</option>
                                          <option value="Firewire x 4">4</option>
                                          <option value="Firewire x 5">5</option>
                                          <option value="Firewire x 6">6</option>
                                          <option value="Firewire x 7">7</option>
                                          <option value="Firewire x 8">8</option>
                                          <option value="Firewire x 9">9</option>
                                          <option value="Firewire x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="Paralel" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="Paralel x 1">1</option>
                                          <option value="Paralel x 2">2</option>
                                          <option value="Paralel x 3">3</option>
                                          <option value="Paralel x 4">4</option>
                                          <option value="Paralel x 5">5</option>
                                          <option value="Paralel x 6">6</option>
                                          <option value="Paralel x 7">7</option>
                                          <option value="Paralel x 8">8</option>
                                          <option value="Paralel x 9">9</option>
                                          <option value="Paralel x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row mt-2">
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="Serial" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="Serial x 1">1</option>
                                          <option value="Serial x 2">2</option>
                                          <option value="Serial x 3">3</option>
                                          <option value="Serial x 4">4</option>
                                          <option value="Serial x 5">5</option>
                                          <option value="Serial x 6">6</option>
                                          <option value="Serial x 7">7</option>
                                          <option value="Serial x 8">8</option>
                                          <option value="Serial x 9">9</option>
                                          <option value="Serial x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="Audio" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="Audio x 1">1</option>
                                          <option value="Audio x 2">2</option>
                                          <option value="Audio x 3">3</option>
                                          <option value="Audio x 4">4</option>
                                          <option value="Audio x 5">5</option>
                                          <option value="Audio x 6">6</option>
                                          <option value="Audio x 7">7</option>
                                          <option value="Audio x 8">8</option>
                                          <option value="Audio x 9">9</option>
                                          <option value="Audio x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="Hdmi" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="Hdmi x 1">1</option>
                                          <option value="Hdmi x 2">2</option>
                                          <option value="Hdmi x 3">3</option>
                                          <option value="Hdmi x 4">4</option>
                                          <option value="Hdmi x 5">5</option>
                                          <option value="Hdmi x 6">6</option>
                                          <option value="Hdmi x 7">7</option>
                                          <option value="Hdmi x 8">8</option>
                                          <option value="Hdmi x 9">9</option>
                                          <option value="Hdmi x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row mt-2">
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="Display Port" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="Display Port x 1">1</option>
                                          <option value="Display Port x 2">2</option>
                                          <option value="Display Port x 3">3</option>
                                          <option value="Display Port x 4">4</option>
                                          <option value="Display Port x 5">5</option>
                                          <option value="Display Port x 6">6</option>
                                          <option value="Display Port x 7">7</option>
                                          <option value="Display Port x 8">8</option>
                                          <option value="Display Port x 9">9</option>
                                          <option value="Display Port x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="eSata" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="eSata x 1">1</option>
                                          <option value="eSata x 2">2</option>
                                          <option value="eSata x 3">3</option>
                                          <option value="eSata x 4">4</option>
                                          <option value="eSata x 5">5</option>
                                          <option value="eSata x 6">6</option>
                                          <option value="eSata x 7">7</option>
                                          <option value="eSata x 8">8</option>
                                          <option value="eSata x 9">9</option>
                                          <option value="eSata x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row col-md-4 ">
                                      <div class="col-sm-6 form-check" style="padding-left:10px;">
                                        <input type="text" class=" form-control" value="DVI" disabled>
                                      </div>
                                      <div class="col-sm-4">
                                        <select class="form-select" aria-label="Default select example"
                                          name="moboPort[]">
                                          <option value="0" selected></option>
                                          <option value="DVI x 1">1</option>
                                          <option value="DVI x 2">2</option>
                                          <option value="DVI x 3">3</option>
                                          <option value="DVI x 4">4</option>
                                          <option value="DVI x 5">5</option>
                                          <option value="DVI x 6">6</option>
                                          <option value="DVI x 7">7</option>
                                          <option value="DVI x 8">8</option>
                                          <option value="DVI x 9">9</option>
                                          <option value="DVI x 10">10</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end rear port -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Accordion without outline borders -->

                        <div class="row mt-4">
                          <h4>Storage</h4>
                          <div class="row col" style="padding-left:50px;">
                            <div class="row col-md-4 ">
                              <div class="col-sm-6 form-check" style="padding-left:10px;">
                                <input type="text" class=" form-control" value="SATA" disabled>
                              </div>
                              <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="sataUpdate"
                                  id="sataUpdate" required>
                                  <option value="" disabled selected></option>
                                  <option value="SATA x 1">1</option>
                                  <option value="SATA x 2">2</option>
                                  <option value="SATA x 3">3</option>
                                  <option value="SATA x 4">4</option>
                                  <option value="SATA x 5">5</option>
                                  <option value="SATA x 6">6</option>
                                  <option value="SATA x 7">7</option>
                                  <option value="SATA x 8">8</option>
                                  <option value="SATA x 9">9</option>
                                  <option value="SATA x 10">10</option>
                                </select>
                              </div>
                            </div>
                            <div class="row col-md-4 ">
                              <div class="col-sm-6 form-check" style="padding-left:10px;">
                                <input type="text" class=" form-control" value="M.2" disabled>
                              </div>
                              <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="M2Update"
                                  id="M2Update" required>
                                  <option></option>
                                  <option value="M.2 x 1">1</option>
                                  <option value="M.2 x 2">2</option>
                                  <option value="M.2 x 3">3</option>
                                  <option value="M.2 x 4">4</option>
                                  <option value="M.2 x 5">5</option>
                                  <option value="M.2 x 6">6</option>
                                  <option value="M.2 x 7">7</option>
                                  <option value="M.2 x 8">8</option>
                                  <option value="M.2 x 9">9</option>
                                  <option value="M.2 x 10">10</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-4">
                          <div class="row col">
                            <label for="inputText" class="col-md-3 col-form-label">Memory Type</label>
                            <div class="col-sm-8">
                              <select class="form-select" aria-label="Default select example" name="typeUpdate"
                                id="typeUpdate" required>
                                <option value="" disabled selected></option>
                                <option value="DDR3">DDR3</option>
                                <option value="DDR4">DDR4</option>
                                <option value="DDR5">DDR5</option>
                              </select>
                            </div>
                            <label for="inputText" class="col-md-3 mt-3 col-form-label">Memory Slot</label>
                            <div class="col-sm-8 mt-3">
                              <select class="form-select" aria-label="Default select example" name="slotUpdate"
                                id="slotUpdate" required>
                                <option value="" disabled selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                          </div>
                          <div class="row col">
                            <label for="inputText" class="col-md-3 col-form-label">Max Memory</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="capUpdate" id="capUpdate" required>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-4">
                          <div class="row col">
                            <label for="inputText" class="col-md-3 col-form-label">Form Factor</label>
                            <div class="col-sm-8">
                              <select class="form-select" name="ffUpdate" id="ffUpdate" required>
                                <option value="mITX">Mini-ITX</option>
                                <option value="mATX">Micro-ATX</option>
                                <option value="ATX">ATX</option>
                                <option value="eATX">Extended ATX</option>
                              </select>
                            </div>
                          </div>
                          <div class="row col">
                            <label for="inputText" class="col-md-3 col-form-label">Warranty</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="garansiUpdate" id="garansiUpdate"
                                required>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-4">
                          <div class="row col">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Description</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" style="height: 100px" name="descUpdate" id="descUpdate" required></textarea>
                            </div>
                          </div>
                          <div class="row col">
                            <label for="number" class="col-md-3 col-form-label">Harga</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="hargaUpdate" id="hargaUpdate"
                                required>
                            </div>
                            <label for="number" class="col-md-3 col-form-label">Stok</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="stokUpdate" id="stokUpdate"
                                required>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                      <h5 class="modal-title">Detail</h5>
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
                                <div class="card-body col-md-5 pt-4 d-flex flex-column align-items-center">
                                  <img id="moboGambar" alt="Profile" class="rounded mb-3 img-fluid">
                                </div>
                                <div class="col-md-7 tab-pane fade show active profile-overview modal-dialog-scrollable"
                                  id="profile-overview">
                                  <h5 class="card-title" id="nama"></h5>
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
                                        <td id="merk"></td>
                                      </tr>
                                      <tr>
                                        <td>Chipset</td>
                                        <td id="chipset"></td>
                                      </tr>
                                      <tr>
                                        <td>Socket</td>
                                        <td id="socket"></td>
                                      </tr>
                                      <tr>
                                        <td>Port</td>
                                        <td id="port"></td>
                                      </tr>
                                      </tr>
                                      <tr>
                                        <td>Storage SATA</td>
                                        <td id="storageSata"></td>
                                      </tr>
                                      <tr>
                                        <td>Storage M2</td>
                                        <td id="storageM2"></td>
                                      </tr>
                                      <tr>
                                        <td>Form Factor</td>
                                        <td id="formFactor"></td>
                                      </tr>
                                      <tr>
                                        <td>Tipe Memory</td>
                                        <td id="typeMemory"></td>
                                      </tr>
                                      <tr>
                                        <td>Max Memory</td>
                                        <td id="maxMemory"></td>
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
                                  <h4 class="card-title">Deskripsi</h4>
                                  <p class="small" id="deskripsi"></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Extra Large Modal-->
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
                      <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-sm btn-primary buttonAksiHapus">Hapus</button>
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
  <script src="{{ asset('admin/') }}/js/custom/mobo.js"></script>
@endsection
