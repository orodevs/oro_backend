<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    {{--    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>--}}
    {{--    <meta content="Pichforest" name="author"/>--}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('public/assets/images/favicon.ico') }}">

    <!-- plugin css -->
    <link href="{{ url('public/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="{{ url('public/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ url('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ url('public/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>
    @stack('third_party_stylesheets')

    @stack('page_css')
</head>
<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">
    <!-- ========== top header start ========== -->
    @include('layouts.header')
    <!-- ========== top header end ========== -->


    <!-- ========== Left Sidebar Start ========== -->
    @include('layouts.sidebar')
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Page Name</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layout</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> &copy;
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">


                            <a href="{{ url('/') }}">{{ env('APP_NAME') }}.</a>.</strong> All rights

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<div class="rightbar-overlay"></div>
<!-- end main content-->


<!-- JAVASCRIPT  & Scripts-->
@include('layouts.js')

</body>
</html>
{{--<body class="hold-transition sidebar-mini layout-fixed">--}}
{{--<div class="wrapper">--}}
{{--    <!-- Main Header -->--}}
{{--    <nav class="main-header navbar navbar-expand navbar-white navbar-light">--}}
{{--        <!-- Left navbar links -->--}}
{{--        <ul class="navbar-nav">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>--}}
{{--            </li>--}}
{{--        </ul>--}}

{{--        <ul class="navbar-nav ml-auto">--}}
{{--            <li class="nav-item dropdown user-menu">--}}
{{--                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                    <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"--}}
{{--                         class="user-image img-circle elevation-2" alt="User Image">--}}
{{--                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <!-- User image -->--}}
{{--                    <li class="user-header bg-primary">--}}
{{--                        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"--}}
{{--                             class="img-circle elevation-2"--}}
{{--                             alt="User Image">--}}
{{--                        <p>--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                            <small>@lang('auth.app.member_since') {{ Auth::user()->created_at->format('M. Y') }}</small>--}}
{{--                        </p>--}}
{{--                    </li>--}}
{{--                    <!-- Menu Footer-->--}}
{{--                    <li class="user-footer">--}}
{{--                        <a href="#" class="btn btn-default btn-flat">Profile</a>--}}
{{--                        <a href="#" class="btn btn-default btn-flat float-right"--}}
{{--                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                            @lang('auth.sign_out')--}}
{{--                        </a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}

{{--    <!-- Left side column. contains the logo and sidebar -->--}}
{{--    @include('layouts.sidebar')--}}

{{--    <!-- Content Wrapper. Contains page content -->--}}
{{--    <div class="content-wrapper">--}}
{{--        <section class="content">--}}
{{--            @yield('content')--}}
{{--        </section>--}}
{{--    </div>--}}

{{--    <!-- Main Footer -->--}}
{{--    <footer class="main-footer">--}}
{{--        <div class="float-right d-none d-sm-block">--}}
{{--            <b>Version</b> 3.1.0--}}
{{--        </div>--}}
{{--        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights--}}
{{--        reserved.--}}
{{--    </footer>--}}
{{--</div>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"--}}
{{--        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="--}}
{{--        crossorigin="anonymous"></script>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"--}}
{{--        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"--}}
{{--        crossorigin="anonymous"></script>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"--}}
{{--        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"--}}
{{--        crossorigin="anonymous"></script>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>--}}

{{--<!-- AdminLTE App -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"--}}
{{--        integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg=="--}}
{{--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"--}}
{{--        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="--}}
{{--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"--}}
{{--        integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="--}}
{{--        crossorigin="anonymous"></script>--}}

{{--<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"--}}
{{--        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="--}}
{{--        crossorigin="anonymous"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.3/bootstrapSwitch.min.js"--}}
{{--        integrity="sha512-DAc/LqVY2liDbikmJwUS1MSE3pIH0DFprKHZKPcJC7e3TtAOzT55gEMTleegwyuIWgCfOPOM8eLbbvFaG9F/cA=="--}}
{{--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

{{--<script>--}}
{{--    $(function () {--}}
{{--        bsCustomFileInput.init();--}}
{{--    });--}}

{{--    $("input[data-bootstrap-switch]").each(function () {--}}
{{--        $(this).bootstrapSwitch('state', $(this).prop('checked'));--}}
{{--    });--}}
{{--</script>--}}

{{--@stack('third_party_scripts')--}}

{{--@stack('page_scripts')--}}
{{--</body>--}}
{{--</html>--}}
