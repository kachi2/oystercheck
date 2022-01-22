 @extends('layouts.admin')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Candidate Onboarding</h4>
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
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card ">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-0 fw-semibold text-white">Total Candidates<h3 class="m-0 text-white">{{count($candidates)}}</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Total Verified Candidates</p>
                                                    <h3 class="m-0 text-white">{{count($verified)}}</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Rejected Candidates</p>
                                                    <h3 class="m-0 text-white">{{count($rejected)}}</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                              </div> <!--end col-->          
                              <!--end col-->                               
                            </div><!--end row-->                
                        </div>
        </div>
     @if(isset($services))
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4 ">

                                            
                                                <div class="custom-border mb-3"></div>
                                                <h3 class="pro-title">{{strtoupper($candidate->user->name)}}</h3>
                                            
                                                <ul class="list-unstyled personal-detail mb-0">
                                                    <li class=""><i class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b> Phone </b> : {{$candidate->phone}}</li>
                                                    <li class="mt-2"><i class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b> Email </b> : {{$candidate->user->email}}</li>
                                                    <li class="mt-2"><i class="ti ti-briefcase text-secondary font-16 align-middle me-2"></i> <b> Company </b> : {{$candidate->company}}</li>
                                                    <li class="mt-2"><i class="ti ti-world text-secondary font-16 align-middle me-2"></i> <b> Address </b> :{{$candidate->address}} </li>  
                                                      <li class=""> <i class="ti ti-world text-secondary font-16 align-middle me-2"></i><b> City</b> : {{$candidate->city}}</li>
                                                <li class=""> <i class="ti ti-world text-secondary font-16 align-middle me-2"></i> <b> State</b> : {{$candidate->state}}</li>
                                                <li class=""> <i class="ti ti-world text-secondary font-16 align-middle me-2"></i><b> Country</b> : {{$candidate->country}}</li>                                                 
                                                </ul>
                                          
                                             

                                        </div><!--end col-->
                                        <div class="col-lg-8 align-self-center">
                                            <div class="single-pro-detail">
                                                <div class="custom-border mb-3"></div>
                                                <h3 class="pro-title">Verification Services</h3>
                                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>Service Name</th>
                                                <th>Status</th>
                                                <th>Document</th>
                                                <th>QA Status</th>
                                                <th>QA Review</th>
                                                <th>Payment Status</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @foreach ($services as $ss )
                                            <tr>
                                                <td>{{$ss->service->name}}</td>
                                                @if($ss->status == "approved")
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                 @elseif($ss->status == "failed")
                                                <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                @else
                                                 <td>
                                                    <form action="{{route('statusUpdate',encrypt($ss->id))}}" method="post" id="form1">
                                                        @csrf
                                                    <select class="p-1" style="border:1px solid green; border-radius:5px" id="status" name="status" >
                                                        <option  value="0" class="badge badge-soft-warning ">Pending</option>
                                                    <option value="1" class="badge badge-soft-info"> Approve </option>
                                                        <option  value="2" class="badge badge-soft-danger"> Reject </option>
                                                    </select>
                                                </form>
                                                     </td>
                                                @endif
                                                <td>@if(!empty($ss->doc)) <a href="{{route('fileDownload',encrypt($ss->id))}}"> {{$ss->doc}} <i class="fa fa-download"> </i></a> @else No Documents @endif</td>

                                                 @if($ss->QA_approved == "approved")
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                @elseif($ss->QA_approved == "failed")
                                                <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                @else
                                                 <td>
                                                    <form action="{{route('qaUpdate', encrypt($ss->id))}}" method="post" id="form2">
                                                        @csrf
                                                        <select class="p-1" style="border:1px solid green; border-radius:5px" id="qa" name="qa" >
                                                    <option class="badge badge-soft-warning " value="0">Pending</option>
                                                <option class="badge badge-soft-info" value="1"> Approve </option>
                                                    <option class="badge badge-soft-danger" value="2"> Reject </option>
                                                </select>
                                                    </form>
                                                </td>
                                                @endif
                                                <td> @if(!empty($ss->QA_review))
                                                    <span class="badge badge-soft-secondary" style="flex-wrap:wrap">{{substr($ss->QA_review, 0,30)}}</span>
                                                    @else
                                                    <span class="badge badge-soft-info review" type="button">Click to type review</span>

                                                    <span class="reviews" hidden> 
                                                        <form action="{{route('qaReviews',encrypt($ss->id))}}" method="post" id="form2">
                                                            @csrf
                                                    <input type="text" style="border:1px solid darkblue" name="reviews" class="qaReviews" >  <button type="submit" class="btn bnt-xm btn-primary"> Save</button>
                                                        </form>
                                                </span>
                                                    @endif
                                                </td>
                                                  @if($ss->is_paid == 1)
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                @elseif($ss->is_paid == 2)
                                                <td><span class="badge badge-soft-danger">Not Paid</span></td>
                                                @else
                                                <td>
                                                    <form action="{{route('paymentUpdate', encrypt($ss->id))}}" method="post" id="form3">
                                                        @csrf
                                                        <select class="p-1" style="border:1px solid green; border-radius:5px" id="payment" name="payment">
                                                    <option class="badge badge-soft-warning " value="0">Pending</option>
                                                <option class="badge badge-soft-info" value="1"> Approve </option>
                                                    <option class="badge badge-soft-danger" value="2"> Reject </option>
                                                </select>
                                                    </form>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->                     
                                            </div>
                                        </div><!--end col-->                                            
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
            @endif
        </div>                  
@endsection



@section('script')
    
<script>

$('#status').on('change', function(){
    $('#form1').submit();

});

$('#payment').on('change', function(){
    $('#form3').submit();

});
$('#qa').on('change', function(){
    $('#form2').submit();

});




$('.review').on('click', function(){
        $('.reviews').attr('hidden', false);
        $('.review').attr('hidden', true);
$('.qaReviews').on('change', function(){
    $('#form4').submit();
});
   
 });



    
</script>
@endsection