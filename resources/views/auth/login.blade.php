<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gill Labs</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
   
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <!-- <img src="{{asset('assets/images/logo.svg')}}"> -->
                  <h4>Gill Labs</h4>
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3"  method="POST" action="{{ route('login') }}">
                     @csrf

                    <div class="form-group">
                        <input type="email" name="email"  value="{{ old('email') }}"  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                        <p>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </p>
                    
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control form-control-lg"  placeholder="Password">
                        <p>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </p>
                    </div>
                    <div class="mt-3 d-grid gap-2">
                        <button  type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                        <a href="{{ route('password.request') }}" class="auth-link text-primary">Forgot password?</a>
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
   
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
 
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.js')}}"></script>

  </body>
</html>