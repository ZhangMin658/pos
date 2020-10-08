
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

 <title>@yield('title') - Switcher POS</title>
<link rel="shortcut icon" type="image/x-icon" href="/images/logo/favicon.ico">


<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
 <link rel="stylesheet" href="{{ asset('css/login/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login/stylesheet.css') }}" />
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="h-100">
  <div class="container-fluid px-0 h-100">
    <div class="row no-gutters h-100">
      <!-- Welcome Text
      ============================================= -->
      <div class="col-md-6">
        <div class="hero-wrap d-flex align-items-center h-100">
          <div class="hero-mask opacity-8 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('/images/login/image-3.jpg');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row no-gutters">
              <div class="col-10 col-lg-9 mx-auto">
                  <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="index.html" title="Payyed - HTML Template"><img src="/images/login/logo-light.png" alt="Payyed"></a> </div>
              </div>
            </div>
              <div class="row no-gutters my-auto">
                <div class="col-10 col-lg-9 mx-auto">
                  <h1 class="text-11 text-white mb-4">Welcome to World-class payments
 infrastructure</h1>
                  <p class="text-4 text-white line-height-4 mb-5">Login to experience your world of payments!</p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End -->

      <!-- Login Form
      ============================================= -->
      <div class="col-md-6 d-flex align-items-center">
        <div class="container my-4">
          <div class="row">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
              <h3 class="font-weight-400 mb-4">Reset Password</h3>
              @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <p class="mb-0">
                          User not found!
                        </p>
                      </div>
                    @endif
              <form method="POST" action="{{ route('password.update') }}">
                  @csrf
                  <input type="hidden" name="token" value="{{ $token }}">
                  <fieldset class="form-label-group form-group position-relative has-icon-left">
                <div class="form-group">
                  <label for="emailAddress">Email Address</label>
                 <input type="text" class="form-control" name="email" id="user-name" placeholder="example@switcher.com" required>
                </div>
                <div class="row">
                  <div class="col-sm text-right"><a class="btn-link" href="{{route('login')}}">Login to account</a></div>
                </div>
                <button class="btn btn-primary btn-block my-4" type="submit">Recover Password</button>
              </form>
              </fieldset>


            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End -->
    </div>
  </div>
</div>

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<script src="{{ asset('js/login/jquery.min.js') }}"></script>
    <script src="{{ asset('js/login/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/login/theme.js') }}"></script>
</body>
</html>

<!--

@extends('layouts/fullLayoutMaster')

@section('title', 'Reset Password')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
@endsection
@section('content')
<section class="row flexbox-container">
  <div class="col-xl-7 col-10 d-flex justify-content-center">
      <div class="card bg-authentication rounded-0 mb-0 w-100">
          <div class="row m-0">
              <div class="col-lg-6 d-lg-block d-none text-center align-self-center p-0">
                  <img src="{{ asset('images/pages/reset-password.png') }}" alt="branding logo">
              </div>
              <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Reset Password</h4>
                          </div>
                      </div>
                      <p class="px-2">Please enter your new password.</p>
                      <div class="card-content">
                          <div class="card-body pt-1">
                            <form method="POST" action="{{ route('password.update') }}">
                              @csrf
                              <input type="hidden" name="token" value="{{ $token }}">

                                <fieldset class="form-label-group">
                                    <!-- <input type="text" class="form-control" id="user-email" placeholder="Email" required> -->
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    <label for="email">Email</label>
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </fieldset>

                                <fieldset class="form-label-group">
                                    <!-- <input type="password" class="form-control" id="user-password" placeholder="Password" required> -->
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                    <label for="password">Password</label>
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </fieldset>

                                  <fieldset class="form-label-group">
                                    <!-- <input type="password" class="form-control" id="user-confirm-password" placeholder="Confirm Password" required> -->
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    <label for="password-confirm">Confirm Password</label>
                                </fieldset>
                                <div class="row pt-2">
                                    <div class="col-12 col-md-6 mb-1">
                                        <a href="login" class="btn btn-outline-primary btn-block px-0">Go Back to Login</a>
                                    </div>
                                    <div class="col-12 col-md-6 mb-1">
                                        <button type="submit" class="btn btn-primary btn-block px-0">Reset</button>
                                    </div>
                                </div>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection -->
