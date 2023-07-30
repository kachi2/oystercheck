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
                                @if($image_verification->status == 'pending')
                                <div class="alert custom-alert alert-purple icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-clock-outline alert-icon text-purple align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0">Pending</h5>
                                            <span>A verification request haven't been made.</span>
                                        </div>
                                    </div>
                                </div>
                                @elseif($image_verification->status == 'completed' && $image_verification->all_validation_passed == true)
                                <div class="alert custom-alert alert-success icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-check-outline alert-icon text-success align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-success">Image Compare Completed</h5>
                                            <span>Your verification request has been completed and images are a match.</span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="alert custom-alert alert-warning icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-off-outline alert-icon text-warning align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-warning">Image Compare Completed</h5>
                                            <span>Your verification request has been completed but images do not match.</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="my-4 d-flex justify-content-between align-items-center">
                                    <h4 class="fw-semibold text-dark font-16">Identity (Image Compare) Report - {{$image_verification->ref}}</h4>
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
                                        <div class="font-14 col-8 text-break">{{$image_verification->ref}}</div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Initiated At:</div>
                                        <div class="font-14 col-8">{{date('jS F Y, h:iA', strtotime($image_verification->requested_at))}}</div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Initiated By:</div>
                                        <div class="font-14 col-8">{{auth()->user()->name}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            @if($image_verification->status == 'completed')
                            <div class="col-12">
                                <div class="row  border-bottom">
                                    <div class="col-6 col-lg-4 text-center align-self-center py-4 px-4 mb-3 mb-lg-0">
                                        <div class="dastone-profile-main justify-content-center">
                                            <div class="dastone-profile-main-pic rounded-circle {{$image_verification->selfie_validation ==true ? 'border border-5': ''}} {{$image_verification->selfie_validation ==true && $image_verification->image_comparison->match==true? 'border-success' : 'border-warning'}}">
                                            <img src="{{$image_verification->image_comparison->image1}}" style="display:block;position:absolute;height:100%;top:50%;left:50%;-ms-transform: translateY(-50%);-webkit-transform: translateY(-50%);transform: translateY(-50%) translateX(-50%);"/>    
                                            <div class="inner-img-div position-absolute" data-id="imageView1"></div>
                                            </div>
                                        </div>
                                        <div class="py-2 fw-bold">Image 1</div>
                                    </div>
                                    <div class="col-6 col-lg-4 text-center align-self-center py-4 px-4 mb-3 mb-lg-0">
                                        <div class="dastone-profile-main justify-content-center">
                                            <div class="dastone-profile-main-pic rounded-circle {{$image_verification->selfie_validation ==true ? 'border border-5': ''}} {{$image_verification->selfie_validation ==true && $image_verification->image_comparison->match==true? 'border-success' : 'border-warning'}}">
                                            <img src="{{$image_verification->image_comparison->image2}}" style="display:block;position:absolute;height:100%;top:50%;left:50%;-ms-transform: translateY(-50%);-webkit-transform: translateY(-50%);transform: translateY(-50%) translateX(-50%);"/>    
                                            <div class="inner-img-div position-absolute" data-id="imageView2"></div>
                                            </div>
                                        </div>
                                        <div class="py-2 fw-bold">Image 2</div>
                                    </div>
                                </div>
                            </div>
             
                            <div class="col-12 mt-5">
                                <div class="py-3 px-4 bg-light">
                                    <h2 class="font-16 m-0 lh-base">Image Validation</h2>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Confidence Level:</div>
                                        <div class="font-14 col-8">{{$image_verification->image_comparison->confidenceLevel}}%</div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Threshold Level:</div>
                                        <div class="font-14 col-8">{{$image_verification->image_comparison->threshold}}%</div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Match:</div>
                                        <div class="font-14 col-8">{{$image_verification->image_comparison->match == true ? 'Yes' : 'No'}}</div>
                                    </div>
                                
                            </div>
                            
                            @if($image_verification->selfie_validation == true)
                            <div class="col-12 mt-2">
                                <div class="py-3 px-4 bg-light">
                                    <h2 class="font-16 m-0 lh-base">Validation Messages</h2>
                                </div>
                            </div>
                            <div class="col-auto mt-3">
                                @if($image_verification->all_validation_passed == true)
                                <div class="alert alert-success border-0 font-15" role="alert">
                                    {{$image_verification->reason != null ? $image_verification->reason : 'Provided Images are a match'}}
                                </div>
                                @else
                                <div class="alert alert-warning border-0 font-15" role="alert">
                                    {{$image_verification->reason != null ? $image_verification->reason : 'Provided Images do not match'}}
                                </div>
                                @endif
                            </div>
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
                                                    <img src="{{$image_verification->image_comparison->image1}}" alt="Image1" class="img-fluid" />
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
                            @if($image_verification->selfie_validation == true)
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
                                                    <img src="{{$image_verification->image_comparison->image2}}" alt="Image2" class="img-fluid" />
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