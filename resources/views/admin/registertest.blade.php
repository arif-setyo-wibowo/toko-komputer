@extends('admin.layout.sidebar')

@section('content')

  <div class="pagetitle">
    <h1>Register</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">register</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

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
                    <form action="{{ url()->current() }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-6">
                            <input type="text"  value="{{$customerName}}"  class="form-control" name="customerName" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-6">
                              <input type="number" class="form-control" name="customerPhoneNumber" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6">
                              <input type="email" value="{{$customerEmail}}" class="form-control" name="customerEmail" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-6">
                              <input type="password" class="form-control" name="customerPassword" required>
                            </div>
                        </div>
                        <div class="row ">
                          <label class="col-sm-2 col-form-label"></label>
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Register</button>
                          </div>
                        </div>
                      </form>
              </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection