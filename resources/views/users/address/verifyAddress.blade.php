 @extends('layouts.app')
 @section('content')
 <div class="page-content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12">
                 <div class="page-title-box">
                     <div class="row">
                         <div class="col">
                             <h4 class="page-title">{{$slug->name}}</h4>
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"></li>
                             </ol>
                         </div>
                         <!--end col-->
                         <div class="col-auto align-self-center">
                             <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                 <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                 <span class="" id="Select_date">Jan 11</span>
                                 <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                             </a>
                             <a href="#" class="btn btn-sm btn-outline-primary">
                                 <i data-feather="download" class="align-self-center icon-xs"></i>
                             </a>
                         </div>
                         <!--end col-->
                     </div>
                     <!--end row-->
                 </div>
                 <!--end page-title-box-->
             </div>
             <!--end col-->
         </div>
         
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">{{$slug->name}}</h4>
                     </div>
                     <!--end card-header-->
                     <form method="post" action="{{route('AddressStore', $service_ref)}}">
                         @csrf
                         <div class="card-body bootstrap-select-1">
                             <div class="row">
                                 @foreach($fields as $input)
                                 <div class="col-md-6">
                                     <label class="mb-3" style="font-weight:bolder">{{$input->label}}</label> @if($input->is_required == 1) <span style="color:red; font-weight:bolder"> * </span> @endif
                                     <input type="{{$input->type}}" value="{{old($input->name)}}" id="{{$input->inputid}}" name="{{$input->name}}" class="form-control mb-3 custom-select @error($input->name) is-invalid @enderror" placeholder="{{$input->placeholder}}" @if($input->is_required == 1) required @endif>
                                     @error($input->name)
                                     <span class="invalid-feedback" role="alert">
                                         {{$message}}
                                     </span>
                                     @enderror
                                    </div><!-- end col -->
                                    <!-- end col -->
                                    @endforeach
                                    <input type="text" value="{{$slug->slug}}" name="slug" hidden>
                                 <div class="col-md-12">
                                     @if(Session::has('message'))
                                     <span class="btn btn-{{Session::get('alert')}}">
                                         {{Session::get('message')}}
                                     </span>
                                     @endif
                                     <div class="col-md-6 p-3">
                                         <span style="color:red; font-size:11px;"> Note: You will be charged ₦{{number_format($slug->fee, 2)}} for each {{$slug->name}}</span> <br>
                                         <span style="color:darkblue; font-size:11px;">Your wallet Balance is ₦{{number_format($wallet->avail_balance, 2)}}</span> <br>

                                         <input type="checkbox" required name="subject_consent" id="subject_consent">
                                         <span style="font-size:11px;"> By checking this box you acknowledge that you have gotten consent from that data subject to use their data for verification purposes on our platform in accourdance to our <a href="#"> Privacy Policy</a></span>
                                     </div>
                                     <span class="float-center p-2"><button type="submit" class="btn btn-primary w-23">Submit Address to Verify</button> </span>
                                 </div>

                             </div><!-- end row -->
                         </div><!-- end card-body -->
                     </form>
                 </div> <!-- end card -->
             </div> <!-- end col -->
         </div>
     </div>
     @endsection
     @section('script')
     <!-- <script>
         $('#btnsubmit').on('click', function() {
             $('#btnsubmit').html('<span class="spinner-grow text-secondary spinner-grow-sm" role="status" aria-hidden="true"></span>Please Wait....');
             let reference = $('#reference').val();
             let first_name = $('#first_name').val();
             let last_name = $('#last_name').val();
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
             $.ajax({
                 url: "{{route('StoreVerify',$slug->slug)}}",
                 type: 'GET',
                 data: {
                     reference: reference,
                     first_name: reference,
                     last_name: last_name
                 },
                 cache: false,
                 dataType: "json",
                 success: function(response) {
                     // console.log(response.status);
                     if (response.status == 'success') {
                         console.log(response);
                         $('#btnsubmit').html('<span class="" role="status" aria-hidden="true">Verify Candidate</span>');
                         $('#result').html('<span class="btn btn-success" role="status" aria-hidden="true">Verification Completed Successfull</span>');
                         $('#details').attr('hidden', false);
                         window.location.reload();
                     }
                 },
             });
         });
     </script> -->

     @endsection