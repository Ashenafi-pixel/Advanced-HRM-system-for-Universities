<!DOCTYPE html>
<!--
  This is a starter template page. Use this page to start your new project from
  scratch. This page gets rid of all links and provides the needed markup only.
  -->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EM | Empployee Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link href="{{ asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('bower_components/AdminLTE/plugins/datepicker/datepicker3.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
      page. However, you can choose any other skin. Make sure you
      apply the skin class to the body tag so the changes take effect.
      -->
    <link href="{{ asset('bower_components/AdminLTE/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('css/app-template.css') }}" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->

<body class="hold-transition skin-blue sidebar-mini">
    {{-- <div class="wrapper">
        <!-- Main Header -->
        @include('layouts.header')
        <!-- Sidebar -->
        @include('layouts.sidebar')
        @yield('content')
        <!-- /.content-wrapper -->
        <!-- Footer -->
        @include('layouts.footer')
    </div> --}}
    <div class="wrapper">

      
      <!-- Navbar -->
      @section('header')
          @include('layouts.header')
      @endsection
      @yield('header')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      @section('sidebar')
          @include('layouts.sidebar')
      @endsection
      @yield('sidebar')
      <!-- /.content-wrapper -->

      <div class="content-wrapper iframe-mode bg-white" data-widget="iframe" data-auto-dark-mode="true"
          data-loading-screen="750">
          @section('content')
              <h3> No Content</h3>
          @endsection
          <div class="card card-custom m-6 p-6" style="min-height: 85vh;">
              @yield('content')
          </div>
      </div>


      @section('footer')
          @include('layouts.footer')
      @endsection
      @yield('footer')

  </div>
    <!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/fastclick/fastclick.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"
        type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('bower_components/AdminLTE/dist/js/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/AdminLTE/dist/js/demo.js') }}" type="text/javascript"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
    <script>
        $(document).ready(function() {
            //Date picker
            $('#birthDate').datepicker({
                autoclose: true,
                format: 'yyyy/mm/dd'
            });
            $('#hiredDate').datepicker({
                autoclose: true,
                format: 'yyyy/mm/dd'
            });
            $('#from').datepicker({
                autoclose: true,
                format: 'yyyy/mm/dd'
            });
            $('#to').datepicker({
                autoclose: true,
                format: 'yyyy/mm/dd'
            });
        });
    </script>
    <script src="{{ asset('js/site.js') }}"></script>
</body>

</html>
