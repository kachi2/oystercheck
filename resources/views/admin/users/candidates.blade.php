 @extends('layouts.admin')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">All Candidate</h4>
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

            <div class="col-12 pt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="display:inline">All Candidates</h4>
                      </div><!--end card-header-->
                    
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Email Status</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($candidate as $cand )
                               <tr>
                                <td>{{$cand->id}}</td>
                                <td>{{$cand->user->name}}</td>
                                <td>{{$cand->user->email}}</td>
                                <td>{{$cand->phone}}</td>
                                 @if($cand->status == "verified")
                                    <td><span class="badge badge-soft-success">Verified</span></td>
                                    @elseif($cand->status == "rejected")
                                    <td><span class="badge badge-soft-danger">Rejected</span></td>
                                    @else
                                     <td> 
                                        <form action="" method="post" id="form1">
                                            {{-- <form action="{{route('VerifyCandidate',encrypt($cand->user_id))}}" method="post" id="form1"> --}}
                                            @csrf
                                            <select class="p-1" style="border:1px solid green; border-radius:5px" id="verify" name="verify" >
                                        <option class="badge badge-soft-warning " value="0">Pending</option>
                                    <option class="badge badge-soft-info" value="1"> Verify </option>
                                        <option class="badge badge-soft-danger" value="2"> Reject </option>
                                    </select>
                                        </form>
                                    </td>
                                        @endif
                                   
                                   
                                <td>{{$cand->email_status}}</td>
                                <td> {{$cand->created_at}}</td>
                                <td><a href="{{route('admin.candidate.details', encrypt($cand->id))}}"> view Details</a></td>
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

$('#verify').on('change', function(){
    $('#form1').submit();

});

</script>
@endsection