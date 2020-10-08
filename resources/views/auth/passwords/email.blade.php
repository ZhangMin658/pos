
<!DOCTYPE html>
<html>
<head>

    <title>Switcher ERP - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/login/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico')}}" type="image/x-icon" >


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
                      <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                      <div class="form-group">
                        <label for="emailAddress">Email Address</label>
                       <input type="text" class="form-control" name="email" id="user-name" placeholder="example@switcher.com" required>
                      </div>
                      <div class="row">
                        <div class="col-sm text-right"><a class="btn-link" href="{{route('login')}}">Login to account</a></div>
                      </div>
                      <button class="btn-md btn-theme btn-block my-4" type="submit">Recover Password</button>
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
