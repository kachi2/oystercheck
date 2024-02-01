 @extends('layouts.app')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Candidate Onboarding</h4>
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
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card ">
                                        <div class="card-body" >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-0 fw-semibold text-black">Total Candidates </p>
                                                    <h3 class="m-0 text-black">{{count($candidates)}}</h3>
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
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body" >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-black mb-0 fw-semibold">Total Verified Candidates</p>
                                                    <h3 class="m-0 text-black">{{count($verified)}}</h3>
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
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body" >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-black mb-0 fw-semibold">Pending Candidates</p>
                                                    <h3 class="m-0 text-black">{{count($pending)}}</h3>
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
                              <div class="col-md-6 col-lg-3">
                                <div class="card report-card">
                                    <div class="card-body" >
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-black mb-0 fw-semibold">Rejected Candidates</p>
                                                <h3 class="m-0 text-black">{{count($rejected)}}</h3>
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
     @if(isset($services))
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 ">

                                            
                                                <div class="custom-border mb-3"></div>
                                                <h3 class="pro-title">{{strtoupper($candidate->user->firstname .' '. $candidate->user->lastname)}} </h3>
                                              
                                            
                                                <ul class="list-unstyled personal-detail mb-0">
                                                    <li class=""><i class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b> Phone </b> : {{$candidate->phone}}</li>
                                                    <li class="mt-2"><i class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b> Email </b> : {{$candidate->email}}</li>
                                                    <li class="mt-2"><i class="ti ti-briefcase text-secondary font-16 align-middle me-2"></i> <b> Company </b> : {{$candidate->client->company_name}}</li>
                                                    <li class="mt-2"><i class="ti ti-map text-secondary font-16 align-middle me-2"></i> <b> Address </b> :{{$candidate->address}} </li>  
                                                      <li class=""> <i class="ti ti-world text-secondary font-16 align-middle me-2"></i><b> City</b> : {{$candidate->city}}</li>
                                                <li class=""> <i class="ti ti-world text-secondary font-16 align-middle me-2"></i> <b> State</b> : {{$candidate->state}}</li>
                                                <li class=""> <i class="ti ti-world text-secondary font-16 align-middle me-2"></i><b> Country</b> : {{$candidate->country}}</li>                                                 
                                                </ul>
                                                <br>

                                                @if(count($services)> 0)
                                                    @if($candidate->user->candidate->status == 'verified')
                                                   
                                                      @include('users.candidates.approved')
                                                      @elseif($candidate->user->candidate->status == 'rejected')
                                                      @include('users.candidates.decline')
                                                    @else 
                                                    @include('users.candidates.statusModal')
                                                   
                                                    <a href="javascript();"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#approveCandidate{{$candidate->user_id}}">
                                                        <i class="fa fa-check-circle badge badge-success"> </i> Approve </a> 
                                                        <a href="javascript();" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#disapproveCandidate{{$candidate->user_id}}">
                                                            <i class="fa fa-times badge badge-danger"> </i> Reject</a>
                                                    @endif
                                                    @endif
                                        </div><!--end col-->
                                        <div class="col-lg-9 align-self-center">
                                            <div class="single-pro-detail">
                                                <div class="custom-border mb-3"></div>
                                                <h3 class="pro-title">Verification Services</h3>
                                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>Service Name</th>
                                                <th>Review</th>
                                                <th>Status</th>
                                                <th>Uploaded Document</th>
                                                <th>Approved Document</th>
                                                <th>Qualitfy Assurance Verified</th>
                                                <th>Qualitfy Assurance  Review</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @foreach ($services as $ss )
                                            <tr>
                                                <td>{{$ss->service->name}}</td>
                                                <td>{{$ss->review}}</td>
                                                @if($ss->status == "approved")
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                 @elseif($ss->status == "failed")
                                                <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                @else
                                                 <td><span class="badge badge-soft-warning">Pending</span> <br>  
                                                    <span style="float:right"> 
                                                        <a href="javascript();"  data-bs-toggle="modal" data-bs-target="#approveDoc{{$ss->id}}">
                                                    <i class="fa fa-check-circle badge badge-outline-success"> </i></a> 
                                                    <a href="javascript();"  data-bs-toggle="modal" data-bs-target="#disapproveDoc{{$ss->id}}">
                                                        <i class="fa fa-times badge badge-outline-danger"> </i> </a> </td>
                                                @endif
                                                <td>@if(!empty($ss->doc)) <a target="_blank" href="{{asset('assets/candidates/'.$ss->doc)}}"> {{$ss->doc}} <i class="fa fa-download badge badge-outline-info"> </i></a> @else No Documents @endif </td>
                                                <td>@if(!empty($ss->final_doc)) <a target="_blank" href="{{asset('assets/candidates/'.$ss->final_doc)}}"> {{$ss->final_doc}} <i class="fa fa-download badge badge-outline-info"> </i></a> @else No Documents @endif</td>
         
                                                 @if($ss->QA_approved == "approved")
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                @elseif($ss->QA_approved == "failed")
                                                <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                @else
                                                 <td><span class="badge badge-soft-warning">Pending</span></td>
                                                @endif
                                                <td><p style="font-size:9px">{{$ss->QA_review}}</p></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <a class="dropdown-toggle arrow-none" id="seeMore" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-h font-12 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="seeMore" style="">
                                                                {{-- <a class="dropdown-item" href="#">Copy Reference Id</a> --}}
                                                                @if($ss->is_adminUpload)
                                                                <a   class="btn btn-sm" href="{{route('candidate.request-verification', encrypt($ss->id))}}"> Request Verification</a> 
                                                                @endif
                                                                @if($ss->service->required_external_verify)
                                                                <a   class="btn btn-sm" href="{{route('candidate.employer-reference',['user_id' => encrypt($ss->user_id),  'id' => encrypt($ss->id) ])}}">  Request Employer Reference</a> 
                                                                @endif
                                                            </div>
                                                        </div> 
                                                    </td>
                                            </tr>
                                            @include('users.candidates.modals')
                                            @endforeach
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                                                     
                                            </div>
                                        </div><!--end col-->                                            
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
            @endif

            <div class="col-12 pt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="display:inline">All Candidates</h4>
                        
                        <span style="float:right" class="btn btn-primary"><i class="fa fa-user"></i> <a style="color:#fff" href="{{route('candidate.create')}}">Onboard New Candidate</a></span>
                    </div><!--end card-header-->
                    
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Created On</th>
                                <th>Action</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($candidates as $cand )
                               <tr>
                                <td>#{{$cand->id}}</td>
                                <td>{{$cand->user->firstname.' '.$cand->user->lastname}}</td>
                                <td>{{$cand->user->email}}</td>
                                <td>{{$cand->phone}}</td>
                                
                                <td> @if($cand->status == 'verified') <span class="badge bg-success"> Verified</span> @elseif($cand->status == 'rejected') <span class="badge bg-danger"> Rejected </span> @else <span class="badge bg-secondary"> Pending  </span > @endif </td>
                                    <td> {{$cand->created_at}}</td>
                                    <td><a class="badge bg-soft-primary" href="{{route('candidate.details', encrypt($cand->id))}}"> view Details</a></td>
                               
                            </tr>
                                 @endforeach
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
        </div>                  
@endsection