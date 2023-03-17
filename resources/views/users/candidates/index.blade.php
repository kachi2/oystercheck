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
                                                    <p class="mb-0 fw-semibold text-white">Total Candidates<h3 class="m-0 text-white">{{count($candidate)}}</h3>
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
                                                    <p class="text-white mb-0 fw-semibold">Total Verified Candidates</p>
                                                    <h3 class="m-0 text-white">{{count($verified)}}</h3>
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
                                                    <p class="text-white mb-0 fw-semibold">Total Rejected Candidates</p>
                                                    <h3 class="m-0 text-white">{{count($rejected)}}</h3>
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
                                                    <p class="text-white mb-0 fw-semibold">Pending Candidates</p>
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
                                <th>Email Status</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($candidate as $cand )
                               <tr>
                                <td>#{{$cand->id}}</td>
                                <td>{{$cand->user->name}}</td>
                                <td>{{$cand->user->email}}</td>
                                <td>{{$cand->phone}}</td>
                                <td>pending</td>
                                <td>delivered</td>
                                <td> {{$cand->created_at}}</td>
                                <td><a href="{{route('candidate.details', encrypt($cand->id))}}"> view Details</a></td>
                            </tr>
                                 @endforeach
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
        </div>                  
@endsection