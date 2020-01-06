<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        
        <style>
            .ft-text{
                font-size: 10px;
                align-items: center;
                font-family: 'Nunito', sans-serif;
            }
            .ft-1, .ft-2{
                text-align: center;
            }
           /*
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            */
        </style>
    </head>
<body class="login-page" style="min-height: 512.391px;">

<div class="login-box">
  <div class="login-logo" >
  <img src="./img/logo.png" alt="LaraStart Logo"
           style="opacity: .9">
  <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
      @csrf
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">

        <!--
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
           /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Sign in') }} <span class="fas fa-sign-in-alt"></span>
            </button>
            <!--<button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
           /.col -->
        </div>
      </form>

    <!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
     /.social-auth-links -->
    
      <!--
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
      -->
    </div>
    <div class="col-md-14">
        <div class="ft-text">
            <br>
            <p class="ft-1"><strong>LaraStart</strong> 2019. All rights reserved.</p>
            <p class="ft-2">We Can Do <strong>IT</strong></p>
        </div>
    </div> <!-- end col-md-12 -->
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery 
<script src="../../plugins/jquery/jquery.min.js"></script>
-->
<!-- Bootstrap 4 
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
<!-- AdminLTE App 
<script src="../../dist/js/adminlte.min.js"></script>
-->
</body>
</html>
