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
                            <div class="mb-4 ms-auto me-auto">
                                <img src="{{asset('/assets/images/logo.png')}}" style="width:10%" alt="Oysterchecks Logo" class="logo-light">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                @if($transactions->status == 'not_cleared')
                                
                                <div class="alert custom-alert alert-purple icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi mdi-close-box-multiple alert-icon text-danger align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-danger">Not Cleared</h5>
                                            <span>Sanction & PEP Screening Check</span>
                                        </div>
                                    </div>
                                </div>
                                @elseif($transactions->status == 'review_required')
                                <div class="alert custom-alert alert-warning icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi  fa-times-circle alert-icon text-warning align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-warning">Review Required</h5>
                                            <span>Sanction & PEP Screening Check</span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="alert custom-alert alert-success icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="far mdi mdi mdi-shield-check-outline alert-icon text-success align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-success">Cleared</h5>
                                            <span>Sanction & PEP Screening Check</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="my-4 d-flex justify-content-between align-items-center">
                                    <h4 class="fw-semibold text-dark font-16">Sanction & PEP Screening Check - {{$transactions->ref}}</h4>
                                    <div>
                                        <a id="printBtn" class="btn btn-primary btn-square">Print</a>
                                        <a id="downloadBtn" class="btn btn-primary btn-square">Download Report</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="py-1 px-1 bg-light">
                                    {{-- <h2 class="font-16 m-0 lh-base">Verification Details</h2> --}}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Verification ID:</div>
                                        <div class="font-14 col-8 text-break">{{$transactions->ref}}</div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Initiated At:</div>
                                        <div class="font-14 col-8">{{date('jS F Y, h:iA', strtotime($transactions->created_at))}}</div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Initiated By: </div>
                                        <div class="font-14 col-8">{{auth()->user()->firstname}}</div>
                                    </div>
                                </div>

                                <div class="m-0 font-14 me-3 mt-3 col-4">Search Term</div>
                                <span class="m-0 font-14 me-3 mt-3 text-muted col-4">First Name:</span>  <span class="text-black"> {{$transactions->first_name}} </span> <br>  
                                <span class="m-0 font-14 me-3 mt-3 text-muted col-4">Last Name: </span>  <span class="text-black"> {{$transactions->last_name}} </span>
                            </div>
                        </div>
                        @php 
                        $peplist =  json_decode($transactions->pepList, true);
                         @endphp
                        <div class="col-12">
                            <div class="py-4 pt-2  mt-3 px-4 bg-light">
                                <span class="font-16 p-2 m-0 lh-base" style="color:blue">PEP ( Politically exposed person)</span> <span class="p-2" style="float:right; color:red"> {{count( $peplist )}} Results found</span>
                            </div>
                        </div>
                       
                        @forelse( $peplist as $list)
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="row" style="border:2px solid #77757527">
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">First Name:</div>
                                        <div class="font-14 col-8">
                                            {{$list['firstName']?$list['firstName']:'N/A'}}
                                           
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Last Name:</div>
                                        <div class="font-14 col-8">
                                            {{$list['lastName']?$list['lastName']:'N/A'}}
                                           
                                        </div>
                                    </div>
                                   
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Middle Name:</div>
                                        <div class="font-14 col-8"> {{$transactions->middle_name ? $transactions->middle_name : "N/A" }}</div>
                                    </div>
                                 
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Gender:</div>
                                        <div class="font-14 col-8"> {{$list['gender']?$list['gender']:'N/A'}}</div>
                                    </div>
                                  
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Aliases:</div>
                                        <div class="font-14 col-8">{{$list['aliases']?$list['aliases']:'N/A'}}</div>
                                    </div>
                                   
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Function:</div>
                                        <div class="font-14 col-8">
                                            {{$list['function']?$list['function']:'N/A'}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Specific:</div>
                                        <div class="font-14 col-8">{{$list['specific']?$list['specific']:'N/A'}}</div>
                                    </div>
                                   
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Country:</div>
                                        <div class="font-14 col-8">{{$list['country']?$list['country']:'N/A'}}</div>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-4">Active:</div>
                                        <div class="font-14 col-8">{{$list['active']? 'Active' : 'Not Active'}}</div>
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </div>
                        @empty 
                        <div class="col-12 col-md-12 d-flex py-4 px-4 border-bottom">
                         
                            <div class="font-14 ">This individual is not a politically exposed person</div>
                        </div>
                        
                        @endforelse


                        @php 
                        $sanctionList =  json_decode($transactions->sanctionList, true);
                         @endphp
                        <div class="col-12">
                            <div class="py-4 pt-2  mt-3 px-4 bg-light">
                                <span class="font-16 p-2 m-0 lh-base" style="color:red"> <strong>SANCTION LIST </strong>
                                    :</span> <span class="p-2" style="float:right; color:red"> {{count( $sanctionList )}} Results found</span>
                            </div>
                        </div>
                       
                        @forelse ( $sanctionList as $sanction)
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="row" style="border:2px solid #908989">
                                    <div class="col-12 col-md-12 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 " style="color:red">Sanction Type:</div>
                                        <div class="font-14 col-8" style="color:red">
                                            {{$sanction['sanctionType']?$sanction['sanctionType']:'N/A'}}
                                           
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-2">First Name:</div>
                                        <div class="font-14 col-8">  {{$sanction['firstName']?$sanction['firstName']:'N/A'}}</div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-2">Last Name:</div>
                                        <div class="font-14 col-8">  {{$sanction['lastName']?$sanction['lastName']:'N/A'}}</div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-2">Full Name:</div>
                                        <div class="font-14 col-8">  {{$sanction['fullName']?$sanction['lastName']:'N/A'}}</div>
                                    </div>
                                 
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-2">Gender:</div>
                                        <div class="font-14 col-8"> {{$sanction['gender']?$sanction['gender']:'N/A'}}</div>
                                    </div>
                                   
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-2 ">Function:</div>
                                        <div class="font-14">
                                            {{$sanction['function']?$sanction['function']:'N/A'}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted col-2 ">Possible Age:</div>
                                        <div class="font-14">

                                       
                                            @if($sanction['possibleBirthYears'])
                                            
                                            @php
                                            $years = $sanction['possibleBirthYears'];
                                            $age = json_encode($years, true);
                                            echo $age
                                             @endphp
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 d-flex py-4 px-4 border-bottom">
                                        <div class="m-0 font-14 me-3 text-muted ">Comment:</div>
                                        <div class="font-14 ">{{$sanction['comment']?$sanction['comment']:'N/A'}}</div>
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </div>
                        @empty 
                        <div class="col-12 col-md-12 d-flex py-4 px-4 border-bottom">
                         
                            <div class="font-14 ">This individual is not on any sanction list</div>
                        </div>
                        
                        @endforelse
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