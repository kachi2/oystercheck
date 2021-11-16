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
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card ">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-0 fw-semibold text-white">Successful {{$slug->name}}</p>
                                                    <h3 class="m-0 text-white">{{count($success)}}</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Failed {{$slug->name}}</p>
                                                    <h3 class="m-0 text-white">{{count($failed)}}</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Pending Request</p>
                                                    <h3 class="m-0 text-white">{{count($pending)}}</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                              </div> <!--end col-->          
                              <!--end col-->                               
                            </div><!--end row-->                
                        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$slug->name}}</h4>
                    </div><!--end card-header-->
                       <form method="post" action="{{route('createCandidate',encrypt($slug->slug))}}">
                      @csrf
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                        @foreach($fields as $input)
                            <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">{{$input->label}}</label> @if($input->is_required == 1) <span style="color:red; font-weight:bolder"> * </span> @endif
                                <input type="{{$input->type}}" id="{{$input->inputid}}" name="{{$input->name}}" class="form-control mb-3 custom-select" placeholder="{{$input->placeholder}}" @if($input->is_required == 1) required @endif> 
                            </div><!-- end col -->                                     
                             <!-- end col -->         
                             @endforeach 
                             <div class="col-md-12">
                              @if(Session::has('message'))
                                <span class="btn btn-{{Session::get('alert')}}">
                                    {{Session::get('message')}}
                                </span>
                             @endif 
                               <div class="col-md-6 p-3">
                             <span style="color:red; font-size:11px;"> Note: You will be charged  ₦{{number_format($slug->fee, 2)}} for each {{$slug->name}}</span> <br> 
                              <span style="color:darkblue; font-size:11px;">Your wallet Balance is  ₦{{number_format($wallet->avail_balance, 2)}}</span> <br> 
                     
                             <input type="checkbox" required> 

                             <span style="font-size:11px;" > By checking this box you acknowledge that you have gotten consent from that data subject to use their data for verification purposes on our platform in accourdance to our <a href="#"> Privacy Policy</a></span>
                             </div>
                            <span class="float-center p-2"><button type="submit" class="btn btn-primary w-23">Create Candidate</button> </span> 
                            </div>       
                                                                  
                        </div><!-- end row --> 
                    </div><!-- end card-body --> 
                    </form>
                </div> <!-- end card -->                               
            </div> <!-- end col -->
        </div>
    
      @if(isset($verified))
                 <div class="row">
                  <p class="dastone-user-name">{{$verified->service_ref}}  <span class=" btn btn-success btn-sm "> <i class="fa fa-check"></i>Verified</span></p>                     
                        <div class="col-12">
                            <div class="card">                        
                                <div class="card-body">
                                    <div class="dastone-profile">
                                        <div class="row">
                                        <div class="col-lg-4 mb-3 mb-lg-0">
                                              <div class="dastone-profile-main">
                                                    <div class="dastone-profile-main-pic">
                                                        <img src="{{asset('/assets/cac.jpg')}}" alt="" height="200px" class="">    
                                                    </div>
                                                   <!-- <div class="dastone-profile_user-detail">
                                                    @if(isset($verified->service_ref))
                                                        <h6 class="dastone-user"><b>{{$verified->service_ref}}</b></h6>                                                        
                                                            <b> Reference </b> : {{$verified->reg_no}} 
                                                     @endif                                                    
                                                    </div>end col-->  
                                                </div>                                              
                                            </div>
                                            
                                            <div class="col-lg-8 ms-auto">
                                                <ul class="list-unstyled personal-detail mb-0">
                                                 @if(isset($verified->ref))
                                                 <li class="mt-2"> <b> #Ref </b> : {{$verified->ref}}</li>
                                                 @endif
                                                   @if(isset($verified->service_ref))
                                                 <li class=""><b> Company Name</b> : {{$verified->service_ref}}</li>
                                                   @endif
                                                @if(isset($verified->reg_no))
                                                     <li class=""> <b>Registration Number</b> : {{$verified->reg_no}}</li>
                                                @endif
                                                @if(isset($verified->reg_date))
                                                    <li class="mt-2"><b> Registration Date </b> : {{$verified->reg_date}}</li>
                                                    @endif
                                                    @if(isset($verified->phone))
                                                    <li class=""> <b> Phone</b> : {{$verified->phone}}</li>
                                                    @endif
                                                    @if(isset($verified->marital_status))
                                                    <li class="mt-2"> <b> Marital Status </b> : {{$verified->marital_status}}</li>
                                                    @endif 
                                                     @if(isset($verified->website))
                                                    <li class="mt-2"></i> <b> Website Email </b> : {{$verified->website}}</li>
                                                    @endif                                           
                                                 @if(isset($verified->address))
                                                 <li class="mt-2"> <b> Address</b> : {{$verified->address}}</li>
                                                 @endif
                                                  @if(isset($verified->state))
                                                 <li class="mt-2"> <b> State</b> : {{$verified->state}}</li>
                                                 @endif
                                                  @if(isset($verified->lga))
                                                 <li class="mt-2"> <b> LGA</b> : {{$verified->lga}}</li>
                                                 @endif
                                                  @if(isset($verified->city))
                                                 <li class="mt-2"> <b> City</b> : {{$verified->city}}</li>
                                                 @endif                                                
                                                </ul>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->          
                            </div> <!--end card-->    
                        </div><!--end col-->
                    </div><!--end row-->
    @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$slug->name}} log</h4>
                    </div><!--end card-header-->
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Address Candidate</th>
                                <th>Verified by</th>
                                <th>Fee</th>
                                <th>Status</th>
                                <th>Date</th>
                                 <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach ($logs as $trans )
                            <tr>
                                <td>{{$trans->id}}</td>
                                <td>{{$trans->service_reference}}</td>
                                <td>{{$trans->user->name}}</td>
                                <td>{{$trans->fee}}</td>
                                <td>@if($trans->status == 'successful') <span class="text-success"> {{$trans->status}}</span> @elseif($trans->status == 'pending')<span class="text-warning"> {{$trans->status}}</span>  @else <span class="text-danger"> {{$trans->status}}</span> @endif  </td>
                                <td>{{$trans->created_at}}</td>
                                <td> @if($trans->status == 'successful')
                                <a href="{{route('verify.details', encrypt($trans->id))}}">View Details</a>
                                 @endif
                                </td>
                            </tr>
                             @endforeach
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
        </div>                  
@endsection
@section('script')
   <script>     
          $('#btnsubmit').on('click', function(){
                  $('#btnsubmit').html('<span class="spinner-grow text-secondary spinner-grow-sm" role="status" aria-hidden="true"></span>Please Wait....');
             let  reference = $('#reference').val();
              let first_name = $('#first_name').val();
              let last_name = $('#last_name').val();
            $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
            });
        $.ajax({
         url: "{{route('StoreVerify',$slug->slug)}}",
          type:'GET',
          data:{
            reference: reference,
            first_name: reference,
            last_name: last_name
          },
           cache:false,
          dataType: "json",
          success:function(response){
           // console.log(response.status);
           if(response.status == 'success'){
               console.log(response);
                     $('#btnsubmit').html('<span class="" role="status" aria-hidden="true">Verify Candidate</span>');
                    $('#result').html('<span class="btn btn-success" role="status" aria-hidden="true">Verification Completed Successfull</span>');
                    $('#details').attr('hidden', false);
                    window.location.reload();
           }
         },
   });
    });

   </script>

@endsection