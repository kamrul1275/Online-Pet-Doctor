<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title> Doctor  &amp; Login</title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('DoctorBackend/assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('DoctorBackend/assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('DoctorBackend/assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('DoctorBackend/assets/css/codebase.min.css') }}">

    {{-- toaster msg --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

  </head>
  <body>

    <div id="page-container" class="main-content-boxed">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-gd-dusk">
          <div class="hero-static content content-full bg-body-extra-light">
            <!-- Header -->
            <div class="py-4 px-1 text-center mb-4">
              <a class="link-fx fw-bold" href="index.html">
                <i class="fa fa-fire"></i>
                <span class="fs-4 text-body-color">Online</span><span class="fs-4">Doctor</span>
              </a>
              <h1 class="h3 fw-bold mt-5 mb-2">Doctor Login Page</h1>
              <h2 class="h5 fw-medium text-muted mb-0">Please sign in</h2>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <div class="row justify-content-center px-1">
              <div class="col-sm-8 col-md-6 col-xl-4">
                <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->

                    <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                        @csrf



                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                    <label class="form-label" for="login-username">Email</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="row g-sm mb-4">
                    <div class="col-12 mb-2">
                      <button type="submit" class="btn btn-lg btn-alt-primary w-100 py-3 fw-semibold">
                        Sign In
                      </button>
                    </div>
                    <div class="col-sm-6 mb-1">
                      <a class="btn btn-alt-secondary w-100" href="{{ route('doctor.Register') }}">
                        New Account
                      </a>
                    </div>

                  </div>
                </form>
              </div>
            </div>
            <!-- END Sign In Form -->
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at AdminBackend/assets/_js/main/app.js
    -->
    <script src="{{ asset('DoctorBackend/assets/js/codebase.app.min.js') }}"></script>

    <!-- jQuery (required for Select2 + jQuery Validation plugins) -->
    <script src="{{ asset('DoctorBackend/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('DoctorBackend/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('DoctorBackend/assets/js/pages/op_auth_signin.min.js') }}"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type','info') }}"
     switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
     }
     @endif
    </script>

  </body>
</html>
