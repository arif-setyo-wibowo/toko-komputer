@extends('./front.layout.navbar')

@section('content')
     <!-- Page Introduction Wrapper -->
 <div class="page-style-a">
    <div class="container">
        <div class="page-intro">
            <h2>Account</h2>
            <ul class="bread-crumb">
                <li class="has-separator">
                    <i class="ion ion-md-home"></i>
                    <a href="home.html">Home</a>
                </li>
                <li class="is-marked">
                    <a href="account.html">Account</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Introduction Wrapper /- -->
<!-- Account-Page -->
<div class="page-account u-s-p-t-80">
    <div class="container">
        <!-- Login -->
            @if ($message = session('succes'))
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
        <div class="row">
            <div class="col-lg-6">
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
                            <input type="text" id="user-name-email" class="text-field" name="customerEmail" placeholder="Email">
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
                                <input type="password" id="login-password" class="text-field" name="customerPassword" placeholder="Password">
                        </div>
                        <div class="group-inline u-s-m-b-30">
                            <div class="group-2 text-right">
                                <div class="page-anchor">
                                    <a href="{{ route('reset') }}">
                                        <i class="fas fa-circle-o-notch u-s-m-r-9"></i>Lost your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-b-45">
                            <button class="button button-outline-secondary w-100">Login</button>
                        </div>
                    </form>
                        <a href="{{ route('login.google', ['provider' => 'google']) }}">
                            <button class="button button-primary w-100 mt-1"><img src="" alt="">Login dengan Google </button>
                        </a>
                </div>
            </div>
            <!-- Login /- -->
            <!-- Register -->
            <div class="col-lg-6">
                <div class="reg-wrapper">
                    <h2 class="account-h2 u-s-m-b-20">Register</h2>
                    <h6 class="account-h6 u-s-m-b-30">Registering for this site allows you to access your order status and history.</h6>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        @error('email')
                        <small class="text-danger mt-2">
                            {{ $message }}
                        </small>
                        @enderror
                        <div class="u-s-m-b-30">
                            <label for="user-name">Nama
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="user-name" class="text-field"  name="customerName" placeholder="Name" required>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="telp">Telp
                                <span class="astk">*</span>
                            </label>
                            <input type="number" id="email" class="text-field"  name="customerPhoneNumber" placeholder="Telp" required>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="email">Email
                                <span class="astk">*</span>
                            </label>
                            <input type="email" id="email" class="text-field"  name="customerEmail" placeholder="Email" required>
                        </div>
                        <div class="u-s-m-b-30">
                            <label for="password">Password
                                <span class="astk">*</span>
                            </label>
                            <input type="password" id="password" class="text-field" name="customerPassword" placeholder="Password" required>
                        </div>
                        
                        <div class="u-s-m-b-45">
                            <button type="submit" class="button button-primary w-100">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Register /- -->
        </div>
    </div>
</div>
<!-- Account-Page /- -->

@endsection
