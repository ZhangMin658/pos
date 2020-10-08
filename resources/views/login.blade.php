<!DOCTYPE html>
<html>

<head>

  <title>Switcher ERP - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <!-- External CSS libraries -->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/login/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <!-- Favicon icon -->
  <link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico')}}" type="image/x-icon">


  <link type="text/css" rel="stylesheet" href="{{ asset('css/login/style.css')}}">


</head>

<body id="top">
  <div class="page_loader"></div>
  <!-- Login 14 start -->
  <div class="login-14">
    <div class="container">
      <div class="row login-box">

        <div class="col-lg-5 col-md-12 none-992 align-self-center bg-img">

          <div class="info">
            <div class="logo clearfix">

            </div>

          </div>
        </div>
        <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
          <div class="form-section">
            <div class="logo-2 clearfix">

              <img src="{{ asset('images/login/logo-2.png')}}" alt="logo">

            </div>
            <img src="{{ asset('images/login/logo-2.png')}}" alt="logo">
            <div class="logo clearfix"></div>
            <div class="login-inner-form">

              <form method="POST">
                @csrf

                <p>Fix Error message</p>
                <div class="form-group form-box">
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                  <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="E-Mail / Username / Mobile" value="{{ old('username') }}" required autofocus>


                  <i class="fas fa-user"></i>
                </div>

                <div class="form-group form-box">
                  <input id="password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                  <i class="fas fa-key"></i>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="checkbox clearfix">
                  <div class="form-check checkbox-theme">
                    <fieldset class="checkbox">
                      <div class="vs-checkbox-con vs-checkbox-primary">
                        <input type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                        <span class="">Remember me</span>
                      </div>
                    </fieldset>
                  </div>

                  @if (Route::has('password.request'))
                  <div class="text-right">
                    <a class="card-link" href="{{ route('password.request') }}">
                      Forgot Password?
                    </a>
                  </div>
                  @endif

                </div>
                <div class="form-group mb-0">
                  <button type="submit" class="btn-md btn-theme btn-block">Login</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login 14 end -->

  <!-- External JS libraries -->
  <script src="{{ asset('js/login/jquery-2.2.0.min.js')}}"></script>
  <script src="{{ asset('js/login/bootstrap.min.js')}}"></script>

  <!-- Custom JS Script -->
</body>

</html>
