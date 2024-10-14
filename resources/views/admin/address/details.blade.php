 @extends('layouts.admin')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Address Verification Details </h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"></li>
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
                    
                    @if(isset($addressVerification))
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                    @if($addressVerification->status == "pending")
                                        <div class="card-header p-2  bg-warning ">
                                            <h5>{{ucfirst($addressVerification->status)}}</h5>
                                        </div>
                                   
                                    @elseif($addressVerification->status == "completed")
                                        <div class="card-header p-2  bg-success ">
                                            <h5>{{ucfirst($addressVerification->status)}}</h5>
                                        </div>
                                    @elseif($addressVerification->status == "failed")
                                        <div class="card-header p-2  bg-danger ">
                                            <h5>{{ucfirst($addressVerification->status)}}</h5>
                                        </div>
                                    @endif
                               
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="my-4 d-flex justify-content-between align-items-center">
                                                <h4 class="fw-semibold text-dark font-16"> {{ ucwords(str_replace('-', ' ', $addressVerification->slug)) }} Verification</h4>
                                                <div>
                                                    <a id="printBtn" class="btn btn-primary btn-square">Print</a>
                                                    <a id="downloadBtn" class="btn btn-primary btn-square">Download Report</a>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                        <div class="col-12">
                                            <div class="row mb-2">
                                                <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                                    <div class="m-0 font-14 me-3 text-muted col-4">Verification ID:</div>
                                                    <div class="font-14 col-8 text-break">{{$addressVerificationDetail->reference_id ?? 'N/A'}}</div>
                                                </div>
                                                <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                                    <div class="m-0 font-14 me-3 text-muted col-4">Execution Date:</div>
                                                    <div class="font-14 col-8">{{date('jS F Y, h:iA', strtotime($addressVerificationDetail->execution_date ?? 'N/A'))}}</div>
                                                </div>
                                                <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                                    <div class="m-0 font-14 me-3 text-muted col-4">Initiated By:</div>
                                                    <div class="font-14 col-8">{{auth()->user()->name}}</div>
                                                </div>
                                                <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                                    <div class="m-0 font-14 me-3 text-muted col-4">Status :</div>
                                                    <div class="font-14 col-8">{{ $addressVerificationDetail->status ?? 'N/A' }}</div>
                                                </div>
                                                <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                                    <div class="m-0 font-14 me-3 text-muted col-4">Created date :</div>
                                                    <div class="font-14 col-8">{{date('jS F Y, h:iA', strtotime($addressVerificationDetail->created_at ?? 'N/A' ))}}</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                @if(!empty($images))
                                                    @foreach ($images as $image)
                                                        <div>
                                                            <div class="col-lg-12 text-left align-self-left">
                                                                <img src="{{ $image['filePath'] }}" alt="Image from Source" class="img-fluid" style="width: 300px; height: auto;"/>
                                                            </div>
                                                            
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p>No images available.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>   
                        </div>
                        <div class="col-12">
                            <div class="card">
                                    @if($addressVerification->status == "pending")
                                        <div class="card-header p-2  " style="background-color: #E7EBFB; color:#3A61F8">
                                            <h5>{{ucfirst($addressVerification->status)}}</h5>
                                        </div>
                                   
                                    @elseif($addressVerification->status == "completed")
                                        <div class="card-header p-2 " style="background-color: #E7EBFB; color:#3A61F8">
                                            <h5>{{ucfirst($addressVerification->status)}}</h5>
                                        </div>
                                    @elseif($addressVerification->status == "failed")
                                        <div class="card-header p-2" style="background-color: #E7EBFB; color:#3A61F8">
                                            <h5>{{ucfirst($addressVerification->status)}}</h5>
                                        </div>
                                    @endif
                               
                                <div class="card-body">
                    
                                    <div class="row">
                                       
                                        <div class="col-12">
                                            @if(!empty(trim($addressVerification->image)))
                                                <img src="{{ ($addressVerification->image) }}" alt="Image from Source" class="rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" />
                                            @else
                                                <p>No images available.</p>
                                            @endif

                                  
                                            <div class="row mb-2">
                                                <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                                    <ul class="list-unstyled personal-detail mb-0">
                                                        <li class="mt-2">
                                                            <b>First Name:</b> {{$addressVerification->first_name ?? 'N/A'}} 
                                                        </li>
                                                        <li class="mt-2">
                                                            <b>Last Name:</b> {{$addressVerification->last_name ?? 'N/A'}} 
                                                        </li>
                                                        <li class="mt-2">
                                                            <b>Middle Name:</b> {{$addressVerification->middle_name ?? 'N/A'}} 
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-4 d-flex py-4 px-4 border-bottom">
                                                    <ul class="list-unstyled personal-detail mb-0">
                                                        <li class="mt-2">
                                                            <b>Email :</b> {{$addressVerification->email ?? 'N/A'}} 
                                                        </li>
                                                        <li class="mt-2">
                                                            <b>Date of Birth:</b> {{ \Carbon\Carbon::parse($addressVerification->dob)->format('jS F Y, h:ia') }} 
                                                        </li>
                                                        <li class="mt-2">
                                                            <b>Phone:</b> {{$addressVerification->phone ?? 'N/A'}} 
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                   
                                </div>
                            </div>    
                        </div>

                    </div>
                    @endif
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