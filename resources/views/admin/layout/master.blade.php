<!DOCTYPE html>
<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','')</title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}" <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
            .test {
position: relative;
height: 50px;

font-weight:bold;
width:100%;
-webkit-animation: my 700ms infinite;
-moz-animation: my 700ms infinite;
-o-animation: my 700ms infinite;
animation: my 700ms infinite;

}
@keyframes my {
0% { color: #F8CD0A; }
50% { color: #fff; }
100% { color: #F8CD0A; }
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}

       
    </style>
    {{-- <link href="path/to/select2.min.css" rel="stylesheet" /> <br>
    <script src="path/to/select2.min.js"></script> --}}
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.2/af-2.3.7/b-2.0.0/b-colvis-2.0.0/b-html5-2.0.0/b-print-2.0.0/datatables.min.css"/>
</head>

<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse" style="height: auto;">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">

        </div>

        <!-- Navbar -->
        <nav style="background-color: #4d94ff;" class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>


            </ul>
            <marquee class="test"> <h1>THƯ VIỆN TRƯỜNG HỌC</h1></marquee>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->


                <li class="nav-item">
                    
                    @if(Auth::guard('admin')->user() !=null)
                    <span>{{Auth::guard('admin')->user()->name}}</span>
                    
                    @endif


                   

                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/home')}}" class="brand-link" style="background-color:  #4d94ff;height:56.6px;">

                <p style="text-align: center;"><img style="width: 40px;height: 40px; border-radius:15px; margin-right:10px;" src="data:image/jpeg;base64,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">LIBRARY MANAGER</p>
            </a>

            <!-- Sidebar -->
            <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 689px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                           
                            
                            <!-- Sidebar Menu -->
                            <nav  class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                    <li class="nav-item menu-open">
                                        <a href="{{url('/index')}}" class="nav-link active">
                                            <i class="nav-icon far fa-id-card"></i>
                                            <p>
                                                Thẻ thư viện
                                                
                                            </p>
                                        </a>
                                      
                                    </li>


                                    

                                    <li class="nav-item menu-open">
                                        <a href="{{url('/indexbr')}}" class="nav-link active">
                                            <i class="nav-icon fas fa-table"></i>
                                            <p>
                                               Quản lí mượn trả
                                                
                                            </p>
                                        </a>
                                      
                                    </li>
                                    



                                    <li class="nav-item menu-open">
                                        <a href="{{url('/indexl')}}" class="nav-link active">
                                        <i class="fas fa-location-arrow nav-icon"></i>
                                            <p>
                                               Vị Trí Sách
                                                
                                            </p>
                                        </a>
                                      
                                    </li>
                                   
                                    <li class="nav-item menu-open">
                                        <a href="{{url('/indexs')}}" class="nav-link active">
                                            <i class="far fa-newspaper nav-icon"></i>
                                            <p>
                                               Quản lí loại
                                                
                                            </p>
                                        </a>
                                      
                                    </li>
                                    <li class="nav-item menu-open">
                                        <a href="{{url('/indes')}}" class="nav-link active">
                                        <i class="fas fa-book nav-icon"></i>
                                            <p>
                                               Quản lí sách
                                                
                                            </p>
                                        </a>
                                      
                                    </li>
                                    <li class="nav-item menu-open">
                                        @if(Auth::guard('admin')->user() ==null)
                                        <a href="{{route('admin.login')}}" class="nav-link active">
                                             <i class="fas fa-sign-in-alt nav-icon"></i><p>Đăng nhập</p></a>

                                            
                                        @else
                                             <a href="{{route('admin.logout')}}"  class="nav-link active"><i class="fas fa-sign-in-alt nav-icon"></i><p>Đăng xuất</p></a>
                                        @endif

                                       
                                          
                                        
                                      
                                    </li>
                                </ul>
                            </nav>
                            <!-- /.sidebar-menu -->
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 31.5645%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 633px;">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                           
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
            <!-- /.content-header -->

            <!-- Main content -->
            @section('content')
            @show
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright © 2014-2021 <a href="https://adminlte.io">Thư viện BKACAD</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        
        <!-- /.control-sidebar -->
        <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <!--  <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>-->
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>-->
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>-->

    {{-- <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
    {{-- <script>
        $('#txt_details').ckeditor();
        ClassicEditor
        .create(document.querySelector('#editor'),{

        })
        .then(editor=>{
            window.editor =editor;
        })
        .catch(err =>{
            console.error(err.stack);
        })
    </script> --}}
    {{-- <script>
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('txt_details');
    </script> --}}
    @include('sweetalert::alert')
    @yield('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.2/af-2.3.7/b-2.0.0/b-colvis-2.0.0/b-html5-2.0.0/b-print-2.0.0/datatables.min.js"></script>

</body>

</html>