@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Transaction Details</h4>
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
                    <div class="card-header" id="hasChar">
                        <a href="{{ url()->previous() }}">
                            <i class="fa fa-arrow-left me-2 font-15"></i>
                            <span class="card-title">Back</span>
                        </a>
                    </div>
                    <!--end card-header-->
                    <div class="card-body" id="pdfContent">
                        <div class="row">
                            <div class="col-4 mb-4 ms-auto me-auto">
                                <img src="{{asset('/assets/images/logo.png')}}" style="width:100%" alt="Oysterchecks Logo" class="logo-light">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                @if($nin_verification->status == 'pending')
                                <div class="alert custom-alert alert-purple icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-clock-outline alert-icon text-purple align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0">Pending</h5>
                                            <span>A verification request haven't been made.</span>
                                        </div>
                                    </div>
                                </div>
                                @elseif($nin_verification->status == 'found')
                                @if($nin_verification->validations != null && $nin_verification->all_validation_passed == false)
                                <div class="alert custom-alert alert-warning icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-off-outline alert-icon text-warning align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-warning">NIN Found but Not Validated</h5>
                                            <span>Your verification request has been completed and some data do not match.</span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="alert custom-alert alert-success icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-check-outline alert-icon text-success align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-success">NIN Found and Validated</h5>
                                            <span>Your verification request has been completed and validated.</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @else
                                <div class="alert custom-alert alert-danger icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="far fa-times-circle alert-icon text-danger align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-danger">NIN Not Found</h5>
                                            <span>You provided an invalid NIN</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="my-4 d-flex justify-content-between align-items-center">
                                    <h4 class="fw-semibold text-dark font-16">Identity (NIN) Report - {{$nin_verification->ref}}</h4>
                                    <div>
                                        <a id="printBtn" class="btn btn-primary btn-square">Print</a>
                                        <a id="downloadBtn" class="btn btn-primary btn-square">Download Report</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="py-3 px-4 bg-light">
                                    <h2 class="font-16 m-0 lh-base">Verification Details</h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Verification ID:</div>
                                        <div class="font-14 col-8 text-break">{{$nin_verification->ref}}</div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Initiated At:</div>
                                        <div class="font-14 col-8">{{date('jS F Y, h:iA', strtotime($nin_verification->requested_at))}}</div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Initiated By:</div>
                                        <div class="font-14 col-8">{{auth()->user()->name}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">

                            @if($nin_verification->status == 'found')
                            <div class="col-12">
                                <div class="row  border-bottom">
                                    <div class="col-6 col-lg-4 align-self-center py-4 px-4 mb-3 mb-lg-0">
                                        <div class="dastone-profile-main">
                                            <div class="dastone-profile-main-pic rounded-circle {{$nin_verification->selfie_validation ==true ? 'border border-5': ''}} {{$nin_verification->selfie_validation ==true && $nin_verification->validations->selfie->selfieVerification->match==true? 'border-success' : 'border-warning'}}">
                                            <img src="{{$nin_verification->image}}" style="display:block;position:absolute;height:100%;top:50%;left:50%;-ms-transform: translateY(-50%);-webkit-transform: translateY(-50%);transform: translateY(-50%) translateX(-50%);"/>    
                                            <div class="inner-img-div position-absolute" data-id="imageView1"></div>
                                            </div>
                                        </div>
                                        <div class="py-2 fw-bold">Image from Source</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">First Name:</div>
                                        <div class="font-14 col-8">
                                            {{$nin_verification->first_name}}
                                            @if(isset($nin_verification->validations->data->firstName))
                                            @if($nin_verification->validations->data->firstName->validated == true)
                                            <span class="ms-2 badge bg-success">Validated</span>
                                            @else
                                            <span class="ms-2 font-12 text-info" style="text-decoration: line-through;">{{$nin_verification->validations->data->firstName->value}}</span>
                                            <span class="ms-3 badge bg-danger">Not a match</span>
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Last Name:</div>
                                        <div class="font-14 col-8">
                                            {{$nin_verification->last_name}}
                                            @if(isset($nin_verification->validations->data->lastName))
                                            @if($nin_verification->validations->data->lastName->validated == true)
                                            <span class="ms-2 badge bg-success">Validated</span>
                                            @else
                                            <span class="ms-2 font-12 text-info" style="text-decoration: line-through;">{{$nin_verification->validations->data->lastName->value}}</span>
                                            <span class="ms-3 badge bg-danger">Not a match</span>
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                    @if($nin_verification->middle_name != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Middle Name:</div>
                                        <div class="font-14 col-8">{{$nin_verification->middle_name}}</div>
                                    </div>
                                    @endif
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Phone Number:</div>
                                        <div class="font-14 col-8">{{$nin_verification->phone}}</div>
                                    </div>
                                    @if($nin_verification->email != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Email Address:</div>
                                        <div class="font-14 col-8">{{$nin_verification->email}}</div>
                                    </div>
                                    @endif
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Date of Birth:</div>
                                        <div class="font-14 col-8">
                                            {{date('jS F Y', strtotime($nin_verification->dob))}}
                                            @if(isset($nin_verification->validations->data->dateOfBirth))
                                            @if($nin_verification->validations->data->dateOfBirth->validated == true)
                                            <span class="ms-2 badge bg-success">Validated</span>
                                            @else
                                            <span class="ms-2 font-12 text-info" style="text-decoration: line-through;">{{$nin_verification->validations->data->dateOfBirth->value}}</span>
                                            <span class="ms-3 badge bg-danger">Not a match</span>
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">NIN:</div>
                                        <div class="font-14 col-8">{{$nin_verification->pin}}</div>
                                    </div>
                                    @if($nin_verification->gender != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Gender:</div>
                                        <div class="font-14 col-8">{{$nin_verification->gender}}</div>
                                    </div>
                                    @endif
                                    @if($nin_verification->address != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Full Address:</div>
                                        <div class="font-14 col-8">{{$nin_verification->address->addressLine}}</div>
                                    </div>
                                    @endif
                                    @if($nin_verification->address != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Address LGA:</div>
                                        <div class="font-14 col-8">{{$nin_verification->address->lga}}</div>
                                    </div>
                                    @endif
                                    @if($nin_verification->address != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Address Town:</div>
                                        <div class="font-14 col-8">{{$nin_verification->address->town}}</div>
                                    </div>
                                    @endif
                                    @if($nin_verification->address != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Address State:</div>
                                        <div class="font-14 col-8">{{$nin_verification->address->state}}</div>
                                    </div>
                                    @endif
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Country:</div>
                                        <div class="font-14 col-8">{{$nin_verification->country}}</div>
                                    </div>
                                    @if($nin_verification->birth_lga != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Birth LGA:</div>
                                        <div class="font-14 col-8">{{$nin_verification->birth_lga}}</div>
                                    </div>
                                    @endif
                                    @if($nin_verification->birth_state != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Birth State:</div>
                                        <div class="font-14 col-8">{{$nin_verification->birth_state}}</div>
                                    </div>
                                    @endif
                                    @if($nin_verification->birth_country != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Birth Country:</div>
                                        <div class="font-14 col-8">{{$nin_verification->birth_country}}</div>
                                    </div>
                                    @endif
                                    
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Birth Country:</div>
                                        <div class="font-14 col-8">{{($nin_verification->nok_state != null) ? $nin_verification->birth_country : '****'}}</div>
                                    </div>
                                    @if($nin_verification->religion != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Religion:</div>
                                        <div class="font-14 col-8">{{$nin_verification->religion}}</div>
                                    </div>
                                    @endif
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Signature:</div>
                                        <div class="font-14 col-8">@if($nin_verification->signature != null) <img src='{{$nin_verification->signature}}' style="height:35px"/> @endif</div>
                                    </div>
                                
                                </div>
                            </div>
                            @if($nin_verification->selfie_validation == true)
                            <div class="col-12 mt-5">
                                <div class="py-3 px-4 bg-light">
                                    <h2 class="font-16 m-0 lh-base">Image Validation</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 col-sm-4 col-lg-4 align-self-center py-4 mb-3 mb-lg-0 text-center">
                                    <div class="dastone-profile-main justify-content-center">
                                        <div class="dastone-profile-main-pic rounded-circle border border-5 {{$nin_verification->validations->selfie->selfieVerification->match==true? 'border-success' : 'border-warning'}}">
                                        <img src="{{$nin_verification->validations->selfie->selfieVerification->image}}" style="display:block;position:absolute;height:100%;top:50%;left:50%;-ms-transform: translateY(-50%);-webkit-transform: translateY(-50%);transform: translateY(-50%) translateX(-50%);"/>    
                                            <div class="inner-img-div position-absolute" data-id="imageView2"></div>
                                        </div>
                                    </div>
                                    <div class="py-2 fw-bold">Image Provided for validation</div>
                                </div>
                                <div class="col-8 col-sm-8">
                                    <div class="col-12 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Confidence Level:</div>
                                        <div class="font-14 col-8">{{$nin_verification->validations->selfie->selfieVerification->confidenceLevel}}%</div>
                                    </div>
                                    <div class="col-12 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Threshold Level:</div>
                                        <div class="font-14 col-8">{{$nin_verification->validations->selfie->selfieVerification->threshold}}%</div>
                                    </div>
                                    <div class="col-12 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Match:</div>
                                        <div class="font-14 col-8">{{$nin_verification->validations->selfie->selfieVerification->match == true ? 'Yes' : 'No'}}</div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($nin_verification->data_validation == true || $nin_verification->selfie_validation == true)
                            @if($nin_verification->all_validation_passed == false)
                            <div class="col-12 mt-2">
                                <div class="py-3 px-4 bg-light">
                                    <h2 class="font-16 m-0 lh-base">Validation Messages</h2>
                                </div>
                            </div>
                            <div class="col-auto mt-3">
                                <div class="alert alert-warning border-0 font-15" role="alert">
                                    {{$nin_verification->validations->validationMessages}}
                                </div>
                            </div>
                            @endif
                            @endif
                            <div class="modal fade" id="imageView1" tabindex="-1" aria-labelledby="imageView1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                                    <div class="modal-content" style="background:none">
                                        <div class="modal-header border-0" style="background:none">
                                            <h6 class="modal-title m-0" id="imageView"></h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!--end modal-header-->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12 text-center align-self-center">
                                                    <img src="{{$nin_verification->image}}" alt="Image from Source" class="img-fluid" />
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
                            @if($nin_verification->selfie_validation == true)
                            <div class="modal fade" id="imageView2" tabindex="-1" aria-labelledby="imageView2" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                                    <div class="modal-content" style="background:none">
                                        <div class="modal-header border-0" style="background:none">
                                            <h6 class="modal-title m-0" id="imageView"></h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!--end modal-header-->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12 text-center align-self-center">
                                                    <img src="{{$nin_verification->validations->selfie->selfieVerification->image}}" alt="Image from Source" class="img-fluid" />
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
                            @endif
                            @elseif($nin_verification->status == 'not_found')
                                <div class="row mt-5">
                                    <div class="col-12 col-sm-9 col-md-6 ms-auto me-auto text-center align-items-center">
                                        
                                        <h5 class="card-title mb-5 text-muted">You Searched for "{{$nin_verification->pin}}"</h5>
                                        <h5 class="card-title mb-2">Oops! No Data found for the pin entered</h5>
                                        <p class="card-text">Please Enter a correct BVN Pin and try searching again.</p>
                                        <a href="{{route('showIdentityVerificationForm', $nin_verification->type)}}" class="btn btn-primary btn-sm mt-4 mb-3">Make another request</a>
                                    </div>
                                </div>
                            @else

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


            $('div[data-id=imageView1]').on('click', () => {
                $('#imageView1').modal('show');
            });

            $('div[data-id=imageView2]').on('click', () => {
                $('#imageView2').modal('show');
            });

            $('body').on('click', () => {
                $('#imageView1').modal('hide');
            });
            $('body').on('click', () => {
                $('#imageView2').modal('hide');
            });
        </script>

        @endsection