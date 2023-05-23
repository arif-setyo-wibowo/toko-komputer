@extends('./front.layout.navbar')

@section('content')
<div class="page-lost-password u-s-p-t-80">
    <div class="container">
        <div class="page-lostpassword">
            <h2 class="account-h2 u-s-m-b-20">Forgot Password ?</h2>
            <h6 class="account-h6 u-s-m-b-30">Enter your email or username below and we will send you a link to reset your password.</h6>
            <form action="{{ url()->current() }}" method="POST">
                <div class="w-50">
                    <div class="u-s-m-b-13">
                        <label for="user-name-email">Email
                            <span class="astk">*</span>
                        </label>
                        <input type="text" id="user-name-email" class="text-field" placeholder="Username / Email">
                    </div>
                    <div class="u-s-m-b-13">
                        <button type="submit" class="button button-outline-secondary">Get Reset Link</button>
                    </div>
                </div>
                <div class="page-anchor">
                    <a href="{{ route('login') }}">
                        <i class="fas fa-long-arrow-alt-left u-s-m-r-9"></i>Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Lost-Password-Page /- -->
   
@endsection
