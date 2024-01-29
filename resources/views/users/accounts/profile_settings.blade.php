@extends('layouts.app')
@section('style')
<style>
    .validated{
        color:rgb(8, 149, 8);
    }
    .validated:after {
  position: relative;
  left: 5px;
  content: "✔";
    }
    .errors{
        color:red;
    }
    .errors:after {
  position: relative;
  left: 5px;
  content: "✖";
}
</style>
<link rel="stylesheet" href="{{asset('plugins/jquery-steps/jquery.steps.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
@endsection
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
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div id="user_map" class="pro-map leaflet-container leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag" style="height: 100px; position: relative; outline: none;" tabindex="0">
                           
                       </div>
                    </div>
                    <!--end card-body-->
                    <div class="card-body">
                        <div class="dastone-profile">
                            <div class="row">
                                <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                    <div class="dastone-profile-main">
                                        <div class="dastone-profile-pic">
                                            @if($logon_user->client->logo == null)
                                            <div style="display: flex;width:128px;height:128px;background-color:rgba(59, 130, 246, 0.5);vertical-align:middle;align-items:center;justify-content:center;overflow:hidden" class="rounded-circle">
                                                <div class="fw-semibold text-white" style="font-size: 36px;font-weight:700">{{strtoupper(substr(auth()->user()->firstname,0,1))}}</div>
                                            </div>
                                            @else
                                            {{-- <img src="{{asset('assets/images/placeholder.png')}}" alt="" height="110" class="rounded-circle"> --}}
                                            <img src="{{asset('assets/images/'.$logon_user->client->logo)}}" height="50" width="60px" class="rounded-circle"> 
                                            <!-- <img src="{{auth()->user()->image}}" alt="logo-large" class="rounded-circle thumb-xs">  -->
                                            @endif
                                            <span class="dastone-profile_main-pic-change">
                                                <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                        <div class="dastone-profile_user-detail">
                                            <h5 class="dastone-user-name">{{ucwords($user->firstname).' '. ucwords($user->lastname)}}</h5>
                                            <p class="mb-0 dastone-user-name-post">{{ucwords($user->client->company_name)}} 
                                                @if($client->is_activated != 1 ) <span class="badge bg-danger">  Unverified<small> <i class="fa fa-times"></i></small> </span> 
                                                @else <span class="badge bg-success">  Verified<small> <i class="fa fa-check"></i> </small> </span> @endif 
                                                </p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-4 ms-auto align-self-center">
                                    <ul class="list-unstyled personal-detail mb-0">
                                        <li class=""><i class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b> phone </b> : {{$user->phone}}</li>
                                        <li class="mt-2"><i class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b> Email </b> : {{$user->email}}</li>
                                        <li class="mt-2"><i class="ti ti-briefcase text-secondary font-16 align-middle me-2"></i> <b> Business </b> : {{ucwords($user->client->company_name)}}</li>
                                    </ul>

                                </div>
                                <!--end col-->
                                <div class="col-lg-4 align-self-center">
                                    <ul class="list-unstyled personal-detail mb-0">
                                        <li class=""><i class="ti ti-medall me-2 text-secondary font-16 align-middle"></i> <b> Role </b> : {{$user->user_type == 2? 'User Account' : ''}}</li>
                                        <li class="mt-2"><i class="ti ti-pencil-alt text-secondary font-16 align-middle me-2"></i> <b> Date Registered </b> : {{date('jS F Y, h:iA', strtotime($user->created_at))}}</li>
                                        <!-- <li class="mt-2"><i class="ti ti-briefcase text-secondary font-16 align-middle me-2"></i> <b>  </b> : {{ucwords($user->client->company_name)}}</li> -->
                                    </ul>
                                    <!--end list -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end f_profile-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="pb-4">
            <ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile_tab" data-bs-toggle="pill" href="#profile">Profile Information @if($profileInfo == null ) <span class="badge bg-danger"><small><i class="fa fa-times"></i></small> </span> @else  <span class="badge bg-success"><small><i class="fa fa-check"></i></small> </span> @endif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="business_activation_tab2" data-bs-toggle="pill" href="#business_activation2">Basic Information @if($basicInfo == null ) <span class="badge bg-danger"><small><i class="fa fa-times"></i></small> </span> @else  <span class="badge bg-success"><small><i class="fa fa-check"></i></small> </span> @endif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="business_activation_tab" data-bs-toggle="pill" href="#business_activation"> Business Contact @if($busContact == null ) <span class="badge bg-danger"><small><i class="fa fa-times"></i></small> </span> @else  <span class="badge bg-success"><small><i class="fa fa-check"></i></small> </span> @endif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="business_activation_tab3" data-bs-toggle="pill" href="#business_activation3">Verify Documents @if($Vdocs == null ) <span class="badge bg-danger"><small><i class="fa fa-times"></i></small> </span> @else  <span class="badge bg-success"><small><i class="fa fa-check"></i></small> </span> @endif</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" id="account_settings_tab" data-bs-toggle="pill" href="#account_settings">Notification Settings</a>
                </li> --}}
                
            </ul>
        </div>
        <!--end card-body-->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active " id="profile" role="tabpanel" aria-labelledby="profile_tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div>
                                    <div class="card-body ">
                                        <form id="form_profile"  method="post" action="{{route('form_profileUpdate')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="firstName">First Name</label>
                                                    <input type="text" class="form-control  @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder=" " value="{{$user->firstname}}">
                                                    @error('firstname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="lastName">Last Name</label>
                                                    <input type="text" class="form-control  @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="" value="{{$user->lastname}}">
                                                    @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="email">Email</label>
                                                    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder=" Email" value="{{$user->email}}" readonly>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="phone">Phone</label>
                                                    <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter Phone" value="{{$user->phone}}">
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="my-3">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                                <!-- <button type="button" class="btn btn-danger">Cancel</button> -->
                                            </div>
                                        </form>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                    <div class="card-body ">
                                        <form id="form_password"  method="post" action="{{route('form_PasswordeUpdate')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="currentPassword">Current Password <span class="text-red ms-1">*</span></label>
                                                    <input type="password" class="form-control  @error('currentPassword') is-invalid @enderror" id="currentPassword" name="currentPassword" placeholder="Enter Current Password" value="">
                                                    @error('currentPassword')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label "  for="newPassword">New Password</label>
                                                    <input type="password" class="form-control  @error('newPassword') is-invalid @enderror" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{9,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required id="inputsPassword" name="newPassword" placeholder="Enter Password" value="">
                                                    @error('newPassword')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="newPasswordConfirmation">Confirm New Password</label>
                                                    <input type="password" class="form-control   @error('newPasswordConfirmation') is-invalid @enderror" id="newPasswordConfirmation" name="newPasswordConfirmation" placeholder="Confirm New Password" value="">
                                                    @error('newPasswordConfirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <span id="confam"> </span>
                                                  
                                                </div>
                                             
                                            </div>
                                            <ul class="" id="parsley-id-17">
                                                Password Must Contains
                                                <li class="errors" id="capital">Capital Letter </li>
                                                <li class="errors" id="lower">A Small Letter.</li>
                                                <li class="errors" id="number">A Number.</li>
                                                <li class="errors" id="len">Passsword Must be more than 6 letters</li>
                                            </ul>
                                            <div class="my-3">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                                <!-- <button type="button" class="btn btn-danger">Cancel</button> -->
                                            </div>
                                        </form>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Activities</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th class="px-2 py-3">Initiator</th>
                                                        <th class="px-2 py-3">Activity</th>
                                                        <th class="px-2 py-3">IP Address</th>
                                                        <th class="px-2 py-3">Device</th>
                                                        <th class="px-2 py-3">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($activities as $activity )
                                                    <tr>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">{{$activity->user->firstname}}</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" >
                                                                <div class="px-2 py-3">{{$activity->activity}}</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">{{$activity->ip_address}}</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">{{substr($activity->user_agent,0,20)}}</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">{{$activity->created_at}}</div>
                                                            </a>
                                                        </td>

                                                        
                                                    </tr> 
                                                    @empty
                                                        
                                                    @endforelse
                                                 
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end tab-pane-->
                 
                    <div class="tab-pane fade " id="business_activation2" role="tabpanel" aria-labelledby="business_activation_tab2">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Basic Information</h4>
                                    </div>
                                    <div class="card-body">
                                    <form id="basic_information"  method="post" action="{{route('basic_information')}}" enctype="multipart/form-data">
                                            @csrf
                                           
                                                <div class="row">
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label " for="businessLogo">Business Logo <span class="text-red ms-1">*</span></label>
                                                        <div class="card-body p-0">
                                                            <img src="{{asset('assets/images/'.$client->logo)}}" width="200px">
                                                            <input type="file" id="input-file-now" class="dropify" data-height="100" name="businessLogo"  />
                                                        </div>
                                                        @error('businessLogo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label class="form-label " for="businessName"> Registered Business Name<span class="text-red ms-1">*</span></label>
                                                        <input type="text" class="form-control   @error('businessName') is-invalid @enderror" value="{{$client->company_name}}" id="businessName" name="businessName" placeholder="" >
                                                        @error('businessName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                   
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="registrationNumber">Registration Number<span class="text-red ms-1">*</span></label>
                                                        <input type="text" class="form-control  @error('registrationNumber') is-invalid @enderror" value="{{$client->reg_number}}" id="registrationNumber" name="registrationNumber" placeholder="">
                                                        @error('registrationNumber')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="taxId">Tax Identification Number</label>
                                                        <input type="text" class="form-control  @error('taxId') is-invalid @enderror" id="taxId" name="taxId" placeholder="" value="{{$client->	tax_number}}">
                                                        @error('taxId')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label " for="businessDescription">Business Description<span class="text-red ms-1">*</span></label>
                                                        <textarea class="form-control  @error('businessDescription') is-invalid @enderror" rows="5" id="businessDescription" name="businessDescription" placeholder="" style="height: 125px;"> {{$client->description}}</textarea>
                                                        <!-- <input type="text" class="form-control  @error('businessDescription') is-invalid @enderror" id="businessDescription" name="businessDescription" placeholder="Business Description" value=""> -->
                                                        @error('businessDescription')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="my-3">
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    <!-- <button type="button" class="btn btn-danger">Cancel</button> -->
                                                </div>
                                        </form>
                                            <!--end fieldset-->
                                        <!--end form-->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>


                    <div class="tab-pane fade " id="business_activation" role="tabpanel" aria-labelledby="business_activation_tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Business Contact</h4>
                                    </div>
                                    <div class="card-body">
                                        <form id="contact_information"  method="post" action="{{route('contact_information')}}" enctype="multipart/form-data">
                                            @csrf
                                                <div class="row">
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="companyEmail"> Company Email<span class="text-red ms-1">*</span></label>
                                                        <input type="text" class="form-control  @error('companyEmail') is-invalid @enderror" id="companyEmail" name="companyEmail" placeholder="" value="{{$client->company_email}}" @if(!empty($client->company_email)) readonly @endif />
                                                            
                                                        
                                                        @error('companyEmail')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label" for="companyPhone"> Company Phone<span class="text-red ms-1">*</span></label>
                                                        <input type="text" class="form-control @error('companyPhone') is-invalid @enderror" id="companyPhone" name="companyPhone" placeholder="" value="{{$client->company_phone}}">
                                                        @error('companyPhone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="companyWebsite"> Company Website</label>
                                                        <input type="text" class="form-control  @error('companyWebsite') is-invalid @enderror" id="companyWebsite" name="companyWebsite" placeholder="" value="{{$client->website}}">
                                                        @error('companyWebsite')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="facebookLink"> Facebook Link</label>
                                                        <input type="text" class="form-control  @error('facebook') is-invalid @enderror" id="facebook" name="facebook" placeholder="" value="{{$client->facebook}}">
                                                        @error('facebook')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="instagramLink">Instagram Link</label>
                                                        <input type="text" class="form-control  @error('instagram') is-invalid @enderror" id="instagram" name="instagram" placeholder="" value="{{$client->instagram}}">
                                                        @error('instagram')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="twitterLink">LinkedIn Link</label>
                                                        <input type="text" class="form-control  @error('linkedin') is-invalid @enderror" id="linkedin" name="linkedin" placeholder="" value="{{$client->linkedin}}">
                                                        @error('linkedin')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label " for="registeredCompanyAddress">Registered Company Address<span class="text-red ms-1">*</span></label>
                                                        <textarea class="form-control  @error('registeredCompanyAddress') is-invalid @enderror" rows="5" id="registeredCompanyAddress" name="registeredCompanyAddress" placeholder="" style="height: 60px;"> {{$client->company_address}}</textarea>
                                                        @error('registeredCompanyAddress')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                   
                                                </div>
                                                <div class="my-3">
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    <!-- <button type="button" class="btn btn-danger">Cancel</button> -->
                                                </div>
                                            <!--end fieldset-->
                                        </form>
                                            <!--end fieldset-->
                                        <!--end form-->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>

                       
                    <div class="tab-pane fade " id="business_activation3" role="tabpanel" aria-labelledby="business_activation_tab3">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Verify Documents</h4>
                                    </div>
                                    <div class="card-body">
                                        <form id="contact_information"  method="post" action="{{route('document_information')}}" enctype="multipart/form-data">
                                            @csrf
                                            
                                                <div class="row">
                                                    <div class="col-12 mb-3">
                                                        <img src="{{asset('assets/images/'.$client->cac)}}" width="200px"><br>
                                                        <label class="form-label " for="businessRegistrationCert">Certificate of Business Registration from CAC <span class="text-red ms-1">*</span></label>
                                                        <div class="card-body p-0">
                                                            <input type="file" id="input-file-now" class="dropify" data-height="100" name="businessRegistrationCert" />
                                                        </div>
                                                        @error('businessRegistrationCert')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="col-12 mb-3">
                                                        <img src="{{asset('assets/images/'.$client->others)}}" width="100px"> <br>
                                                        <label class="form-label " for="supportingDocument">Any Other Supporting Document </label>
                                                        <div class="card-body p-0">
                                                            <input type="file" id="input-file-now" class="dropify" data-height="100" name="supportingDocument" />
                                                        </div>
                                                        @error('supportingDocument')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                           
                                     
                                                <div class="row">
                                                    <div class="form-group row my-3">
                                                        <div class="col-sm-12">
                                                            <div class="custom-control custom-switch switch-success">
                                                                <input type="checkbox" class="custom-control-input me-2" id="customSwitchSuccess2" required>
                                                                <label class="form-label text-muted" for="customSwitchSuccess2">You agree to Oysterchecks <a href="{{route('terms')}}" class="text-primary">Terms of Use</a></label>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                                <div class="my-3">
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    <!-- <button type="button" class="btn btn-danger">Cancel</button> -->
                                                </div>
                                        </form>
                                            <!--end fieldset-->
                                        <!--end form-->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>

                

                    {{-- <div class="tab-pane fade" id="account_settings" role="tabpanel" aria-labelledby="account_settings_tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title">Notification Settings</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <div class="py-3 px-4 bg-light">
                                                    <h2 class="font-16 m-0 lh-base">Notification Settings</h2>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                                    <div class="m-0 font-14 me-3 text-muted col-4">Verification ID:</div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                                                <button type="button" class="btn btn-sm btn-outline-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('script')


    <script src="{{asset('plugins/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.form-wizard.init.js')}}"></script>
    <script src="{{asset('assets/js/profile.js')}}"></script>
    <!-- <script src="{{asset('plugins/select2/select2.min.js')}}"></script> -->



    <script>


        $('#form_profile').submit(function(e){
            e.preventDefault();
            var xhr = form_request('#form_profile');
            xhr.done(function(result){
             if(result.message){
                toastr.success(result.message);
             }else{
                console.log(result.errors)
                toastr.error(result.errors);
             }
            });
        })

        inputs = document.getElementById('inputsPassword');
        inputs.onkeyup = function(){
             PasswordValidation(inputs)
        }

        confamPass = document.getElementById('newPasswordConfirmation');
        errorMsg = document.getElementById('confam');
        confamPass.onkeyup = function(){
            confirmPassowrd(inputs, confamPass, errorMsg)
        }


        $('#form_password').submit(function(e){
            e.preventDefault();
            var xhr = form_request('#form_password');
            xhr.done(function(result){
             if(result.message){
                toastr.success(result.message);
             }else{
                console.log(result.errors)
                toastr.error(result.errors);
             }
            });
        });

        $('#basic_information').submit(function(e){
            //e.preventDefault();
            var xhr = form_request('#basic_information');
            xhr.done(function(result){
                console.log(result);
             if(result.success){
                toastr.success(result.message);
             }else{
                console.log(result.errors)
                toastr.error(result.errors);
             }
            });
        });

        $('#contact_information').submit(function(e){
          e.preventDefault();
            var xhr = form_request('#contact_information');
            xhr.done(function(result){
                console.log(result.stat);
             if(result.status){
                toastr.success(result.message);
             }else{
                toastr.error(result.message);
             }
            });
        });
        
        $('#contact_information').submit(function(e){
          e.preventDefault();
            var xhr = form_request('#contact_information');
            xhr.done(function(result){
                console.log(result.stat);
             if(result.status){
                toastr.success(result.message);
             }else{
                toastr.error(result.message);
             }
            });
        });
        
        
            </script>
    @endsection