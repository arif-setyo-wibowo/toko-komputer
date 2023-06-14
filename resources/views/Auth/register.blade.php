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
                    <div class="reg-wrapper">
                        <h2 class="account-h2 u-s-m-b-20">Register</h2>
                        <h6 class="account-h6 u-s-m-b-30">Registering for this site allows you to access your order status
                            and history.</h6>
                        <form action="{{ url()->current() }}" method="POST">
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
                                <input type="text" id="user-name" class="text-field" name="customerName"
                                    placeholder="Name" required>
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="telp">Telp
                                    <span class="astk">*</span>
                                </label>
                                <input type="number" id="email" class="text-field" name="customerPhoneNumber"
                                    placeholder="Telp" required>
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="email">Email
                                    <span class="astk">*</span>
                                </label>
                                <input type="email" id="email" class="text-field" value="{{ $customerEmail }}"
                                    name="customerEmail" placeholder="Email" required>
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="password">Password
                                    <span class="astk">*</span>
                                </label>
                                <input type="password" id="password" class="text-field" name="customerPassword"
                                    placeholder="Password" required>
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
@endsection
@section('javascript')
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $errors->first() }}'
            });
        </script>
    @endif
    @if (session('succes'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ session('succes') }}',
                showConfirmButton: true, // Tampilkan tombol OK
                timer: 2000
            });
        </script>
    @endif
@endsection
