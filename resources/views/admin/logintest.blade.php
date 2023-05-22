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
          @if ($message = session('message'))
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
                        @error('email')
                        <small class="text-danger mt-2">
                            {{ $message }}
                        </small>
                        @enderror
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Email Socket</label>
                            <div class="col-sm-6">
                              <input type="email" class="form-control" name="customerEmail" required>
                            </div>
                        </div>
                        @error('password')
                        <small class="text-danger mt-2">
                            {{ $message }}
                        </small>
                        @enderror                        
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Password Socket</label>
                            <div class="col-sm-6">
                              <input type="password" class="form-control" name="customerPassword" required>
                            </div>
                        </div>
                        <div class="row ">
                          <label class="col-sm-2 col-form-label"></label>
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Login</button>
                          </div>
                        </div>
                      </form>
              </div>
              <a href="{{ route('login.google',['provider'=>'google']) }}">Login Google</a>
              <p>Belum Punya Akun? <a href="/administrator/registertest"><button class="btn btn-primary">Register</button></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
