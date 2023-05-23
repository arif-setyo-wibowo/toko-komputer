@extends('./front.layout.navbar')

@section('content')
<!-- Account-Page -->
<div class="page-account u-s-p-t-80">
    <div class="container">
        <div class="row">
            <!-- Register -->
            
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
                <div class="reg-wrapper">
                    <h2 class="account-h2 u-s-m-b-20">Verifikasi Berhasil</h2>
                    <h6 class="account-h6 u-s-m-b-30">Silahkan Melakukan Login di bawah sini</h6>
                        <div class="u-s-m-b-45">
                            <a href="{{ route('login')}}"><button class="button button-primary w-100">Login</button> </a>
                        </div>
                </div>
            </div>
            <!-- Register /- -->
        </div>
    </div>
</div>

@endsection
