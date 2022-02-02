 @extends('layouts.app')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">{{$slug['slug']}} Verification</h4>
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
                                                    <p class="mb-0 fw-semibold text-white">Successful {{$slug['slug']}} verifications</p>
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
                                                    <p class="text-white mb-0 fw-semibold">Failed {{$slug['slug']}}  verifications</p>
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
                        <h4 class="card-title">{{$slug->name}} ({{$slug->slug}})Verification</h4>
                    </div><!--end card-header-->
                       <form method="post" action="{{route('StoreVerify',$slug->slug)}}" id="form1">
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
                               <div class="col-md-6 p-3">
                             <span class="btn btn-soft-primary" style="font-size:11px;"> Note: You will be charged  ₦{{number_format($slug->fee, 2)}} for each {{$slug->slug}} verification</span> <br> 
                             
                             <input type="checkbox" required> 

                             <span style="font-size:11px;" > By checking this box you acknowledge that you have gotten consent from that data subject to use their data for verification purposes on our platform in accourdance to our <a href="#"> Privacy Policy</a></span>
                             </div>
                            <span class="float-center p-2"><button type="submit" id="btnsubmit" class="btn btn-primary w-23"> <i class="fas fa-check-double"></i> Verify Candidate {{$slug->slug}}</button> </span> 
                            </div>       
                                                                  
                        </div><!-- end row --> 
                    </div><!-- end card-body --> 
                    </form>
                </div> <!-- end card -->                               
            </div> <!-- end col -->
        </div>
    
      @if(isset($verified))
                 <div class="row">
                  <p class="dastone-user-name">{{$verified->last_name. ' '. $verified->first_name}}  <span class=" btn btn-success btn-sm "> <i class="fa fa-check"></i>Verified</span></p> 
                                               
                        <div class="col-12">
                            <div class="card">                        
                                <div class="card-body">
                                    <div class="dastone-profile">
                                        <div class="row">
                                        <div class="col-lg-5 mb-3 mb-lg-0">
                                              <div class="dastone-profile-main">
                                                    <div class="dastone-profile-main-pic">
                                                        <img src="{{asset('/assets/profile/'.$verified->image_path)}}" alt="" height="110" class="">    
                                                    </div>
                                                    <div class="dastone-profile_user-detail">
                                                    @if(isset($verified->last_name))
                                                        <h6 class="dastone-user"><b>{{$verified->last_name. ', '. $verified->first_name}}  {{$verified->middle_name}}</b></h6>                                                        
                                                            <b> Reference </b> : {{$verified->reference}} 
                                                    @else
                                                     <h6 class="dastone-user"><b>{{$verified->last_name. ' '. $verified->first_name}}  {{$verified->middle_name}}</b></h6>                                                        
                                                           <b>Type: {{strtoupper($verified->slug)}} Verification <br> <b> Reference </b> : {{$verified->reference}} 

                                                    @endif                                                    
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            
                                            <div class="col-lg-4 ms-auto">
                                                <ul class="list-unstyled personal-detail mb-0">
                                                 @if(isset($verified->dob))
                                                 <li class="mt-2"> <b> Date of Birth </b> : {{$verified->dob}}</li>
                                                 @endif
                                                   @if(isset($verified->phone))
                                                 <li class=""><b> Phone number</b> : {{$verified->phone}}</li>
                                                   @endif
                                                @if(isset($verified->educational_level))
                                                     <li class=""> <b> Educational Level</b> : {{$verified->educational_level}}</li>
                                                @endif
                                                @if(isset($verified->employment_status))
                                                    <li class="mt-2"><b> Employment Status </b> : {{$verified->employment_status}}</li>
                                                    @endif
                                                    @if(isset($verified->gender))
                                                    <li class=""> <b> Gender</b> : {{$verified->gender}}</li>
                                                    @endif
                                                    @if(isset($verified->marital_status))
                                                    <li class="mt-2"> <b> Marital Status </b> : {{$verified->marital_status}}</li>
                                                    @endif 
                                                     @if(isset($verified->place_of_issue))
                                                    <li class="mt-2"></i> <b> Place of Issue </b> : {{$verified->place_of_issue}}</li>
                                                    @endif                                           
                                                 @if(isset($verified->tax_identification_number))
                                                 <li class="mt-2"> <b> Tax Identification Number</b> : {{$tax_identification_number}}</li>
                                                 @endif
                                                   @if(isset($verified->religion))
                                                 <li class="mt-2"> <b> Religion</b> : {{$religion}}</li>
                                                 @endif
                                                  @if(isset($verified->document_number))
                                                 <li class="mt-2"> <b> Religion</b> : {{$document_number}}</li>
                                                 @endif
                                                  @if(isset($verified->document_number))
                                                 <li class="mt-2"> <b> Religion</b> : {{$document_number}}</li>
                                                 @endif
                                                  @if(isset($verified->first_state_of_issuance))
                                                 <li class="mt-2"> <b> First State of Issuance</b> : {{$first_state_of_issuance}}</li>
                                                 @endif                                                
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-auto text-end border-end">
                                                     <ul class="list-unstyled personal-detail mb-0">
                                                     @if(isset($verified->expiry_date))
                                                    <li class="mt-2"> <b> Expiry Date </b> : {{$verified->expiry_date}}</li>
                                                    @endif 
                                                     @if(isset($verified->address))
                                                    <li class="mt-2"><b> Address</b> : {{$verified->address}}</li>
                                                    @endif  
                                                     @if(isset($verified->birth_state))
                                                    <li class="mt-2"> <b> Birth State </b> : {{$verified->birth_state}}</li>
                                                    @endif 
                                                     @if(isset($verified->residence_state))
                                                    <li class="mt-2"><b> Residence State </b> : {{$verified->residence_state}}</li>
                                                    @endif   
                                                    @if(isset($verified->tracking_id))
                                                    <li class="mt-2"><b> Tracking ID </b> : {{$verified->tracking_id}}</li>
                                                    @endif
                                                    
                                                     </ul>
                                                    </div><!--end col-->
                                                   
                                                </div><!--end row-->                                               
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
                        <h4 class="card-title">{{$slug->slug}} Verification log
                        
                         </h4>
                         <form method="post" action="{{route('IdentitySort',$slug->slug)}}">
                        @csrf
                        <span style="float:right; top:-10px">   <li class="nav-item dropdown " style="list-style:none">
                                <a class="nav-link dropdown-toggle card-title" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort Data <i class="la la-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><button type="submit" name="sort" value="success" class="dropdown-item"> Sort By Successful</button></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="submit"  name="sort"  value="failed" class="dropdown-item" >Sort By Failed</button></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="submit"  name="sort"  value="pending" class="dropdown-item" href="#">Sort By Pending</button></li>
                                </ul>
                            </li>
                            </span>
                        </form>
                      
                    </div><!--end card-header-->
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>{{$slug->slug}} Verification</th>
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
