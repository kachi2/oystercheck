
@extends('layouts.admin')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body " >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-black mb-0 fw-semibold">Successful verifications</p>
                                                    <h3 class="m-0 text-black">{{count($success)}}</h3>
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
                                        <div class="card-body" >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-black mb-0 fw-semibold">Failed verifications</p>
                                                    <h3 class="m-0 text-black">{{count($failed)}}</h3>
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
                                        <div class="card-body" >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-black mb-0 fw-semibold">Pending Request</p>
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
                              
                                <!--end col-->                               
                            </div><!--end row-->
                           
                        </div><!--end col-->
                        
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Verification</h4>
                                        
                                    </div><!--end col-->
                                    
                                </div><!--end row-->  
                                <div class="row">  
                                    <div class="col-lg-9">
                                        <div style="width: 100%; margin: auto;">
                                            <canvas id="myLineChart"></canvas>
                                        </div>
                                    
                                        <script>
                                            var ctx = document.getElementById('myLineChart').getContext('2d');
                                                var chart = new Chart(ctx, {
                                                    type: 'line',
                                                    data: {
                                                        labels: @json($chartData['labels']),
                                                        datasets: @json($chartData['datasets'])
                                                    },
                                                    options: {
                                                        scales: {
                                                            y: {
                                                                beginAtZero: true
                                                            }
                                                        }
                                                    }});
                                        </script>
                                    </div>      
                                    <div class="col-lg-3">
                                        <div class="card">   
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">                      
                                                        <h4 class="card-title">Verifications</h4>                      
                                                    </div><!--end col-->
                                                <!--end col-->
                                                </div>  <!--end row-->                                  
                                            </div><!--end card-header-->                                              
                                            <div class="card-body"> 
                                                <div class="analytic-dash-activity" data-simplebar>
                                                    <div class="activity">
            
                                                   
                                                        
                                                        <div class="activity-info">
                                                            
                                                            <div class="activity-info-text">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <p class=" mb-0 font-16 w-75"> 
                                                                    Success
                                                                    </p>
                                                                    <small class="font-16" style="color: #1A2B88; font-weight:700">2.76%</small>
                                                                </div>    
                                                            </div>
                                                        </div>   
                                                        <div class="activity-info">
                                                            
                                                            <div class="activity-info-text">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <p class="mb-0 font-16 w-75"> 
                                                                    Pending
                                                                    </p>
                                                                    <small class="font-16" style="color: #1A2B88; font-weight:700">2.76%</small>
                                                                </div>    
                                                            </div>
                                                        </div>   
                                                        <div class="activity-info">
                                                            
                                                            <div class="activity-info-text">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <p class=" mb-0 font-16 w-75"> 
                                                                    Failed
                                                                    </p>
                                                                    <small class="font-16" style="color: #1A2B88; font-weight:700">2.76%</small>
                                                                </div>    
                                                            </div>
                                                        </div>   
                                                        
                                                                                                                                                                                        
                                                    </div><!--end activity-->
                                                </div><!--end analytics-dash-activity-->
                                            </div>  <!--end card-body-->                                     
                                        </div><!--end card--> 
                                    </div> <!--end col-->  
                                </div>                                                   
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    
                     

                </div><!-- container -->
@endsection