@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">{{$candidate}} Verifications</h4>
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
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <div class="row ">
            <div class="col-lg-12">
                <div class="row justify-content-left">
                    <div class="col-md-6 col-lg-4">
                        <div class="card report-card ">
                            <div class="card-body" >
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="mb-0 fw-semibold text-black">Total Addresses</p>
                                        <h3 class="m-0 text-black">{{count($verification)}}</h3>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card report-card">
                            <div class="card-body" >
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-black mb-0 fw-semibold">Pending Address</p>
                                        <h3 class="m-0 text-black">{{count($not_verified)}}</h3>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card report-card">
                            <div class="card-body" >
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-black mb-0 fw-semibold">Verified Addresses</p>
                                        <h3 class="m-0 text-black">{{count($verified)}}</h3>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="card report-card">
                            <div class="card-body" >
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-black mb-0 fw-semibold">Cancelled Requests</p>
                                        <h3 class="m-0 text-black">{{$cancelled}}</h3>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card report-card">
                            <div class="card-body" >
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                         <p class="text-black mb-0 fw-semibold">Requests Awaiting Reschedule</p>
                                        <h3 class="m-0 text-black">{{$awaiting_reschedule}}</h3>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div> 
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card report-card">
                            <div class="card-body" >
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-black mb-0 fw-semibold">Verification not Requested</p>
                                        <h3 class="m-0 text-black">{{$not_requested}}</h3>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div> --}}
                    <!--end col-->
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Candidate Verificaton logs</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Verification ID</th>
                                    <th>Status</th>
                                    <th>Address Type</th>
                                    <th>Date Requested</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($verification as $verifications)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$candidate}}</td>
                                    <td>{{$verifications->reference_id}}</td>
                                    <td>
                                        @if($verifications->status == 'pending')
                                        <span class="badge badge-soft-purple">Pending</span>
                                        @elseif($verifications->status == 'completed' && $verifications->task_status == 'VERIFIED')
                                        <span class="badge badge-soft-success">Completed & Verified</span>
                                        @elseif($verifications->status == 'awaiting_reschedule')
                                        <span class="badge badge-soft-dark">Awaiting Reschedule</span>
                                        @elseif($verifications->status == 'completed' && $verifications->task_status == 'NOT_VERIFIED')
                                        <span class="badge badge-soft-warning">Completed but Not Verified</span>
                                        @elseif($verifications->status == 'canceled')
                                        <span class="badge badge-soft-danger"> {{$verifications->status}}</span>
                                        @else
                                        <span class="badge badge-soft-danger"> {{$verifications->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                    @if($verifications->guarantor != null) Guarantor Address @elseif($verifications->business != null) Business Address
                                      @else Individual Address
                                    @endif</td>
                                    <td>{{$verifications->created_at}}</td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle arrow-none" id="seeMore" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h font-12 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="seeMore" style="">
                                            {{-- <a class="dropdown-item" href="#">Copy Reference Id</a> --}}
                                                {{-- @if($address->addressVerificationDetail()->exists()) --}}
                                                <a class="dropdown-item " style="background:#2e5ab7; color:#fff; border: 1px solid #2e5ab7 "  href="{{route('showAddressReport',['slug' => $verifications->type, 'addressId' => encrypt($verifications->id) ] )}}">View Verification Report</a>
                                                {{-- @else --}}
                   
                                                {{-- @endif --}}
                                                
                                            </div>
                                        </div> 
                                    </td>
                                  
                                </td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        @endsection
        @section('script')
        <script>

        </script>

        @endsection