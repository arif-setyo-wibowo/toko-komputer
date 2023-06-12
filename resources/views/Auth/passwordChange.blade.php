@extends('./front.layout.navbar')

@section('content')
<div class="page-lost-password u-s-p-t-80">
    <div class="container">
        @if ($message = session('success'))
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
        <div class="page-lostpassword">
            <h2 class="account-h2 u-s-m-b-20">Ubah Sandi ?</h2>
            <h6 class="account-h6 u-s-m-b-30">Masukkan Sandi Baru Anda</h6>
            <form action="{{ route('customer.reset.post') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{$token}}">
                <div class="w-50">
                    <div class="u-s-m-b-13">
                        <label for="user-name-email">Password
                            <span class="astk">*</span>
                        </label>
                        <input type="text" id="user-name-email" name="customerPassword" class="text-field" placeholder="Password" required>
                    </div>
                    <div class="u-s-m-b-13">
                        <button type="submit" class="button button-outline-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Lost-Password-Page /- -->
   
@endsection
