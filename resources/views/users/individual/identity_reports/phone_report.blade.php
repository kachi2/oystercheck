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
                                @if($phone_verification->status == 'pending')
                                <div class="alert custom-alert alert-purple icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-clock-outline alert-icon text-purple align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0">Pending</h5>
                                            <span>A verification request haven't been made.</span>
                                        </div>
                                    </div>
                                </div>
                                @elseif($phone_verification->status == 'found')
                                @if($phone_verification->validations != null && $phone_verification->all_validation_passed == false)
                                <div class="alert custom-alert alert-warning icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-off-outline alert-icon text-warning align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-warning">Phone Number Found but Not Validated</h5>
                                            <span>Your verification request has been completed and some data do not match.</span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="alert custom-alert alert-success icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-check-outline alert-icon text-success align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-success">Phone Number Found and Validated</h5>
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
                                            <h5 class="mb-1 fw-bold mt-0 text-danger">Phone Number Not Found</h5>
                                            <span>You provided an invalid phone number</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="my-4 d-flex justify-content-between align-items-center">
                                    <h4 class="fw-semibold text-dark font-16">Identity (Phone Number) Report - {{$phone_verification->ref}}</h4>
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
                                        <div class="font-14 col-8 text-break">{{$phone_verification->ref}}</div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Initiated At:</div>
                                        <div class="font-14 col-8">{{date('jS F Y, h:iA', strtotime($phone_verification->requested_at))}}</div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Initiated By:</div>
                                        <div class="font-14 col-8">{{auth()->user()->name}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">

                            @if($phone_verification->status == 'found')
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 py-4 px-4 border-bottom">
                                        <div class="col-12 col-md-6 d-flex">
                                            <div class="m-0 font-14 me-3 text-muted col-4">Phone Number:</div>
                                            <div class="font-14 col-8">{{$phone_verification->phone_number}}</div>
                                        </div>
                                    </div>
                                    @if($phone_verification->advance_search == true )
                                    <div class="col-12 mt-2">
                                        <div class="py-3 px-4 bg-light">
                                            <h2 class="font-16 m-0 lh-base">NIN Information</h2>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="col-6 col-lg-4 align-self-center py-4 px-4 mb-3 mb-lg-0 border-bottom">
                                        <div class="dastone-profile-main">
                                            <div class="dastone-profile-main-pic rounded-circle">
                                            <img src="{{$phone_verification->image}}" style="display:block;position:absolute;height:100%;top:50%;left:50%;-ms-transform: translateY(-50%);-webkit-transform: translateY(-50%);transform: translateY(-50%) translateX(-50%);"/>    
                                            <div class="inner-img-div position-absolute" data-id="imageView1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">First Name:</div>
                                        <div class="font-14 col-8">
                                            {{$phone_verification->first_name}}
                                        </div>
                                    </div>
                                    @if($phone_verification->middle_name != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Middle Name:</div>
                                        <div class="font-14 col-8">{{$phone_verification->middle_name}}</div>
                                    </div>
                                    @endif
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Last Name:</div>
                                        <div class="font-14 col-8">
                                            {{$phone_verification->last_name}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Date of Birth:</div>
                                        <div class="font-14 col-8">
                                            {{date('jS F Y', strtotime($phone_verification->dob))}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">NIN Number:</div>
                                        <div class="font-14 col-8">{{$phone_verification->nin}}</div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Phone Number:</div>
                                        <div class="font-14 col-8">{{$phone_verification->phone_number}}</div>
                                    </div>
                                    @if($phone_verification->gender != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Gender:</div>
                                        <div class="font-14 col-8">{{$phone_verification->gender}}</div>
                                    </div>
                                    @endif
                                    @if($phone_verification->address != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Full Address:</div>
                                        <div class="font-14 col-8">{{$phone_verification->address->addressLine}}</div>
                                    </div>
                                    @endif
                                    @if($phone_verification->address != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Address LGA</div>
                                        <div class="font-14 col-8">{{$phone_verification->address->lga}}</div>
                                    </div>
                                    @endif
                                    @if($phone_verification->address != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Address Town:</div>
                                        <div class="font-14 col-8">{{$phone_verification->address->town}}</div>
                                    </div>
                                    @endif
                                    @if($phone_verification->address != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Address State:</div>
                                        <div class="font-14 col-8">{{$phone_verification->address->state}}</div>
                                    </div>
                                    @endif
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Country:</div>
                                        <div class="font-14 col-8">{{$phone_verification->country}}</div>
                                    </div>
                                    @if($phone_verification->birth_lga != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Birth LGA:</div>
                                        <div class="font-14 col-8">{{$phone_verification->birth_lga}}</div>
                                    </div>
                                    @endif
                                    @if($phone_verification->birth_state != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Birth State:</div>
                                        <div class="font-14 col-8">{{$phone_verification->birth_state}}</div>
                                    </div>
                                    @endif
                                    @if($phone_verification->birth_country != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Birth Country:</div>
                                        <div class="font-14 col-8">{{$phone_verification->birth_country}}</div>
                                    </div>
                                    @endif
                                    @if($phone_verification->religion != null)
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Religion:</div>
                                        <div class="font-14 col-8">{{$phone_verification->religion}}</div>
                                    </div>
                                    @endif
                                </div>

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
                                                    <img src="{{$phone_verification->image}}" alt="Image from Source" class="img-fluid" />
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
                                @else
                                @foreach($phone_verification->phone_details as $dets)
                                <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                    <div class="m-0 font-14 me-3 text-muted col-4">Full Name:</div>
                                    <div class="font-14 col-8">{{$dets['fullName']}}</div>
                                </div>
                                <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                    <div class="m-0 font-14 me-3 text-muted col-4">Date of Birth:</div>
                                    <div class="font-14 col-8">{{ date('jS F Y', strtotime($dets['dateOfBirth']))}}</div>
                                </div>
                                @endforeach
                                
                                @endif

                            </div>


                            @if($phone_verification->data_validation == true || $phone_verification->selfie_validation == true)
                            @if($phone_verification->all_validation_passed == false)
                            <div class="col-12 mt-2">
                                <div class="py-3 px-4 bg-light">
                                    <h2 class="font-16 m-0 lh-base">Validation Messages</h2>
                                </div>
                            </div>
                            <div class="col-auto mt-3">
                                <div class="alert alert-warning border-0 font-15" role="alert">
                                    {{$phone_verification->validations->validationMessages}}
                                </div>
                            </div>
                            @endif
                            @endif
                            @elseif($phone_verification->status == 'not_found')
                            <div class="row mt-5">
                                <div class="col-12 col-sm-9 col-md-6 ms-auto me-auto text-center align-items-center">

                                    <h5 class="card-title mb-5 text-muted">You Searched for "{{$phone_verification->phone_number}}"</h5>
                                    <h5 class="card-title mb-2">Oops! No Data found for the pin entered</h5>
                                    <p class="card-text">Please Enter a correct Phone Number and try searching again.</p>
                                    <a href="{{route('showIdentityVerificationForm', $phone_verification->type)}}" class="btn btn-primary btn-sm mt-4 mb-3">Make another request</a>
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
                        left: 30,
                        width: 550
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

            $('body').on('click', () => {
                $('#imageView1').modal('hide');
            });
           
        </script>

        @endsection