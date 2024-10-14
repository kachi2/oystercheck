@extends('layouts.admin')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Date Range Picker CSS -->
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">
<style>
    .download-icon {
        width: 16px;  /* Change to the desired size */
        height: 16px; /* Change to the desired size */
    }
</style>
@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Audit Reports</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">View And Monitor All Account Activities from here</li>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-lg-3 ">
                        <div class="card report-card rounded" style="border: 2px solid #0E2554;">
                            <div class="card-body " >
                                <div class="row d-flex justify-content-center">
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <img src="{{ asset('assets/icons/beenhere.png') }}"  style="width: 30px"/>  
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="text-black mb-0 fw-semibold">Total Verification</p>
                                        <h1 class="m-0 text-black">{{ $totalReports }}</h1>
                                    </div>
                                   
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card report-card rounded" style="border: 2px solid #0E2554;">
                            <div class="card-body " >
                                <div class="row d-flex justify-content-center">
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <img src="{{ asset('assets/icons/verified_user.png') }}"  style="width: 30px"/>  
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="text-black mb-0 fw-semibold">Successful  Verification</p>
                                        <h1 class="m-0 text-black">{{ $totalSuccess }}</h1>
                                    </div>
                                    
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card report-card rounded"  style="border: 2px solid #0E2554;">
                            <div class="card-body" >
                                <div class="row d-flex justify-content-center">
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <img src="{{ asset('assets/icons/safety_check_off.png') }}"  style="width: 30px"/>  
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="text-black mb-0 fw-semibold">Failed  Verification</p>
                                        <h1 class="m-0 text-black">{{ $totalFailed }}</h1>
                                    </div>
                                    
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card report-card rounded"  style="border: 2px solid #0E2554;">
                            <div class="card-body" >
                                <div class="row d-flex justify-content-center">
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <img src="{{ asset('assets/icons/gpp_bad.png') }}"  style="width: 30px"/>  
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="text-black mb-0 fw-semibold">Pending  Verification</p>
                                        <h1 class="m-0 text-black">{{ $totalPending }}</h1>
                                    </div>
                                    
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div>
                    <!--end col-->                               
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row pt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body p-2">
                        <h4>Verification Statistics</h4>
                        <canvas id="groupedBarChart" width="400" height="150"></canvas>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-3">
                        <h4>Summary</h4>
                        <div class="card-body " >
                            <div class="row d-flex justify-content-center">
                                <div class="col-auto align-self-center">
                                    <div class="report-main-icon bg-light-alt">
                                        <h1 class="m-0 text-black"> {{ $totalUser }}</h1> 
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-black mb-0 ">Total</p>
                                    <p class="text-black mb-0 ">Users</p>
                                </div>
                            </div>
                            <br>
                            <div class="mt-3">
                                <p>{{ $logOfUsers }} - Log of Users</p>
                                <p>{{ $activeUsers }} - Active Users</p>
                                <p>{{ $recentlyRegisteredUsers }} - Recently Registered Users</p>
                                <p>{{ $inactiveUsers }} - Inactive Users</p>
                            </div>
                            
                        </div><!--end card-body--> 
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <hr/>

        <div class="row pt-3">
            <h4>Detailed Reports</h4>
            <div class="col-md-12">
                <div class="d-flex flex-row mb-3">
                    <div class="p-2 ">
                        <button type="button" class="card btn btn-outline-secondary">Today</button>
                    </div>
                    <div class="p-2">
                        <button type="button" class="card btn btn-outline-secondary">Last 7 days</button>
                    </div>
                    <div class="p-2">
                        <button type="button" class="card btn btn-outline-secondary">Last 30 days</button>
                    </div>
                    <div class="p-2">
                        <button type="button" class="card btn btn-outline-secondary">YTD</button>
                    </div>
                </div> 
               
                <div class="col-auto d-flex justify-content-between"> 
           
                    <div class="form-group col-md-3 d-flex">
                        <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                        <input type="text" id="daterange" class="form-control" placeholder="Start date - End date">
                    </div>
                    <div class="col-md-2 text-end">
                        <button type="button" class="btn btn-primary" style="background-color: #0E2554" data-bs-toggle="modal" data-bs-target="#tradingdrop">Export Report <i data-feather="download" class="align-self-end download-icon"></i></button>
                    </div>
                </div> 
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-hover dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="px-2 py-3">S/N</th>
                                <th class="px-2 py-3">Transaction Reference</th>
                                <th class="px-2 py-3">Status</th>
                                <th class="px-2 py-3">Amount (&#x20A6;)</th>
                                <th class="px-2 py-3">Transaction Type</th>
                                <th class="px-2 py-3">Transaction Date</th>
                                <th class="px-2 py-3">Purpose</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $trans)
                            <tr>
                                <td class="px-0 py-0"><a class="table-link" href="{{route('user.transaction', $trans->id)}}"><div class="px-2 py-3">{{$loop->iteration}}</div></a></td>
                                <td class="px-0 py-0"><a class="table-link" href="{{route('user.transaction', $trans->id)}}"><div class="px-2 py-3">{{$trans->ref}}</div></a></td>
                                <td class="px-0 py-0"><a class="table-link" href="{{route('user.transaction', $trans->id)}}"><div class="px-2 py-3">@if($trans->status == 'processing')
                                    <span class="badge badge-soft-purple"> {{ucwords($trans->status)}}</span>
                                    @elseif($trans->status == 'successful')
                                    <span class="badge badge-soft-success"> {{ucwords($trans->status)}}</span>
                                    @elseif($trans->status == 'reversed')
                                    <span class="badge badge-soft-dark"> {{ucwords($trans->status)}}</span>
                                    @elseif($trans->status == 'failed')
                                    <span class="badge badge-soft-danger"> {{ucwords($trans->status)}}</span>
                                    @elseif($trans->status == 'declined')
                                    <span class="badge badge-soft-warning"> {{ucwords($trans->status)}}</span>
                                    @else
                                    <span class="badge badge-soft-secondary"> {{ucwords($trans->status)}}</span>
                                    @endif
                                    </div>
                                    </a>
                                </td>
                                <td class="px-0 py-0"><a class="table-link" href="{{route('user.transaction', $trans->id)}}"><div class="px-2 py-3">{{moneyFormat($trans->amount, 'NG')}}</div></a></td>
                                <td class="px-0 py-0"><a class="table-link" href="{{route('user.transaction', $trans->id)}}"><div class="px-2 py-3">@if($trans->type == 'credit')
                                    <span class="badge badge-soft-success rounded-circle me-2 px-1 py-1 fw-bold">
                                        <i class="mdi mdi-arrow-up font-10"></i>
                                    </span>
                                    @else
                                    <span class="btn btn-soft-success btn-icon-circle btn-icon-circle-sm mr-2">
                                        <i class="mdi mdi-arrow-down font-16"></i>
                                    </span> 
                                    @endif
                                    {{ucwords($trans->type)}}
                                    </div></a>
                                </td>
                                <td class="px-0 py-0"><a class="table-link" href="{{route('user.transaction', $trans->id)}}"><div class="px-2 py-3">{{date('jS F Y, h:iA', strtotime($trans->created_at))}}</div></a></td>
                                <td class="px-0 py-0"><a class="table-link" href="{{route('user.transaction', $trans->id)}}"><div class="px-2 py-3">{{$trans->purpose}}</div></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                
               
            </div>
            <div class="col-md-4">
                
            </div>
        </div> <!-- end col -->

    </div>                  
    

    <script>
        var ctx = document.getElementById('groupedBarChart').getContext('2d');
        
        // Use the data values passed from the controller
        var labels = @json($labels);
        var data2023 = @json($data2023);
        var data2024 = @json($data2024);
        var data2025 = @json($data2025); 
    
        var groupedBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Identity Verification',
                        data: data2023,
                        backgroundColor: '#68DBF2',
                        borderWidth: 1
                    },
                    {
                        label: 'Business Verification',
                        data: data2024,
                        backgroundColor: '#0E2554',
                        borderWidth: 1
                    },
                    {
                        label: 'Address Verification',
                        data: data2025,
                        backgroundColor: '#0034FF',  
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    
<!-- Include necessary JS (jQuery, Moment.js, Bootstrap, and Date Range Picker) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function() {
        // Initialize the Date Range Picker
        $('#daterange').daterangepicker({
            autoUpdateInput: false,  // Prevent automatic input field update
            locale: {
                format: 'MM/DD/YYYY',
                applyLabel: 'Apply',
                cancelLabel: 'Clear',
                startLabel: 'Start Date',
                endLabel: 'End Date'
            }
        });
         $('#daterange').on('apply.daterangepicker', function(ev, picker) {
            // Update the input field with the selected dates
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });
        $('#daterange').on('cancel.daterangepicker', function(ev, picker) {
            // Reset the input field to the default placeholder
            $(this).val('Start Date - End Date');
        });
    }); 
</script>
@endsection