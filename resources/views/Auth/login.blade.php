@extends('./front.layout.navbar')

@section('content')

<!-- Account-Page -->
<div class="page-account u-s-p-t-80">
    <div class="container">
        <div class="row">
            <!-- Login --> 
            <div class="col-lg-12">
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
                <div class="login-wrapper">
                    <h2 class="account-h2 u-s-m-b-20">Login</h2>
                    <h6 class="account-h6 u-s-m-b-30">Welcome back! Sign in to your account.</h6>
                    <form action="{{ url()->current() }}" method="POST">
                        @csrf
                        
                        <div class="u-s-m-b-30">
                            @error('email')
                            <small class="text-danger mt-2">
                                {{ $message }}
                            </small>
                            @enderror
                            <label for="user-name-email"> Email
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="user-name-email" class="text-field" name="customerEmail" placeholder=" Email">
                        </div>
                        
                        <div class="u-s-m-b-30">
                            @error('password')
                            <small class="text-danger mt-2">
                                {{ $message }}
                            </small>
                            @enderror
                            <label for="login-password">Password
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="login-password" class="text-field" name="Password"  placeholder="Password">
                        </div>
                        <div class="group-inline u-s-m-b-30">
                            <div class="group-2 text-right">
                                <div class="page-anchor">
                                    <a href="lost-password.html">
                                        <i class="fas fa-circle-o-notch u-s-m-r-9"></i>Lost your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-b-45">
                            <button type="submit"class="button button-outline-secondary w-100">Login</button>
                        </div>
                    </form>
                    <div class="u-s-m-b-45 mt-1">
                        <a href="{{ route('login.google',['provider'=>'google']) }}"><button class="button button-primary w-100">Daftar atau Login dengan Google </button></a>
                        
                    </div>
                </div>
            </div>
            <!-- Login /- -->
        </div>
    </div>
</div>
@endsection
