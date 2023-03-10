@extends('admin.layout.sidebar')

@section('content')

    <div class="pagetitle">
            <h1>Motherboard
            </h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">admin</a></li>
                <li class="breadcrumb-item active">motherboard</li>
                </ol>
            </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto p-3 ">

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
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Asus PRIME H510M-E (LGA1200, H510, DDR4, USB3.2, SATA3)</td>
                      <td>Socket LGA1200 for 11th Gen Intel® Core™ Processors & 10th Gen Intel® Core™, Pentium® Gold and Celeron® Processors</td>
                      <td>Intel</td>
                      <td class="text-center">
                      <li class="nav-item dropdown" style="list-style-type: none;">
                        <a style="font-size:150%; color:#4154f1;" class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                          <i class="bi bi-gear"></i>
                        </a><!-- End Notification Icon -->
                        <ul class="p-2 dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                          <li style="font-size:20px;">
                              <button type="button" class=" btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateMobo"><i class="bi bi-pen"></i></button>
                              <button type="button" class="btn btn-outline-danger"><i class="bi  bi-trash"></i></button>
                              <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#detailMobo"><i class="bi  bi-info"></i></button>
                          </li>
                          <li></li>
                          <li></li>
                        </ul><!-- End Notification Dropdown Items -->
                      </li><!-- End Notification Nav -->
                      </td>
                    </tr>
                  </tbody>
                </table>

              

              <!-- Tambah Brand -->
              </div>
                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">Tambah Storage </h5>
                  <form action="">

                  <div class="row">
                    <div class="row mb-3">
                       <div class="col-md-8 col-lg-9">
                          <img src="{{asset('admin/')}}/img/card.jpg" style="height: 220px;"alt="">
                            <div class="pt-2 col-md-4 text-center">
                              <label style="width:100px;">
                                 <input type="file" name="shopLogo" id="shopLogo" style="display:none;">
                                  <a class="btn btn-primary " style="width: 100px;"><i class="bi bi-upload"></i></a>
                              </label>
                             </div>
                           </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="row col" >
                          <label for="inputText" class="col-md-3 col-form-label">Nama Socket</label>
                          <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Socket</option>
                                <option value="1">AMD</option>
                                <option value="2">Intel</option>
                              </select>
                          </div>
                      </div>
                      <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Nama</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control">
                          </div>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="row col" >
                          <label for="inputText" class="col-md-3 col-form-label">Brand</label>
                          <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Brand</option>
                                <option value="1">AMD</option>
                                <option value="2">Intel</option>
                              </select>
                          </div>
                      </div>
                      <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Chipset</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control">
                          </div>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <!-- Accordion without outline borders -->
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item" style="background-color:#f8f9fa; border-radius:5px;">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button style="background-color:#dee2e6; padding:20px; border-radius:5px;" class=" accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Rear Panel Parts
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body row mt-3" style="padding-left:30px;" >
                            <!-- rear port -->
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="USB C" disabled>
                                  </div>
                                  <div class="col-sm-4 ">
                                    <input type="number" class=" form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="USB 2.0" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="USB 3.2" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="AT/PS2" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="D-sub" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="S/PDIF" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Ethernet" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Firewire" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Paralel" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Serial" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Audio" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="HDMI" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="DP" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="eSATA" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="DVI" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <!-- end rear port -->
                          </div>
                        </div> 
                      </div>
                    </div><!-- End Accordion without outline borders -->

                    <div class="row mt-4">
                      <h4>Storage</h4>
                      <div class="row col" style="padding-left:50px;">
                        <div class="row col-md-4 ">
                          <div class="col-sm-6 form-check" style="padding-left:10px;">
                             <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                              <input type="text" class=" form-control" value="SATA" disabled>
                          </div>
                          <div class="col-sm-4">
                              <input type="number" class="form-control " value="1">
                          </div>                                   
                        </div>
                        <div class="row col-md-4 ">
                          <div class="col-sm-6 form-check" style="padding-left:10px;">
                             <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                              <input type="text" class=" form-control" value="M.2" disabled>
                          </div>
                          <div class="col-sm-4">
                              <input type="number" class="form-control " value="1">
                          </div>                                   
                        </div>
                      </div>
                    </div>

                    <div class="row mt-4">
                    <div class="row col" >
                        <label for="inputText" class="col-md-3 col-form-label">Memory Type</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option ></option>
                              <option value="1">DDR3</option>
                              <option value="2">DDR4</option>
                              <option value="2">DDR5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Max Memory</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                  <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Form Factor</label>
                        <div class="col-sm-8">
                            <select class="form-select">
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
                            <input type="text" class="form-control">
                        </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputPassword" class="col-sm-4 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                      </div>
                    </div>
                    <div class="row col">
                        <label for="number" class="col-md-3 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                  </div>

                  

                  </form>
                </div>
                
              </div><!-- End Bordered Tabs -->

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
                        <form action="">
                        <div class="row">
                    <div class="row mb-3">
                       <div class="col-md-8 col-lg-9">
                          <img src="{{asset('admin/')}}/img/card.jpg" style="height: 220px;"alt="">
                            <div class="pt-2 col-md-4 text-center">
                              <label style="width:100px;">
                                 <input type="file" name="shopLogo" id="shopLogo" style="display:none;">
                                  <a class="btn btn-primary " style="width: 100px;"><i class="bi bi-upload"></i></a>
                              </label>
                             </div>
                           </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="row col" >
                          <label for="inputText" class="col-md-3 col-form-label">Nama Socket</label>
                          <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Socket</option>
                                <option value="1">AMD</option>
                                <option value="2">Intel</option>
                              </select>
                          </div>
                      </div>
                      <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Nama</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control">
                          </div>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="row col" >
                          <label for="inputText" class="col-md-3 col-form-label">Brand</label>
                          <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Brand</option>
                                <option value="1">AMD</option>
                                <option value="2">Intel</option>
                              </select>
                          </div>
                      </div>
                      <div class="row col">
                          <label for="inputText" class="col-md-3 col-form-label">Chipset</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control">
                          </div>
                      </div>
                    </div>

                    <div class="row mt-4">
                      <!-- Accordion without outline borders -->
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item" style="background-color:#f8f9fa; border-radius:5px;">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button style="background-color:#dee2e6; padding:20px; border-radius:5px;" class=" accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Rear Panel Parts
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body row mt-3" style="padding-left:30px;" >
                            <!-- rear port -->
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="USB C" disabled>
                                  </div>
                                  <div class="col-sm-4 ">
                                    <input type="number" class=" form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="USB 2.0" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="USB 3.2" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="AT/PS2" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="D-sub" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="S/PDIF" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Ethernet" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Firewire" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Paralel" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Serial" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="Audio" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="HDMI" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <div class="row mt-2">
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="DP" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="eSATA" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>
                                <div class="row col-md-4 ">
                                  <div class="col-sm-6 form-check" style="padding-left:10px;">
                                    <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <input type="text" class=" form-control" value="DVI" disabled>
                                  </div>
                                  <div class="col-sm-4">
                                    <input type="number" class="form-control " value="1">
                                  </div>                             
                                </div>           
                            </div>
                            <!-- end rear port -->
                          </div>
                        </div> 
                      </div>
                    </div><!-- End Accordion without outline borders -->

                    <div class="row mt-4">
                      <h4>Storage</h4>
                      <div class="row col" style="padding-left:50px;">
                        <div class="row col-md-4 ">
                          <div class="col-sm-6 form-check" style="padding-left:10px;">
                             <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                              <input type="text" class=" form-control" value="SATA" disabled>
                          </div>
                          <div class="col-sm-4">
                              <input type="number" class="form-control " value="1">
                          </div>                                   
                        </div>
                        <div class="row col-md-4 ">
                          <div class="col-sm-6 form-check" style="padding-left:10px;">
                             <input class="mt-2 form-check-input" type="checkbox" id="gridCheck2" checked>
                              <input type="text" class=" form-control" value="M.2" disabled>
                          </div>
                          <div class="col-sm-4">
                              <input type="number" class="form-control " value="1">
                          </div>                                   
                        </div>
                      </div>
                    </div>

                    <div class="row mt-4">
                    <div class="row col" >
                        <label for="inputText" class="col-md-3 col-form-label">Memory Type</label>
                        <div class="col-sm-8">
                          <select class="form-select" aria-label="Default select example">
                              <option ></option>
                              <option value="1">DDR3</option>
                              <option value="2">DDR4</option>
                              <option value="2">DDR5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Max Memory</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                  <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Form Factor</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row col">
                        <label for="inputText" class="col-md-3 col-form-label">Warranty</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="row col">
                      <label for="inputPassword" class="col-sm-4 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                      </div>
                    </div>
                    <div class="row col">
                        <label for="number" class="col-md-3 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
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
          </div>
          <!-- detail Modal-->
                <div class="modal fade" id="detailMobo" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable" >
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Detail</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body center">
                                <div class="col-xl-12">
                    
                                    <div class="col-xl-12">
                                    <div class="">
                                        <div class="">
                                        <!-- Bordered Tabs -->
                                        <div class="tab-content row ">
                                        <div class="card-body col-md-5 pt-4 d-flex flex-column align-items-center">
                                            <img src="{{asset('admin/')}}/img/card.jpg" alt="Profile" class="rounded mb-3 img-fluid">
                                        </div>

                                        <div class="col-md-7 tab-pane fade show active profile-overview modal-dialog-scrollable" id="profile-overview">
                                            

                                            <h5 class="card-title">KLEVV SSD CRAS C920</h5>
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
                                                <td>KLEVV</td>
                                            </tr>
                                            <tr>
                                              <td>Tipe</td>
                                              <td>SSD</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>2TB</td>
                                            </tr>
                                            <tr>
                                                <td>Max. Sequential Read	</td>
                                                <td>7,000MB/s</td>
                                            </tr>
                                            <tr>
                                                <td>Max. Sequential Write	</td>
                                                <td>6,850MB/s</td>
                                            </tr>
                                            <tr>
                                                <td>Form Factor	</td>
                                                <td>M.2 2280</td>
                                            </tr>
                                            <tr>
                                              <td>Garansi</td>
                                              <td>3 Tahun</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                            <h4 class="card-title">Deskripsi</h4>
                                            <p class="small ">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
                                </div>      
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div><!-- End Extra Large Modal-->
            </div>
          </div>

        </div>
      </div>
    </section>
    @endsection