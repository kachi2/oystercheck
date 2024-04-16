@php 
 use Illuminate\Support\Carbon;

@endphp

@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Adddress verification Report</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"></li>
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url()->previous() }}">
                            <i class="fa fa-arrow-left me-2 font-15"></i>
                            <span class="card-title">Back</span>
                        </a>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="my-4 fw-semibold text-dark font-16">Address Report - {{$address_verification->reference_id}}</h4>
                                    <div>
                                        <a id="printBtn" class="btn btn-primary btn-square">Print</a>
                                        <a id="downloadBtn" class="btn btn-primary btn-square">Download Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"  id="pdfContent">
                            <div class="col-12">
                                @if($address_verification->status == 'pending')
                                <div class="alert custom-alert alert-purple icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-clock-outline alert-icon text-purple align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0">Pending</h5>
                                            <span>Your address verification request is yet to be accepted by our agent or is currently in progress.</span>
                                        </div>
                                    </div>
                                </div>
                                @elseif($address_verification->status == 'completed' && $address_verification->task_status == 'VERIFIED')
                                <div class="alert custom-alert alert-success icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-check-outline alert-icon text-success align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-success">Completed and Verified</h5>
                                            <span>Your Address verification request have been completed and confirmed verified.</span>
                                        </div>
                                    </div>
                                </div>
                                @elseif($address_verification->status == 'awaiting_reschedule')
                                <div class="alert custom-alert alert-info icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="fas fa-hourglass-start alert-icon text-info align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-info">Awaitiing Reschedule</h5>
                                            <span>Your Address verification request is awaiting schedule as agent wasn't able to access the location due to violence in that area.</span>
                                        </div>
                                    </div>
                                </div>
                                @elseif($address_verification->status == 'completed' && $address_verification->task_status == 'NOT_VERIFIED')
                                <div class="alert custom-alert alert-warning icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-off-outline alert-icon text-warning align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-warning">Completed and Not Verified</h5>
                                            <span>Your Address verification request have been completed and marked not verified. Candidate does not live here or address does not exist or is not accessible.</span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="alert custom-alert alert-danger icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="far fa-times-circle alert-icon text-danger align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-danger">Cancelled</h5>
                                            <span>Your Address verification request have been cancelled due to incomplete or incorrect address details</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-4">
                                <div class="pt-2 px-2 mb-2 font-15"><span class="text-muted mr-2">Verification Id :</span> {{$address_verification->reference_id}}</div>
                            </div>
                            <div class="col-md-8">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Verification Type :</span> {{$slug->name}}</div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Created At:</span> {{ date('jS F Y, h:iA', strtotime($address_verification->created_at))}}</div>
                            </div>
                            @if($address_verification->accepted_at != null)
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Accepted At :</span> {{ date('jS F Y, h:iA', strtotime($address_verification->accepted_at))}}</div>
                            </div>
                            @endif

                            @if($address_verification->start_date != null)
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Start Date :</span> {{date('jS F Y, h:iA', strtotime($address_verification->start_date))}}</div>
                            </div>
                            @endif
                            @if($address_verification->end_date != null)
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">End Date :</span> {{ date('jS F Y, h:iA', strtotime($address_verification->end_date))}}</div>
                            </div>
                            @endif
                            @if($address_verification->completed_at != null)
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Completed At :</span> {{ date('jS F Y, h:iA', strtotime($address_verification->completed_at))}}</div>
                            </div>
                            @endif
                            @if($address_verification->submitted_at != null)
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Submitted At :</span> {{ date('jS F Y, h:iA', strtotime($address_verification->submitted_at))}}</div>
                            </div>
                            @endif
                            @if($address_verification->revalidation_date != null)
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Revalidated At :</span> {{ date('jS F Y, h:iA', strtotime($address_verification->revalidation_date))}}</div>
                            </div>
                            @endif
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Initiated At :</span> {{Auth()->user()->name}}</div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Estimated Turn Around Time :</span> 3 days</div>
                            </div>
                            <div class="col-12">
                                <div class="mt-2 mb-2 px-2 font-15"><span class="text-muted mr-2">Task Description :</span> {{$address_verification->description}}</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="accordion" id="personalInformation">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingOne">
                                            <button class="accordion-button fw-semibold font-16" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Personal Information
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#personalInformation">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-4 align-self-center py-4 mb-3 mb-lg-0">
                                                        <div class="dastone-profile-main">
                                                            <div class="dastone-profile-main-pic">
                                                                <img src="{{$address_verification->image}}" alt="" height="110" class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row border-bottom mb-5">

                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">First Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->first_name}}</div>
                                                    </div>
                                                    @if($address_verification->middle_name != null)
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Middle Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->middle_name}}</div>
                                                    </div>
                                                    @endif
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Last Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->last_name}}</div>
                                                    </div>
                                                    @if($address_verification->dob != null)
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Date of Birth : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->dob}}</div>
                                                    </div>
                                                    @endif
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Phone : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->phone}}</div>
                                                    </div>
                                                    @if($address_verification->email != null)
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">email : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->email}}</div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @if($address_verification->guarantor != null)
                            <div class="col-12">
                                <div class="accordion" id="guarantorInformation">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingOneTwo">
                                            <button class="accordion-button fw-semibold font-16" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneTwo" aria-expanded="true" aria-controls="collapseOneTwo">
                                                Guarantor's information
                                            </button>
                                        </h5>
                                        <div id="collapseOneTwo" class="accordion-collapse" aria-labelledby="headingOneTwo" data-bs-parent="#guarantorInformation">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-4 align-self-center py-4 mb-3 mb-lg-0">
                                                        <div class="dastone-profile-main">
                                                            <div class="dastone-profile-main-pic">
                                                                <img src="{{$address_verification->guarantor['photo']}}" alt="" height="110" class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row border-bottom mb-5">

                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">First Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->guarantor['firstName']}}</div>
                                                    </div>
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Last Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->guarantor['lastName']}}</div>
                                                    </div>
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Phone : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->guarantor['mobile']}}</div>
                                                    </div>
                                                    @if($address_verification->guarantor['email'] != null)
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">email : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->guarantor['email']}}</div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($address_verification->business != null)
                            <div class="col-12">
                                <div class="accordion" id="businessInformation">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingOneThree">
                                            <button class="accordion-button fw-semibold font-16" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneThree" aria-expanded="true" aria-controls="collapseOneThree">
                                                Business information
                                            </button>
                                        </h5>
                                        <div id="collapseOneThree" class="accordion-collapse" aria-labelledby="headingOneThree" data-bs-parent="#businessInformation">
                                            <div class="accordion-body">
                                                <div class="row border-bottom mb-5">
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->business['name']}}</div>
                                                    </div>
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Last Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->business['email']}}</div>
                                                    </div>
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Phone : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->business['mobile']}}</div>
                                                    </div>
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Registration Number : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->business['registrationNumber']}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="col-12">
                                <div class="accordion" id="addressDetails">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingTwo">
                                            <button class="accordion-button fw-semibold font-16" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                Address
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse" aria-labelledby="headingTwo" data-bs-parent="#addressDetails">
                                            <div class="accordion-body pt-0">
                                                <div class="row mb-5">
                                                    @if($address_verification->address['flatNumber'] != null)
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Flat Number : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['flatNumber']}}</div>
                                                    </div>
                                                    @endif
                                                    @if($address_verification->address['buildingName'])
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Building Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['buildingName']}}</div>
                                                    </div>
                                                    @endif

                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Building Number : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['buildingNumber']}}</div>
                                                    </div>

                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Street : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['street']}}</div>
                                                    </div>
                                                    @if($address_verification->address['subStreet'] != null)
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Sub-Street : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['subStreet']}}</div>
                                                    </div>
                                                    @endif

                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">State : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['state']}}</div>
                                                    </div>
                                                    @if($address_verification->address['city'] != null)
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">City : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['city']}}</div>
                                                    </div>
                                                    @endif
                                                    @if($address_verification->address['lga'] != null)
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">LGA : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['lga']}}</div>
                                                    </div>
                                                    @endif
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Country : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->address['country']}}</div>
                                                    </div>
                                                    @if($address_verification->status != 'pending')

                                                    <div class="col-12 py-4 border-top pb-3">
                                                        <div class="fw-semibold m-0 font-15 mb-2">Address Location : </div>
                                                        <div class="w-100 overflow-hidden rounded">
                                                            {{-- <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12094.57348593182!2d-74.00599512526003!3d40.72586666928451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f988156a9%3A0xd54629bdf9d61d68!2sBroadway-Lafayette%20St!5e0!3m2!1spl!2spl!4v1624523797308!5m2!1spl!2spl"
                                                            class="h-100 w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                                                            {{-- <iframe src="{{$address_verification->map_address_url}}" width="100%" height="275" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                            </iframe> --}}


                                                            <div style="text-decoration:none; overflow:hidden">
                                                            <div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;">
                                                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q={{$address_verification->address['buildingNumber']}}+{{$address_verification->address['street']}}+{{$address_verification->address['city']}}+{{$address_verification->address['lga']}},&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                                                            </div><a class="my-codefor-googlemap" href="https://www.bootstrapskins.com/themes" id="make-map-data"> </a>
                                                            </div>


                                                        </div>
                                                           
                                                    </div>



                                                    <div class="col-6 d-block col-sm-3 col-xl-3 d-sm-flex">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted">Longitude : </div>
                                                        <div class="fw-normal font-15">{{$address_verification->address['latlong']['lon']}}</div>
                                                    </div>
                                                    <div class="col-6 d-block col-sm-3 col-xl-3 d-sm-flex">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted">Latitude : </div>
                                                        <div class="fw-normal font-15">{{$address_verification->address['latlong']['lat']}}</div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            @if($address_verification->status != 'pending')
                            <div class="col-12">
                                <div class="accordion" id="images">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingThree">
                                            <button class="accordion-button fw-semibold font-15" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                Images
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse" aria-labelledby="headingThree" data-bs-parent="#images">
                                            <div class="accordion-body">
                                                <div class="row mb-5">
                                                    @empty($address_verification->images)
                                                    <div class="col-12 text-center py-3">No Images Available</div>
                                                    @else
                                                    @foreach($address_verification->images as $image)
                                                    <div class="mr-2" style="width: 8rem; height: 8rem;">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageView{{$loop->iteration}}">
                                                            <img src="{{$image['filePath']}}" alt="" class="img-fluid rounded">
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                    @endempty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($address_verification->images))
                            @foreach($address_verification->images as $image)
                            <div class="modal fade" id="imageView{{$loop->iteration}}" tabindex="-1" aria-labelledby="imageView{{$loop->iteration}}" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content" style="background:none">
                                        <div class="modal-header border-0" style="background:none">
                                            <h6 class="modal-title m-0" id="imageView"></h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!--end modal-header-->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12 text-center align-self-center">
                                                    <img src="{{$image['filePath']}}" alt="" class="img-fluid" width="{{$image['width']}}" height="{{$image['height']}}">
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end modal-body-->
                                    </div>
                                    <!--end modal-content-->
                                </div>
                                <!--end modal-dialog-->
                            </div>
                            @endforeach
                            @endif
                           <div class="col-12">
                                <div class="accordion" id="notes">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingFour">
                                            <button class="accordion-button fw-semibold font-15" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                Notes
                                            </button>
                                        </h5>
                                        <div id="collapseFour" class="accordion-collapse" aria-labelledby="headingFour" data-bs-parent="#notes">
                                            <div class="accordion-body">
                                                <div class="row mb-5">
                                                    @empty($address_verification->notes)
                                                    <div class="col-12 text-center py-3">No Notes Available</div>
                                                    @else
                                                    @foreach($address_verification->notes as $note)
                                                    <div class="col-12 py-2">
                                                        <div class="media">
                                                            <div class="me-3 align-self-center">
                                                                <i class="far fa-sticky-note font-20"></i>
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <h6 class="m-0 font-15">{{$note['note']}} </h6>
                                                                <p class="mb-0 text-muted font-13">{{$note['createdAt']}}</p>
                                                            </div>
                                                            <!--end media body-->
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endempty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="col-12">
                                <div class="accordion" id="buildingDescription">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingFive">
                                            <button class="accordion-button fw-semibold font-15" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                Building Description
                                            </button>
                                        </h5>
                                        <div id="collapseFive" class="accordion-collapse" aria-labelledby="headingFive" data-bs-parent="#notes">
                                            <div class="accordion-body pt-0">
                                                <div class="row mb-5">

                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Building has Gate : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->gate_present == true ? 'Yes' : 'No'}}</div>
                                                    </div>
                                                    @if($address_verification->gate_present == true)
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Color of Gate : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->gate_color}}</div>
                                                    </div>
                                                    @endif
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Building Type : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->building_type}}</div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Building Color : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->building_color}}</div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Closest Landmark : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->closest_landmark}}</div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Availability Confirmed By : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->availability_confirmed_by}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="accordion" id="otherInformation">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingSix">
                                            <button class="accordion-button fw-semibold font-15" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                Other Information
                                            </button>
                                        </h5>
                                        <div id="collapseSix" class="accordion-collapse" aria-labelledby="headingSix" data-bs-parent="#otherInformation">
                                            <div class="accordion-body pt-0">
                                                <div class="row mb-5">
                                                    @if($address_verification->additional_info != null)
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Additional Info : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->additional_info}}</div>
                                                    </div>
                                                    @elseif($address_verification->incident_report != null)
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Incident Report : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->incident_report}}</div>
                                                    </div>
                                                    @elseif($address_verification->reasons != null)
                                                    <div class="col-xs-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Reason for Incompletion : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->reasons}}</div>
                                                    </div>
                                                    @else
                                                    <div class="col-12 text-center py-3">No Other Information Available</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             {{-- <div class="col-12">
                                <div class="accordion" id="agentDetails">
                                    <div class="accordion-item border-0">
                                        <h5 class="accordion-header m-0" id="headingSix">
                                            <button class="accordion-button fw-semibold font-15" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                Agent Details
                                            </button>
                                        </h5>
                                        <div id="collapseSix" class="accordion-collapse" aria-labelledby="headingSix" data-bs-parent="#agentDetails">
                                            <div class="accordion-body pt-0">
                                                <div class="row">
                                                    <div class="col-lg-4 align-self-center py-4 mb-3 mb-lg-0">
                                                        <div class="dastone-profile-main">
                                                            <div class="dastone-profile-main-pic">
                                                                <img src="{{$address_verification->agent['photo']}}" alt="" height="110" class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row border-bottom mb-5">
                                                    <div class="col-12 col-md-6 d-flex py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3 text-muted col-4">Agent's Name : </div>
                                                        <div class="fw-normal font-15 col-8">{{$address_verification->agent['firstName']}} {{$address_verification->agent['lastName']}}</div>
                                                    </div>
                                                    <div class="col-12 col-md-12 d-block py-4 border-top">
                                                        <div class="fw-semibold m-0 font-15 me-3">Signature : </div>
                                                        <div class="dastone-profile-main">
                                                            <div class="dastone-profile-main-pic">
                                                                <img src="{{$address_verification->agent['signature']}}" alt="" height="80" class="rounded">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            @else 

                       
                            <div class="modal fade" id="awaiting_response_modal" data-keyboard="false"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-3 text-center align-self-center">
                                                    <img src="assets/images/widgets/btc.png" alt="" class="img-fluid">
                                                </div><!--end col-->
                                                <div class="col-lg-9">
                                                    <h5 id="title">Report will be available in</h5>
                                                   
                                                    <table> 
                                                        <tr id="timer">
                                                        <th style="font-size:34px" id="days">00 : </th>
                                                        <th style="font-size:34px" id="hours">00 : </th>
                                                        <th style="font-size:34px" id="minutes">00 : </th>
                                                        <th style="font-size:34px" id="seconds"> 00 </th>
                                                    </tr>
                                                    <tr id="timerHolder">
                                                        <td>Days </td>
                                                        <td>Hours</td>
                                                        <td>Minutes</td>
                                                        <td>Seconds</td>
                                                    </tr>
                                                     
                                                

                                                    </table>
                                                </div><!--end col-->

                                            </div><!--end row-->   
                                            <p style="text-align:center; padding-top:10px" id="reporter">   Report will be updated automatically once its available
                                            <br> <span class="badge bg-info pt-2" id="dater">Check Back on {{Date('Y-m-d H:i:s', strtotime($address_verification->expected_report_date))}} </span></p>

                                        </div><!--end modal-body-->
                                        
                                        <div class="modal-footer">                                                    
                                            <button type="button" class="btn btn-soft-info btn-sm" data-bs-dismiss="modal" >View Report</button>
                                        </div><!--end modal-footer-->
                                    </div><!--end modal-content-->
                                </div><!--end modal-dialog-->
                            </div><!--end modal-->
                          

                            @endif
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        @endsection
        @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('/assets/js/poppins64/Poppins-Bold-bold.js')}}"></script>
        <script src="{{asset('/assets/js/poppins64/fa-solid-900-bold.js')}}"></script>

        <script>
               window.jsPDF = window.jspdf.jsPDF;
            window.html2canvas = html2canvas;
            let downloadBtn = document.getElementById('downloadBtn');
            downloadBtn.addEventListener("click", createPdf);

            let printBtn = document.getElementById('printBtn');
            printBtn.addEventListener("click", printPage);

            function createPdf() {
                html2canvas(document.getElementById('pdfContent')).then(canvas => {
                    let source = $('#pdfContent')[0];
                    const doc = new jsPDF({
                        unit: "pt",
                        orientation: 'portrait'
                    });

                    let margins = {
                        top: 50,
                        bottom: 50,
                        left: 50,
                        width: 500
                    }

                    let specialElementHandlers = {
                        '#hasCharr': function(element, renderer) {
                            return true;
                        }
                    };

                    doc.setFont('Poppins-Bold', 'bold');
                    doc.html(source, {
                        x: margins.left,
                        y: margins.top,
                        width: margins.width,
                        windowWidth: 900,
                        elementHandlers: specialElementHandlers,
                        callback: function() {
                            doc.save("another.pdf", margins)
                        }
                    });
                });
            }

            function printPage() {
                window.print();
                // setTimeout(() => {
                //     window.close();
                // }, 10000);
            }

        $(window).on('load', function(){
           $('#awaiting_response_modal').modal('show', {keyboard:false, backdrop: 'static'});
        });

        let times = {!! json_encode($address_verification->expected_report_date) !!}
        console.log(times);
        Initiated = new Date(times).getTime();
     
       let X =  setInterval(() => {
        let reportDate = new Date().getTime();
        let reports =  Initiated - reportDate;
        let Days = Math.floor(reports / (1000 * 60 * 60 * 24));
        let Hours = Math.floor((reports % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let Minutes = Math.floor((reports % (1000 * 60 * 60)) / (1000 * 60)); 
        let Seconds = Math.floor((reports % (1000 * 60)) / (1000)); 

        document.getElementById("days").innerHTML  =  num(Days) + ' : ';
        document.getElementById("hours").innerHTML =  num(Hours) + ' : ';
        document.getElementById("minutes").innerHTML =  num(Minutes) + ' : ';
        document.getElementById("seconds").innerHTML = num(Seconds);
        
        if(reports < 0){
            clearInterval(X);
        document.getElementById("days").innerHTML  =   '';
        document.getElementById("hours").innerHTML =  '  ';
        document.getElementById("minutes").innerHTML =   '  ';
        document.getElementById("timerHolder").hidden = true;
        document.getElementById("timer").hidden = true;
        document.getElementById("reporter").hidden = true;
        document.getElementById("dater").hidden = true;
        document.getElementById("title").innerHTML =   '<span style="color:red; font-size:30px; font-weight:bolder">  Awaiting Period Completed, Please Check report </span>';
        }
        }, 1000);

    

        function num(n){
            return n > 9 ? "" +n : "0" +n; 
        }
        </script>
        @endsection