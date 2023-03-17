
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
                                        <h4 class="page-title">Profile Settings</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">Manage your account</li>
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
                        <div class="col-12">
                            <div class="card">                       
                                <div class="card-body">
                                    <div class="dastone-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                <div class="dastone-profile-main">
                                                    
                                                    <div class="dastone-profile_user-detail">
                                                        <h5 class="dastone-user-name">{{strtoupper($user->name)}}</h5>                                                        
                                                        <p class="mb-0 dastone-user-name-post">{{$user->client->company_name}}</p>                                                        
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                              <div class="col-lg-8 ms-auto align-self-center">
                                                <ul class="list-unstyled personal-detail mb-0">
                                                    <li class=""><i class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b> phone </b> :{{$user->client->company_phone}}</li>
                                                    <li class="mt-2"><i class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b> Email </b> : {{$user->client->company_email}}</li>
                                                    <li class="mt-2"><i class="ti ti-world text-secondary font-16 align-middle me-2"></i> <b> Address </b> : {{$user->client->company_address}} 
                                                       
                                                    </li>                                                   
                                                </ul>
                                               
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->          
                            </div> <!--end card-->    
                        </div><!--end col-->
                    </div><!--end row-->
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="pills-tabContent">
                               
                                <div class="tab-pane fade show active" id="Profile_Settings" role="tabpanel" aria-labelledby="settings_detail_tab">
                                    
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                         <form method="post" action="{{route('users.updateDetails')}}" enctype="multipart/form-data">
                                    @csrf
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title">Personal Information</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>  <!--end row-->                                  
                                                </div><!--end card-header-->
                                                <div class="card-body">                       
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" name="name" type="text" value="{{$user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Company Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" name="company_name" type="text" value="{{$user->client->company_name}}">
                                                        </div>
                                                    </div>
                        
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Contact Phone</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                <input type="text" class="form-control"  name="company_phone"value="{{$user->client->company_phone}}" placeholder="Phone" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Email Address</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="las la-at"></i></span>
                                                                <input type="text" class="form-control" name="company_email" value="{{$user->client->company_email}}" placeholder="Email" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Address</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="la la-globe"></i></span>
                                                                    <input type="text" class="form-control" name="company_address" value="{{$user->client->company_address}}" placeholder="Email" aria-describedby="basic-addon1">
                                                            
                                                             </div>
                                                        </div>
                                                    </div>
                                                        
                                                    
                                                     <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Company Logo</label>
                                                       <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><img src="{{asset('/assets/images/'.$profile_image)}}" width="20px" alt="logo-large" class="rounded-circle"></span>
                                                                    <input type="file" class="form-control" name="company_logo">
                                                             </div>
                                                        </div>
                                                        
                                                    </div>
                                          
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" class="btn btn-sm btn-outline-primary">Update Details</button>
                                                            <button type="button" class="btn btn-sm btn-outline-danger">Cancel</button>
                                                        </div>
                                                    </div>                                                    
                                                </div>                                            
                                            </div>
                                            </form>
                                        </div> <!--end col--> 
                                        
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Change Password</h4>
                                                </div><!--end card-header-->
                                                <div class="card-body"> 
                                                <form method="post" action="{{route('users.passwordUpdate')}}">
                                                @csrf
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Current Password</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" type="password" placeholder="Password">  
                                                        @error('oldPassword')
                                                        <span class="invalid-feedback" role="alert"> 
                                                        {{$message}}
                                                        <span>
                                                        @enderror
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">New Password</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control @error('password') is-invalid @enderror"  name="password" type="password" placeholder="New Password">
                                                         @error('password')
                                                        <span class="invalid-feedback" role="alert"> 
                                                        {{$message}}
                                                        <span>
                                                        @enderror
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Confirm Password</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="Re-Password">
                                                            @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert"> 
                                                        {{$message}}
                                                        <span>
                                                        @enderror
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" class="btn btn-sm btn-outline-primary">Update Password</button>
                                                            <button type="button" class="btn btn-sm btn-outline-danger">Cancel</button>
                                                        </div>
                                                    </div>   
                                                    </form>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                           
                                        </div> <!-- end col -->                                                                              
                                    </div><!--end row-->
                                </div><!--end tab-pane-->
                            </div><!--end tab-content-->
                        </div><!--end col-->
                    </div><!--end row-->

       
            </div>

 
 
 @endsection
