<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Quick Price | Password Reset Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />
    <!-- Bootstrap 3.3.7 -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/vendor/bootstrap/dist/css/bootstrap.min.css") }}"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/vendor/font-awesome/css/font-awesome.min.css") }}"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/vendor/Ionicons/css/ionicons.min.css") }}"
    />
    <!-- Theme style -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/dist/css/AdminLTE.min.css") }}"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/dist/plugins/iCheck/square/blue.css") }}"
    />
    <!-- Parsley CSS -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/parsley/parsley.css") }}"
    />

    <style>
      body {
        height: 0vh !important;
      }
    </style>

    <!-- Google Font -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
    />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Quick Price </b></a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Enter your email to get the reset code.</p>

        <form action="/login" method="post" data-parsley-validate>

          {{ csrf_field() }}

          <div class="form-group">
            @if(session('error'))
              <div class="alert alert-danger alert-dismissible" role="alert">
              <strong>Error!</strong> {{ session('error') }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
          </div>

          <div class="form-group has-feedback">
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Email Address"
              required
            />
            <span
              class="glyphicon glyphicon-envelope form-control-feedback"
            ></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">
                Send Password Reset Code
              </button>
            </div>
          </div>

          <div class="row" style="padding-top: 10px">
            <!-- /.col -->
            <div class="col-xs-12 col-md-6">
              <div class="checkbox icheck">
                <label> <a href="{{ route('login') }}">Back to Login Page</a> </label>
              </div>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="{{ asset("assets/vendor/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset("assets/vendor/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ asset("assets/dist/plugins/iCheck/icheck.min.js") }}"></script>
    <!-- Parsely JS -->
    <script src="{{ asset("assets/parsley/parsley.min.js") }}"></script>
    <script>
      $(function() {
        $("input").iCheck({
          checkboxClass: "icheckbox_square-blue",
          radioClass: "iradio_square-blue",
          increaseArea: "20%" /* optional */
        });
      });
    </script>
  </body>
</html>