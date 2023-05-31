
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="X-CSRF-TOKEN" content="{{ csrf_token() }}">

  <title>{{ $title }} - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('admin/') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('admin/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('admin/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('admin/') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('admin/') }}/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('admin/') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('admin/') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('admin/') }}/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin/') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
    * Template Name: NiceAdmin - v2.5.0
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                </div>

                <form class="row g-3 needs-validation" action="{{ url()->current() }}" method="POST">
                @csrf
                  <div class="col-12">
                    @error('email')
                        <small class="text-danger mt-2">
                            {{ $message }}
                        </small>
                    @enderror
                    <label for="yourUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <input type="text" name="employeeEmail" class="form-control" required>
                      <div class="invalid-feedback">Please enter your Email.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    @error('password')
                        <small class="text-danger mt-2">
                            {{ $message }}
                        </small>
                    @enderror
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="employeePassword" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                  </div>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('admin/') }}/js/jquery-3.6.1.js"></script>
  <script src="{{ asset('admin/') }}/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('admin/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('admin/') }}/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('admin/') }}/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('admin/') }}/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('admin/') }}/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('admin/') }}/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('admin/') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('admin/') }}/js/main.js"></script>
  <script type="text/javascript">
    $(".alert-success").delay(1000).slideUp(200, function() {
      $(this).alert('close');
    });
    $(".alert-danger").delay(4000).slideUp(200, function() {
      $(this).alert('close');
    });
  </script>
  @yield('javascript')

</body>

</html>
