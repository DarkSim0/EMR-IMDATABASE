<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IM-Database</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendor/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/css/vendor.bundle.addons.css')}}">
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
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <form action="{{url('/register')}}" method="POST" role="form">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="fname" value="{{old('fname')}}" placeholder="First Name" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('fname'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{ $errors->first('fname') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('mname') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="mname" value="{{old('mname')}}" placeholder="Middle Initial" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('mname'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{ $errors->first('mname') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Last Name" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('lname'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{ $errors->first('lname') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('userlevel') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="userlevel" value="{{old('userlevel')}}" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('userlevel'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{ $errors->first('userlevel') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('doctorID') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="doctorID" value="{{old('doctorID')}}" placeholder="Name" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('doctorID'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{ $errors->first('doctorID') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('addedBy') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="addedBy" value="{{Auth::user()->lname}}" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('addedBy'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{ $errors->first('addedBy') }}</p>
                        </div>
                    @endif
                </div>
                 <div class="form-group{{ $errors->has('uname') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="uname" value="{{old('uname')}}" placeholder="Username" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('uname'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">The username field is required.</p>
                        </div>
                    @endif
                </div>
                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" autocomplete="off" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('email'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('password'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                  <div class="input-group">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                    @if ($errors->has('password_confirmation'))
                        <div style="margin-top: 20px;">
                            <p class="text-danger">{{$errors->first('password_confirmation') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                    <center> <small class="font-weight-bold">Access Privilege binds one to Confidentiality Agreement and covered by Data Privacy Act of 2012</small></center>
                   
                </div>
              
                <div class="form-group">
                  <button class="btn btn-inverse-primary submit-btn btn-block">Register</button>
                </div>
              
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="{{url('login')}}" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
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