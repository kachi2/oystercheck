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
                                @if($transactions->status == 'no-match-found')
                                
                                <div class="alert custom-alert alert-success icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-shield-check-outline  alert-icon text-success align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-success">No Match Found</h5>
                                            <span>Sentiment Score: {{number_format($transactions->weightedScore,2)}}%</span>
                                        </div>
                                    </div>
                                </div>
                                @elseif($transactions->status == 'potential-high-risk')
                                <div class="alert custom-alert alert-danger icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class="mdi mdi-alpha-x-circle-outline text-danger align-self-center font-30 me-3"></i>
                                        <div class="media-body align-self-center">
                                            <h5 class="mb-1 fw-bold mt-0 text-danger">Potential High Risk</h5>
                                            <span>Sentiment Score: {{number_format($transactions->weightedScore,2)}}%</span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="alert custom-alert alert-success icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                    <div class="media">
                                        <i class=" mdi mmdi-shield-check-outline alert-icon text-success align-self-center font-30 me-3"></i>
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
                                    <h4 class="fw-semibold text-dark font-16">Adverse media report for  - {{$transactions->query}}</h4>
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
                                <span class="m-0 font-14 me-3 mt-3 text-muted col-4">Search Query:</span>  <span class="text-black"> {{$transactions->query}} </span> <br>  
                                <span class="m-0 font-14 me-3 mt-3 text-muted col-4">Search Type: </span>  <span class="text-black"> {{$transactions->type}} </span>
                            </div>
                        </div>
                    
                        @php 
                        $media =  json_decode($transactions->media, true);
                      
                         @endphp
                        <div class="col-12">
                            <div class="py-4 pt-2  mt-3 px-1 bg-light">
                                <span class="font-16  m-0 lh-base" style="color:rgb(26, 24, 24)"> <strong>Results</strong>
                                    </span> <span class="p-2" style="float:right; color:red"> {{count( $media )}} Results found</span>
                                    <br>
                            Report Summary {{$transactions->reason}}
                            </div>
                        </div>
                       @if(count($media) > 0)
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="">
                                <tr>
                                    <th>#</th>
                                    <th>Source</th>
                                    <th>Score</th>
                                    <th>Affiliated Entities</th>
                                    <th> Tags</th>
                                    <th>Headline</th>
                                  <th>Excerpt</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $media as $adverse)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$adverse['source']}}</td>
                                    <td><span class="badge badge-boxed  badge-outline-danger">{{$adverse['score']}}</span></td>
                                    <td>
                                        @if($adverse['persons'])
                                        @php
                                        $person = [];
                                       
                                       foreach ($adverse['persons'] as  $persons) {
                                        array_push($person,trim($persons));
                                       }
                                       echo implode(', ',$person);
                                       
                                         @endphp
                                        @endif
                                    </td>
                                    <td> 
                                        @if($adverse['tags'])
                                        @php
                                        $tagz = [];
                                       
                                       foreach ($adverse['tags'] as  $tags) {
                                        if($tags[1] >= 0 && $tags[1] <= 50 ){
                                            echo '<span class="badge bg-info m-1">'. $tags[0] .'</span>  &nbsp';
                                        }elseif($tags[1] > 50 && $tags[1] <= 70){
                                            echo '<span class="badge bg-warning m-1">'. $tags[0] .'</span>';
                                        }else{
                                            echo '<span class="badge bg-danger m-1">'. $tags[0] .'</span>';   
                                        }
                                       }
                                      // echo implode(', ',$tagz);
                                      
                                       
                                         @endphp
                                        @endif
                                    </td>
                                    <td> {{$adverse['headline']}}</td>
                                    <td> {{$adverse['excerpt']}}</td>
                                </tr>
                                @endforeach 
                                </tbody>
                            </table><!--end /table-->
                        </div>
                        <div class="col-12">
                            <div class="py-4 pt-2  mt-3 px-1 bg-light">
                                <span class="font-16  m-0 lh-base" style="color:rgb(26, 24, 24)"> <strong>Result Dashboard</strong>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Pie Chart</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="">
                                        <div id="apex_pie1" class="apex-charts"></div>
                                    </div>                                        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        @else
                        <div class="col-12 col-md-12 d-flex py-4 px-4 border-bottom">
                         
                            <div class="font-14 ">No Adverse media result items to see here  <br>
                                Looks like you have no Adverse media result items here</div>
                        </div>
                        @endif
                        
                    
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