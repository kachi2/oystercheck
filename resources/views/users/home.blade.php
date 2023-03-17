
@extends('layouts.app')
@section('content')
  <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Overall Analytics</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">This Dashboard shows overview of your recent activities, verifications transactions</li>
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
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body " style="background:#303e67">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Successful verifications</p>
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
                                        <div class="card-body" style="background:#303e67">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Failed verifications</p>
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
                                        <div class="card-body" style="background:#303e67">
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
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">verification Overview</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   This Year<i class="las la-angle-down ms-1"></i>
                                                </a>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                   <div class="card-body">
                                    <div class="chart-demo">
                                        <div id="apex_column1" class="apex-charts"></div>
                                    </div>                                        
                                </div>
                        
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">   
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Activity Log</h4>                      
                                        </div><!--end col-->
                                      <!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->                                              
                                <div class="card-body"> 
                                    <div class="analytic-dash-activity" data-simplebar>
                                        <div class="activity">

                                            @if(count($activity) > 0)
                                            @foreach ($activity as  $logs)
                                            
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="las la-user-clock bg-soft-primary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-13 w-75"> 
                                                           {{$logs->activity}}
                                                        </p>
                                                        <small class="text-muted">{{$logs->created_at}}</small>
                                                    </div>    
                                                </div>
                                            </div>   
                                            @endforeach
                                            @else
                                                <div class="activity-info">
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class=" mb-0 font-13 w-75"> 
                                                        You dont have any activity at this moment
                                                        </p>
                                                    </div>  </div>

                                                </div>
                                            
                                            @endif
                                                                                                                                                                             
                                        </div><!--end activity-->
                                    </div><!--end analytics-dash-activity-->
                                </div>  <!--end card-body-->                                     
                            </div><!--end card--> 
                        </div> <!--end col--> 
                    </div><!--end row-->
                    <div class="row">                        
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Recent Verification</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive browser_users">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="border-top-0">Type</th>
                                                    <th class="border-top-0">User</th>
                                                    <th class="border-top-0">Payment Status</th>
                                                    <th class="border-top-0">Status</th>
                                                    <th class="border-top-0">Date</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                            @foreach ($recents as $recent )
                                                <tr>                                                        
                                                    <td><a href="#" class="text-primary">{{$recent->verification->name}}</a></td>
                                                    <td>{{$recent->user->name}}</td>
                                                 @if($recent->status == 'successful')   <td class="text-success">Charged</td>
                                                 @else
                                                 <td class="text-warning">Pending</td> 
                                                 @endif
                                                 @if($recent->status == 'successful')   <td class="text-success">Successful</td>
                                                 @elseif($recent->status == 'pending')
                                                 <td class="text-warning">Pending</td> 
                                                 @else
                                                  <td class="text-danger">Failed</td> 
                                                 @endif
                                                    
                                                    <td>{{$recent->created_at->DiffForHumans()}}</td>
                                                </tr>
                                                @endforeach
                                                <!--end tr-->                            
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->   
                        
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Other Logs</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive browser_users">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="border-top-0">Type</th>
                                                    <th class="border-top-0">User</th>
                                                    <th class="border-top-0">Purpose</th>
                                                    <th class="border-top-0">Type</th>
                                                    <th class="border-top-0">Amount</th>
                                                    <th class="border-top-0">Created At</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                            @foreach ($transactions as $trans )
                                                  <tr>                                                        
                                                    <td><a href="#" class="text-primary">{{substr($trans->ref,0,10)}} </a></td>
                                                    <td>{{$trans->user->name}}</td>
                                                    <td>{{$trans->purpose}}</td>
                                                    <td>{{$trans->type}}</td>
                                                    <td>{{$trans->amount}}</td>
                                                    <td >{{$trans->created_at->DiffForHumans()}}</td>
                                                </tr>       
                                            @endforeach
                                                <!--end tr-->                            
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                    </div><!--end row-->
                    

                </div><!-- container -->
@endsection