<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
         <title>{{ config('app.name', 'Oysterchecks Comprehensive and Exceptional background checks') }}</title>
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
        <link href="{{asset('plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /><meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link href="{{asset('plugins/datatables/buttons.bootstrap5.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/datatables/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
        
        @yield('style')
        <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
  </head>
  <body class="dark-sidenav navy-sidenav">

<div class="page-content">
    <div class="container-fluid">
      
        <div class="row">

            <div class="col-8 " style="margin: auto">
                <div class="card">
        
                    <!--end card-header-->
                    <div class="card-body" id="pdfContent" >
                        <div class="row">
                            <div class="col-4 mb-4 ms-auto me-auto">
                                <img src="{{asset('/assets/images/logo.png')}}" style="width:40%" alt="Oysterchecks Logo" class="logo-light">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12"> <div class="alert custom-alert alert-success icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-off-outline alert-icon text-success align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-success">Previous Employment Reference Form</h5>
                                            <span>{{strtoupper($employeeReference->user->firstname.' '.$employeeReference->user->lastname)}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="my-4 d-flex justify-content-between align-items-center">
                                    <p class="fw-semibold text-dark font-16"> <span class=" text-muted"> Candidate: </span> {{strtoupper($employeeReference->user->firstname.' '.$employeeReference->user->lastname)}}  </p>
                                    <p class="fw-semibold text-dark font-16"> <span class=" text-muted">Company:  </span>{{strtoupper($employeeReference->company_name)}}  </p>
                                    <p class="fw-semibold text-dark font-16"><span class=" text-muted"> Company Email: </span> {{strtoupper($employeeReference->company_address)}}  </p>
                                    <div>
                                        {{-- <a id="printBtn" class="btn btn-primary btn-square">Print</a>
                                        <a id="downloadBtn" class="btn btn-primary btn-square">Download Report</a> --}}
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="py-3 px-4 bg-light">
                                    <h2 class="font-16 m-0 lh-base">PERSONAL REFERENCE FORM</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="row">
                                    @forelse ($answers as $ans)
                                  
                                    @if($ans->ReferenceAnswers->input_type == "hidden")
                                    <div class="col-12 mt-2">
                                        <div class="py-3 px-4 bg-light">
                                            <h2 class="font-16 m-0 lh-base">{{$ans->ReferenceAnswers->question}}</h2>
                                        </div>
                                    </div>
                                    @elseif($ans->ReferenceAnswers->input_type == "select")
                                 
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">{{$ans->ReferenceAnswers->question}}</div>
                                        <div class="font-14 col-8">{{$ans->answer}}</div>
                                    </div>
                                    @elseif($ans->ReferenceAnswers->input_type == "text") 
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">{{$ans->ReferenceAnswers->question}}</div>
                                        <div class="font-14 col-8">{{$ans->answer}}</div>
                                    </div>
                                    @else 
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">{{$ans->ReferenceAnswers->question}}</div>
                                        <div class="font-14 col-8">{{$ans->answer}}</div>
                                    </div>
                                    @endif
                                    @empty
                                    @endforelse
                                </div>
                                <button class="btn btn-warning" onclick="print()"> Print Document</button>
                            </div>
                          
                           
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/effects.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('/assets/js/waves.js')}}"></script>
    <script src="{{asset('/assets/pages/jquery.form-upload.init.js')}}"></script>
    <script src="{{asset('/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('/assets/js/feather.min.js')}}"></script>
    <script src="{{asset('/assets/js/simplebar.min.js')}}"></script>
    <script src="{{asset('/assets/js/moment.js')}}"></script>
    <script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('/plugins/select2/select2.min.js')}}"></script>
        <!-- Required datatable js -->
    <script src="{{asset('/assets/pages/jquery.datatable.init.js')}}"></script>
    <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/dataTables.bootstrap5.min.js')}}"></script>
    
       <!-- Buttons examples -->
    <script src="{{asset('/plugins/datatables/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/buttons.html5.min.js')}}"></script>
      <!-- Responsive examples -->
    <script src="{{asset('/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/pages/jquery.forms-advanced.js')}}"></script>

    <script src="{{asset('/plugins/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('/assets/pages/jquery.clipboard.init.js')}}"></script>
        <!-- Session timeout js -->


    <script src="{{asset('/plugins/bootstrap-session-timeout/bootstrap-session-timeout.min.js')}}"></script>
        
    <script src="{{asset('/assets/pages/jquery.animate.init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- App js -->
    <script src="{{asset('/assets/js/app.js')}}"></script> 
    </body>
</html>