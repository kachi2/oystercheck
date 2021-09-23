
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
                                        <div class="card-body " style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Successful verifications</p>
                                                    <h3 class="m-0 text-white">{{count($success)}}</h3>
                                                    <p class="mb-0 text-truncate text-white"><span class="text-success">+1</span> this week</p>
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
                                                    <p class="text-white mb-0 fw-semibold">Failed verifications</p>
                                                    <h3 class="m-0 text-white">{{count($failed)}}</h3>
                                                    <p class="mb-0 text-truncate text-white"><span class="text-danger">+1</span> this week</p>
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
                                                    <p class="mb-0 text-truncate text-white"><span class="text-success">+2</span> this week</p>
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
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">This Year</a>
                                                </div>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="">
                                        <div id="ana_dash_1" class="apex-charts"></div>
                                    </div> 
                                </div><!--end card-body--> 
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
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="las la-user-clock bg-soft-primary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-13 w-75"><span>Michael's</span> 
                                                           address verification has been confirm as Successful
                                                        </p>
                                                        <small class="text-muted">10 Min ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-13 w-75"><span>Sarah's</span> was confirmed failed 
                                                        </p>
                                                        <small class="text-muted">50 Min ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-13 w-75"><span>Joseph</span> wallet topup was Successful
                                                        </p>
                                                        <small class="text-muted">10 hours ago</small>
                                                    </div>    
                                                </div>
                                            </div>   

                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-13 w-75"><span>Michael</span> added another payment method
                                                        </p>
                                                        <small class="text-muted">23hrs ago</small>
                                                    </div>    
                                                </div>
                                            </div>   
                                            <div class="activity-info">
                                                <div class="icon-info-activity">
                                                    <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                                </div>
                                                <div class="activity-info-text">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-muted mb-0 font-13 w-75"><span>Kachi</span> verified a driving license, status pending
                                                        </p>
                                                        <small class="text-muted">1 day ago</small>
                                                    </div>    
                                                </div>
                                            </div> 
                                                                                                                                                                             
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
                                                <tr>                                                        
                                                    <td><a href="#" class="text-primary">Address verification</a></td>
                                                    <td>Michael</td>
                                                    <td class="text-success">Paid</td>
                                                    <td  class="text-warning">Pending</td>
                                                    <td >2hrs ago</td>
                                                </tr><!--end tr-->     
                                                <tr>                                                        
                                                    <td><a href="#" class="text-primary">NIC verification</a></td>
                                                    <td>Kachi</td>
                                                    <td class="text-success">Paid</td>
                                                    <td  class="text-success ">Successful</td>
                                                    <td >8hrs ago</td>
                                                </tr> <tr>                                                        
                                                    <td><a href="#" class="text-primary">BVN verification</a></td>
                                                    <td>Dave</td>
                                                    <td class=" text-success">Paid</td>
                                                    <td  class="text-success ">Successful</td>
                                                    <td >10hrs ago</td>
                                                </tr>
                                                <tr>                                                        
                                                    <td><a href="#" class="text-primary">Phone Number verification</a></td>
                                                    <td>Mike</td>
                                                    <td class="text-success">Paid</td>
                                                    <td  class="text-success ">Successful</td>
                                                    <td >12hrs ago</td>
                                                </tr><!--end tr-->                            
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
                                                    <th class="border-top-0">Description</th>
                                                    <th class="border-top-0">Status</th>
                                                    <th class="border-top-0">Date</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>                                                        
                                                    <td><a href="#" class="text-primary">Wallet Top-up</a></td>
                                                    <td>Michael</td>
                                                    <td class="text-success">OSYw129891298</td>
                                                    <td  class="text-success">sucess</td>
                                                    <td >2hrs ago</td>
                                                </tr><!--end tr-->     
                                                <tr>                                                        
                                                    <td><a href="#" class="text-primary">New Account Created</a></td>
                                                    <td>Kachi</td>
                                                    <td class="text-success">Kachi</td>
                                                    <td  class="text-success ">Success</td>
                                                    <td >8hrs ago</td>
                                                </tr> <tr>                                                        
                                                    <td><a href="#" class="text-primary">Admin block Agent account </a></td>
                                                    <td>Dave</td>
                                                    <td class=" text-success">Blocked for fake transactions</td>
                                                    <td  class="text-success ">Success</td>
                                                    <td >10hrs ago</td>
                                                </tr>
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