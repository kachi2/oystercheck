@extends('layouts.app')
@section('style')
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
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
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
                        <div id="user_map" class="pro-map" style="height: 220px"></div>
                    </div>
                    <!--end card-body-->
                    <div class="card-body">
                        <div class="dastone-profile">
                            <div class="row">
                                <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                    <div class="dastone-profile-main">
                                        <div class="dastone-profile-pic">
                                            @if(auth()->user()->image == null)
                                            <div style="display: flex;width:128px;height:128px;background-color:rgba(59, 130, 246, 0.5);vertical-align:middle;align-items:center;justify-content:center;overflow:hidden" class="rounded-circle">
                                                <div class="fw-semibold text-white" style="font-size: 36px;font-weight:700">{{strtoupper(substr(auth()->user()->firstname,0,1))}}</div>
                                            </div>
                                            @else
                                            <img src="{{asset('assets/images/placeholder.png')}}" alt="" height="110" class="rounded-circle">
                                            <!-- <img src="{{auth()->user()->image}}" alt="logo-large" class="rounded-circle thumb-xs">  -->
                                            @endif
                                            <span class="dastone-profile_main-pic-change">
                                                <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                        <div class="dastone-profile_user-detail">
                                            <h5 class="dastone-user-name">{{ucwords($user->firstname).' '. ucwords($user->lastname)}}</h5>
                                            <p class="mb-0 dastone-user-name-post">{{ucwords($user->client->company_name)}}</p>
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
                                        <li class=""><i class="ti ti-medall me-2 text-secondary font-16 align-middle"></i> <b> Role </b> : {{$user->user_type == 2? 'Super Admin' : ''}}</li>
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
                    <a class="nav-link active" id="profile_tab" data-bs-toggle="pill" href="#profile">Profile Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="business_tab" data-bs-toggle="pill" href="#business">Business Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="business_activation_tab" data-bs-toggle="pill" href="#business_activation">Business Activation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account_settings_tab" data-bs-toggle="pill" href="#account_settings">Account Settings</a>
                </li>
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
                                        <form>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="firstName">First Name</label>
                                                    <input type="text" class="form-control  @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="Enter First Name" value="{{$user->firstname}}">
                                                    @error('firstName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="lastName">Last Name</label>
                                                    <input type="text" class="form-control  @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="Enter Last Name" value="{{$user->lastname}}">
                                                    @error('lastName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="email">Email</label>
                                                    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email" value="{{$user->email}}">
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
                                        <form>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="currentPassword">Current Password <span class="text-red ms-1">*</span></label>
                                                    <input type="text" class="form-control  @error('currentPassword') is-invalid @enderror" id="currentPassword" name="currentPassword" placeholder="Enter Current Password" value="">
                                                    @error('currentPassword')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="newPassword">New Password</label>
                                                    <input type="text" class="form-control  @error('newPassword') is-invalid @enderror" id="newPassword" name="newPassword" placeholder="Enter Last Name" value="">
                                                    @error('newPassword')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                    <label class="form-label " for="newPasswordConfirmation">Confirm New Password</label>
                                                    <input type="text" class="form-control  @error('newPasswordConfirmation') is-invalid @enderror" id="newPasswordConfirmation" name="newPasswordConfirmation" placeholder="Confirm New Password" value="">
                                                    @error('newPasswordConfirmation')
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
                                        <h4 class="card-title">Activities</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th class="px-2 py-3">S/N</th>
                                                        <th class="px-2 py-3">Initiator</th>
                                                        <th class="px-2 py-3">Activity</th>
                                                        <th class="px-2 py-3">IP Address</th>
                                                        <th class="px-2 py-3">Device</th>
                                                        <th class="px-2 py-3">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">sgfewg</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">dshgf</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">dfggh</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">dfggh</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">dfggh</div>
                                                            </a>
                                                        </td>

                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">
                                                                    <a href="">View Details</a>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">1234</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">dshgf</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">dfggh</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">dfggh</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">dfggh</div>
                                                            </a>
                                                        </td>

                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">
                                                                    <a href="">View Details</a>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
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
                    <div class="tab-pane fade " id="business" role="tabpanel" aria-labelledby="business_tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Business Information</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 d-flex py-4 px-4 border-bottom">
                                                <div class="m-0 font-14 me-3 text-muted col-2">Country:</div>
                                                <div class="font-14 col-8">$bvn_verification->country</div>
                                            </div>
                                            <div class="col-12 d-flex py-4 px-4 border-bottom">
                                                <div class="m-0 font-14 me-3 text-muted col-2">Country:</div>
                                                <div class="font-14 col-8">$bvn_verification->country</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <div class="tab-pane fade " id="business_activation" role="tabpanel" aria-labelledby="business_activation_tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Activate Your Business</h4>
                                    </div>
                                    <div class="card-body">
                                        <form id="form-vertical" class="form-horizontal form-wizard-wrapper">
                                            <h3>Basic Information</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label " for="businessLogo">Business Logo <span class="text-red ms-1">*</span></label>
                                                        <div class="card-body p-0">
                                                            <input type="file" id="input-file-now" class="dropify" data-height="100" name="businessLogo" />
                                                        </div>
                                                        @error('businessLogo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="businessName"> Registered Business Name<span class="text-red ms-1">*</span></label>
                                                        <input type="text" class="form-control  @error('businessName') is-invalid @enderror" id="businessName" name="businessName" placeholder="Enter Your Rgistered Business Name" value="">
                                                        @error('businessName')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="industry"> Industry<span class="text-red ms-1">*</span></label>
                                                        <select class="form-control  @error('industry') is-invalid @enderror mb-3" style="width: 100% !important; height:36px;" name="industry">
                                                            <option>Please select an industry...</option>
                                                            <!-- <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option> -->
                                                        </select>
                                                        @error('industry')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="registrationNumber">Registration Number<span class="text-red ms-1">*</span></label>
                                                        <input type="text" class="form-control  @error('registrationNumber') is-invalid @enderror" id="registrationNumber" name="registrationNumber" placeholder="Business registration number" value="">
                                                        @error('registrationNumber')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="taxId">Tax Identification Number</label>
                                                        <input type="text" class="form-control  @error('taxId') is-invalid @enderror" id="taxId" name="taxId" placeholder="Tax identification number" value="">
                                                        @error('taxId')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label " for="businessDescription">Business Description<span class="text-red ms-1">*</span></label>
                                                        <textarea class="form-control  @error('businessDescription') is-invalid @enderror" rows="5" id="businessDescription" name="businessDescription" placeholder="Business Description" style="height: 125px;"></textarea>
                                                        <!-- <input type="text" class="form-control  @error('businessDescription') is-invalid @enderror" id="businessDescription" name="businessDescription" placeholder="Business Description" value=""> -->
                                                        @error('businessDescription')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--end fieldset-->

                                            <h3>Business Contact</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="companyEmail"> Company Email<span class="text-red ms-1">*</span></label>
                                                        <input type="text" class="form-control  @error('companyEmail') is-invalid @enderror" id="companyEmail" name="companyEmail" placeholder="Enter Your Company Email" value="">
                                                        @error('companyEmail')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label" for="companyPhone"> Company Phone<span class="text-red ms-1">*</span></label>
                                                        <input type="text" class="form-control @error('companyPhone') is-invalid @enderror" id="companyPhone" name="companyPhone" placeholder="Enter Your Company Phone" value="">
                                                        @error('companyPhone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="companyWebsite"> Company Website</label>
                                                        <input type="text" class="form-control  @error('companyWebsite') is-invalid @enderror" id="companyWebsite" name="companyWebsite" placeholder="Enter Your Company Website" value="">
                                                        @error('companyWebsite')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="facebookLink"> Facebook Link</label>
                                                        <input type="text" class="form-control  @error('facebookLink') is-invalid @enderror" id="facebookLink" name="facebookLink" placeholder="Enter Your Company Facebook Link" value="">
                                                        @error('facebookLink')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="instagramLink">Instagram Link</label>
                                                        <input type="text" class="form-control  @error('instagramLink') is-invalid @enderror" id="instagramLink" name="instagramLink" placeholder="Enter Your Company Instagram Link" value="">
                                                        @error('instagramLink')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-3">
                                                        <label class="form-label " for="twitterLink">Twitter Link</label>
                                                        <input type="text" class="form-control  @error('twitterLink') is-invalid @enderror" id="twitterLink" name="twitterLink" placeholder="Enter Your Company Twitter Link" value="">
                                                        @error('twitterLink')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label " for="registeredCompanyAddress">Registered Company Address<span class="text-red ms-1">*</span></label>
                                                        <textarea class="form-control  @error('registeredCompanyAddress') is-invalid @enderror" rows="5" id="registeredCompanyAddress" name="registeredCompanyAddress" placeholder="Registered Company Address" style="height: 125px;"></textarea>
                                                        @error('registeredCompanyAddress')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label " for="currentCompanyAddress">Current Company Address<span class="text-red ms-1">*</span></label>
                                                        <textarea class="form-control  @error('currentCompanyAddress') is-invalid @enderror" rows="5" id="currentCompanyAddress" name="currentCompanyAddress" placeholder="Current Company Address" style="height: 125px;"></textarea>
                                                        @error('currentCompanyAddress')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--end fieldset-->
                                            <h3>Verification Documents</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-12 mb-3">
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
                                            </fieldset>
                                            <!--end fieldset-->
                                            <h3>Term of Use</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="form-group row my-3">
                                                        <div class="col-sm-12">
                                                            <div class="custom-control custom-switch switch-success">
                                                                <input type="checkbox" class="custom-control-input me-2" id="customSwitchSuccess2">
                                                                <label class="form-label text-muted" for="customSwitchSuccess2">You agree to the Dastone <a href="#" class="text-primary">Terms of Use</a></label>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--end fieldset-->
                                        </form>
                                        <!--end form-->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>

                    <div class="tab-pane fade" id="account_settings" role="tabpanel" aria-labelledby="account_settings_tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title">Account Settings</h4>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-header-->
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
                                                    
                                                    <div class="font-14 col-8 text-break">{{$cac_verification->ref}}</div>
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
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end tab-pane-->
                </div>
                <!--end tab-content-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    @endsection

    @section('script')
    <script src="{{asset('plugins/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.form-wizard.init.js')}}"></script>
    <!-- <script src="{{asset('plugins/select2/select2.min.js')}}"></script> -->
    @endsection