<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IM-Database</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendor/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/css/vendor.bundle.addons.css')}}">
<link rel="stylesheet" href="{{asset('vendor/iconfonts/font-awesome/css/font-awesome.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="{{ url('/password/email') }}" method="POST" role="form">
                 {{ csrf_field() }}
                <div class="form-group">
                  <label class="label">Forgot Password</label>
                  <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Example@email.com">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('email'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">You did not enter a valid email address</p>
                        </div>
                    @endif
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block"> <i class="fa fa-send-o" ></i> Send Password Reset Link</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Want to go back ?</span>
                  <a href="{{url('/login')}}" class="text-black text-small">Click me</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 ManSim. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendor/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('vendor/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/misc.js')}}"></script>
  <!-- endinject -->
</body>

</html>