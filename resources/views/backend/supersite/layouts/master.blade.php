<!DOCTYPE html>
<html lang="en">
@include('backend.supersite.includes.head')
<body class="hold-transition sidebar-mini layout-fixed">
    <div id="wrapper">

        @include('backend.supersite.includes.navbar')

        @include('backend.supersite.includes.menu')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            @yield('content')

        </div>
        @include('backend.supersite.includes.footer')
    </div>

    <script src="{{asset('./backend/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{asset('./backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/sparklines/sparkline.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('./backend/assets/dist/js/adminlte.js')}}"></script>
    <script src="{{asset('./backend/assets/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('./backend/assets/dist/js/demo.js"')}}></script>
    @yield('js')
</body>
</html>
