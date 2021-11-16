 @extends('layouts.app')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">{{$slug->verification->slug}} Verification</h4>
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
                                                    <p class="mb-0 fw-semibold text-white">Successful {{$slug->verification->slug}} verifications</p>
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
                                                    <p class="text-white mb-0 fw-semibold">Failed {{$slug->verification->slug}}  verifications</p>
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
         <!-- end page title end breadcrumb -->
         @if(isset($verified))
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <img src="{{asset('/assets/profile/'.$verified->image_path)}}" alt="" class=" mx-auto  d-block" height="200px">                                           
                                        </div><!--end col-->
                                        <div class="col-lg-6 align-self-center">
                                            <div class="single-pro-detail">
                                                <p class="mb-1 btn btn-success" ><i class="fa fa-check"> </i> Verified</p>
                                                <div class="custom-border mb-3"></div>
                                                <h3 class="pro-title">{{$verified->last_name.', '.$verified->first_name.' '.$verified->middle_name}}</h3>
                                                <ul class="list-unstyled pro-features border-0">

                                                 

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
                                            </div>
                                        </div><!--end col-->                                            
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$slug->slug}} Verification log</h4>
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
                                
                                <td>
                                @if($trans->status == 'successful')<a href="#">View Details</a>
                                 @endif</td>
                            </tr>
                             @endforeach
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> 
                    
@endsection
