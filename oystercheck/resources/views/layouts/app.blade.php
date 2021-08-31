<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8" />
         <title>{{ config('app.name', 'Oysterchecks') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Oysterchecks Comprehensive and Exceptional background checks, KYC & AML compliance Solutions</" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <!-- App css -->
        <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    </head>
  <body class="dark-sidenav navy-sidenav">
@include('partials.sidebar')
 <div class="page-wrapper">
@include('partials.navbar')

@yield('content')

   </div>

        <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> All Rights Reserved, Oysterchecks.com <span class="text-muted d-none d-sm-inline-block float-end"> 
                        with <i class="mdi mdi-heart text-danger"></i> by Morgans Consortium</span>
                </footer><!--end footer-->
 </div>
 </div>
  <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('/assets/js/waves.js')}}"></script>
        <script src="{{asset('/assets/js/feather.min.js')}}"></script>
        <script src="{{asset('/assets/js/simplebar.min.js')}}"></script>
        <script src="{{asset('/assets/js/moment.js')}}"></script>
        <script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Required datatable js -->
        <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('/plugins/datatables/dataTables.bootstrap5.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('/plugins/datatables/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('/assets/pages/jquery.datatable.init.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('/assets/js/app.js')}}"></script>  
    </body>
</html>