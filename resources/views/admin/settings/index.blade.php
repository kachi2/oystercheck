@extends('layouts.admin')
@section('content')
<style>
    .profile-container {
      width: 100px;
      height: 100px;
      position: relative;
      border: 3px solid #c7c7c7;
      border-radius: 50%;
    }
    .required {
      color: red; 
      margin-left: 5px; 
    }
    .profile-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .camera-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Settings</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Configure user roles, permissions, security, and notifications.</li>
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

        <div class="col-12 pt-3">
            <div class="card" style="background-color: #F5F6FA">
                <div class="card-body"> 
                    <div class="d-flex">
                        <div class="p-2 flex-grow-1">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" style="color: #0E2554">
                                
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#individuals" role="tab" aria-selected="true" style="color: #0E2554">Profile</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#companies" role="tab" aria-selected="false" tabindex="-1" style="color: #0E2554">General</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#actions" role="tab" aria-selected="false" tabindex="-1" style="color: #0E2554">Security</a>
                                </li>  
                            </ul>
                        </div>
                    </div>   
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active p-3" id="individuals" role="tabpanel">
                            @include('admin.settings.profile')
                        </div>

                        <div class="tab-pane fade p-3" id="companies" role="tabpanel">
                            @include('admin.settings.general')
                        </div>

                        <div class="tab-pane fade p-3" id="actions" role="tabpanel">
                            @include('admin.settings.security')
                        </div>
                    </div>        
                </div>
            </div>
        </div> <!-- end col -->
    </div>                  
@endsection
