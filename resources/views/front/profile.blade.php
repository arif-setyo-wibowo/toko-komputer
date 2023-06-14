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
    <div class="page-account u-s-p-t-80 mb-5 pb-5">
        <div class="container row mx-auto">
            <!-- Profile -->
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @if ($message = Session::get('succes'))
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
                <div class="card-body box-profile">
                    <div class="text-center">
                        <i class="fa-regular fa-user" style="font-size:60px;"></i>
                    </div>
                    <h3 class="profile-username text-center mt-3">{{ $user->customerName }}</h3>
                    <p class="text-muted text-center">{{ $user->customerPhoneNumber }}</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right">{{ $user->customerEmail }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Password</b> <a class="float-right">********</a><br>
                        </li>
                    </ul>
                    <a href="#" data-toggle="modal" data-target="#modal-default"
                        class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                    <form action="{{ route('reset_pw') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-block mt-1"><b>Reset Password</b></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
            <!-- Register /- -->
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <form action="{{ url()->current() }}" method="POST">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Profile</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter name" name="nama" value="{{ $user->customerName }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telp</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter no" name="telp" value="{{ $user->customerPhoneNumber }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Enamil" name="email" disabled
                                            value="{{ $user->customerEmail }}">
                                        <input type="hidden" name="id" value="{{ $user->customerId }}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="sumbit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
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
@section('javascript')
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: '{{ session('success') }}',
                    showConfirmButton: true, // Tampilkan tombol OK
                    timer: 2000
                });
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $errors->first() }}'
            });
        </script>
    @endif
@endsection
