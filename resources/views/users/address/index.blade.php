 @extends('layouts.app')
 @section('content')
 <div class="page-content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12">
                 <div class="page-title-box">
                     <div class="row">
                         <div class="col">
                             <h4 class="page-title">{{$slug->name}}</h4>
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
         <div class="row ">
             <div class="col-lg-12">
                 <div class="row justify-content-left">
                     <div class="col-md-6 col-lg-3">
                         <div class="card report-card ">
                             <div class="card-body" style="background:rgb(36, 16, 82)">
                                 <div class="row d-flex justify-content-center">
                                     <div class="col">
                                         <p class="mb-0 fw-semibold text-white">Verified Requests</p>
                                         <h3 class="m-0 text-white">{{$verified}}</h3>
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
                     <div class="col-md-6 col-lg-3">
                         <div class="card report-card">
                             <div class="card-body" style="background:rgb(36, 16, 82)">
                                 <div class="row d-flex justify-content-center">
                                     <div class="col">
                                         <p class="text-white mb-0 fw-semibold">Unverified Requests</p>
                                         <h3 class="m-0 text-white">{{$not_verified}}</h3>
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
                     <div class="col-md-6 col-lg-3">
                         <div class="card report-card">
                             <div class="card-body" style="background:rgb(36, 16, 82)">
                                 <div class="row d-flex justify-content-center">
                                     <div class="col">
                                         <p class="text-white mb-0 fw-semibold">Pending Requests</p>
                                         <h3 class="m-0 text-white">{{$pending}}</h3>
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
                     <div class="col-md-6 col-lg-3">
                         <div class="card report-card">
                             <div class="card-body" style="background:rgb(36, 16, 82)">
                                 <div class="row d-flex justify-content-center">
                                     <div class="col">
                                         <p class="text-white mb-0 fw-semibold">Cancelled Requests</p>
                                         <h3 class="m-0 text-white">{{$cancelled}}</h3>
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
                     <div class="col-md-6 col-lg-3">
                         <div class="card report-card">
                             <div class="card-body" style="background:rgb(36, 16, 82)">
                                 <div class="row d-flex justify-content-center">
                                     <div class="col">
                                         <p class="text-white mb-0 fw-semibold">Requests Awaiting Reschedule</p>
                                         <h3 class="m-0 text-white">{{$awaiting_reschedule}}</h3>
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
                     <div class="col-md-6 col-lg-3">
                         <div class="card report-card">
                             <div class="card-body" style="background:rgb(36, 16, 82)">
                                 <div class="row d-flex justify-content-center">
                                     <div class="col">
                                         <p class="text-white mb-0 fw-semibold">Verification not Requested</p>
                                         <h3 class="m-0 text-white">{{$not_requested}}</h3>
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
                     <!--end col-->
                 </div>
                 <!--end row-->
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12">
                 <div class="card mb-3" style="background:#f1f5fa">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="card-body">
                                 <h5 class="card-title">Verify @if($slug->slug == 'individual_address') an Individual @elseif ($slug->slug == 'reference_address') a Guarantor @else a Business @endif </h5>
                                 <p class="card-text mb-0">Wether you are verifying a business, a guarantor or an individual's address, we provide key insights and overall analysis of any verification request made.</p>
                                 <p class="card-text mb-0"><small class="text-muted">Use the "Create Candidate" button to initiate the {{$slug->name}} process.</small></p>
                             </div>
                         </div>
                         <div class="col-md-6 align-self-center">
                             <div class="card-body d-flex justify-content-lg-end justify-content-center">
                                 <a type="button" class="btn btn-primary btn-lg btn-square" href="{{route('showCreateCandidate', $slug->slug)}}">Create Candidate</a>

                             </div>
                         </div>
                         <!--end col-->
                         <!--end col-->
                     </div>
                     <!--end row-->
                 </div>
                 <!--end card-->
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">{{$slug->name}} log</h4>
                     </div>
                     <!--end card-header-->
                     <div class="card-body">
                         <table id="datatable-buttons" class="table table-striped dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                             <thead>
                                 <tr>
                                     <th>SN</th>
                                     <th>Address Candidate</th>
                                     <th>Verification ID</th>
                                     <th>Status</th>
                                     <th>Initiated by</th>
                                     <th>Fee</th>
                                     <th>Date Requested</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($logs as $transaction)
                                 <tr>
                                     <td>{{$loop->iteration}}</td>
                                     <td>{{$transaction->first_name}} {{$transaction->last_name}}</td>
                                     <td>{{$transaction->addressVerificationDetail()->exists() ? $transaction->addressVerificationDetail->reference_id : '---'}}</td>
                                     <td>
                                         @if($transaction->addressVerificationDetail()->exists())
                                         @if($transaction->addressVerificationDetail->status == 'pending')
                                         <span class="badge badge-soft-purple">Pending</span>
                                         @elseif($transaction->addressVerificationDetail->status == 'completed' && $transaction->addressVerificationDetail->task_status == 'VERIFIED')
                                         <span class="badge badge-soft-success">Completed & Verified</span>
                                         @elseif($transaction->addressVerificationDetail->status == 'awaiting_reschedule')
                                         <span class="badge badge-soft-dark">Awaiting Reschedule</span>
                                         @elseif($transaction->addressVerificationDetail->status == 'completed' && $transaction->addressVerificationDetail->task_status == 'NOT_VERIFIED')
                                         <span class="badge badge-soft-warning">Completed but Not Verified</span>
                                         @elseif($transaction->addressVerificationDetail->status == 'canceled')
                                         <span class="badge badge-soft-danger"> {{$transaction->addressVerificationDetail->status}}</span>
                                         @else
                                         <span class="badge badge-soft-danger"> {{$transaction->addressVerificationDetail->status}}</span>
                                         @endif
                                         @else
                                         <span class="badge badge-soft-secondary">No verification Request Yet</span>
                                         @endif
                                     </td>
                                     <td>{{$transaction->user->name}}</td>
                                     <td>{{$transaction->fee}}</td>
                                     <td>{{$transaction->created_at}}</td>

                                     <td>
                                         <div class="dropdown d-inline-block">
                                             <a class="dropdown-toggle arrow-none" id="seeMore" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                 <i class="fa fa-ellipsis-h font-12 text-muted"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="seeMore" style="">
                                                 <a class="dropdown-item" href="#">Copy Reference Id</a>
                                                 @if($transaction->addressVerificationDetail()->exists())
                                                 <a class="dropdown-item" href="{{route('showAddressReport', ['slug' => encrypt($slug->slug), 'addressId' => encrypt($transaction->id)])}}">View Verification Report</a>
                                                 @else
                                                 <a class="dropdown-item" href="{{route('showVerificationDetailsForm', ['slug' => encrypt($slug->slug), 'service_ref' => $transaction->service_reference])}}">Make a Verification Request</a>
                                                 @endif
                                             </div>
                                         </div>
                                     </td>
                                     <!-- <td> @if($transaction->status == 'successful')
                                     <a href="{{route('verify.details', encrypt($trans->id))}}">View Details</a>
                                     @endif
                                 </td> -->
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