<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Quick Price | @yield("title")</title>
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
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css") }}"
    />
    <!-- Theme style -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/dist/css/AdminLTE.min.css") }}"
    />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/dist/css/skins/_all-skins.min.css") }}"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/dist/plugins/iCheck/flat/blue.css") }}"
    />
    <!--Numbering CSS  -->
    <link
      rel="stylesheet"
      href="{{ asset("assets/numbering/numbering.css") }}"
    />
    <!-- Custom CSS -->
    <style>
      #example1_filter {
        display: none;
      }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
    />
  </head>
  <body class="hold-transition fixed skin-blue sidebar-mini">
    <div class="wrapper">
      @include("companies.layouts.navbar")
      <!-- Left side column. contains the logo and sidebar -->
      @include("companies.layouts.sidebar")

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield("content")
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
      @include("companies.layouts.footer")

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset("assets/vendor/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset("assets/vendor/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- DataTables -->
    <script src="{{ asset("assets/vendor/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset("assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
    <!-- FastClick -->
    <script src="{{ asset("assets/vendor/fastclick/lib/fastclick.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("assets/dist/js/adminlte.min.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ asset("assets/plugins/iCheck/icheck.min.js") }}"></script>
    <!-- Page Script -->
    <script src="{{ asset("assets/time/time.js") }}"></script>
    <script>
      $(function() {
        let oTable = $("#example1").DataTable({
          paging: true,
          lengthChange: false,
          searching: true,
          ordering: false,
          info: true,
          autoWidth: true
        });

        $("#myInputTextFieldForSearch").keyup(function() {
          oTable.search($(this).val()).draw();
        });
      });
    </script>
  </body>
</html>