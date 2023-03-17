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
        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}">
          <link href="{{asset('/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <!-- jvectormap -->
        <link href="{{asset('/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
        <!-- App css -->
         <link href="{{asset('/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /><meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
  <body class="dark-sidenav navy-sidenav">
@include('partials.sidebar')
 <div class="page-wrapper">
@include('partials.navbar')
@yield('content')
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
        <script src="{{asset('/assets/pages/jquery.datatable.init.js')}}"></script>
        <script src="{{asset('/assets/pages/jquery.form-upload.init.js')}}"></script>
         <script src="{{asset('/plugins/dropify/js/dropify.min.js')}}"></script>
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
        <script src="{{asset('/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('/assets/pages/jquery.sweet-alert.init.js')}}"></script>
          <script src="{{asset('/plugins/chartjs/chart.min.js')}}"></script>
        <script src="{{asset('/assets/pages/jquery.chartjs.init.js')}}"></script>
         <script src="{{asset('plugins/apex-charts/apexcharts.min.js')}}"></script>
        <script src="{{asset('/plugins/apex-charts/irregular-data-series.js')}}"></script>
        <script src="{{asset('/plugins/apex-charts/ohlc.js')}}"></script>
        <script src="{{asset('/assets/pages/jquery.apexcharts.init.js')}}"></script>
        <!-- Session timeout js -->
        <script src="{{asset('/plugins/bootstrap-session-timeout/bootstrap-session-timeout.min.js')}}"></script>
        
        <script src="{{asset('/assets/pages/jquery.animate.init.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- App js -->
        <script src="{{asset('/assets/js/app.js')}}"></script> 
@section('script')
   <script>     


let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
let name =  {!! json_encode(auth()->user()->name) !!};
//let logUlr = $('#frm-logout').submit();
//alert(msg);
toastr.options = {
        timeOut: 6000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 500,
        hideDuration: 500
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
$.sessionTimeout({
message: "Hi " + name + " Your session will expire soon.",
keepAliveUrl:"{{route('index')}}",
logoutButton:"Logout Now",
logoutUrl:"{{route('logouts')}}",
redirUrl:"{{route('logouts')}}",
warnAfter:80e3,
redirAfter:60e4,
countdownBar:!0
});


   </script>

@endsection
        @yield('script')

        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61af7a68c82c976b71c03859/1fmancaoo';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>