@extends('front.layout.navbar')

@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container"> 
            <div class="page-intro">
                <h2>Profile</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="/">Home</a>
                    </li>
                    <li class="is-marked">
                        <a>Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Account-Page -->
<div class="page-account u-s-p-t-80">
    <div class="container row">
            <!-- Profile -->
            <div class="col md 6"></div>
            <div class="col-lg-6">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <i class="fa-regular fa-user" style="font-size:60px;"></i>
                    </div>
                    <h3 class="profile-username text-center mt-3">Egiofani Reendio</h3>
                    <p class="text-muted text-center">08988499383</p>
                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <b>Email</b> <a class="float-right">Egiofani@gmail.com</a>
                    </li>
                    <li class="list-group-item">
                    <b>Password</b> <a class="float-right">******</a><br>
                    <a class="float-right" style="font-size:13px;" href="">reset password</a>
                    </li>
                    
                    </ul>
                    
                    <a href="#" data-toggle="modal" data-target="#modal-default" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                    </div>
            </div>
            <!-- Register /- -->
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Profile</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="Egiofani">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telp</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter no" value="08399387474">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telp</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Enamil" value="Egio@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" disabled class="form-control " id="exampleInputPassword1" placeholder="Password" value="******">
                                        <a class="ml-2" style="font-size:13px;" href="">reset password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div>
</div>
<!-- Account-Page /- -->
    
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('front/') }}/css/adminlte.css">
@endsection
