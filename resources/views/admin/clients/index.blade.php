 <?php  
use App\Models\User as User;
?>
 
 @extends('layouts.admin')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">All Clients</h4>
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
                        <h4 class="card-title" style="display:inline">All Clients</h4>
                            <span style="float:right" class="btn btn-primary"><i class="fa fa-user"></i> <a style="color:#fff" href="{{route('admin.client.create')}}">Create New Client</a></span>
                      </div><!--end card-header-->
                    
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Last Login</th>
                                <th>Login Ip</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($clients as $client )
                               <tr>
                                <td>{{$client->user->firstname .''.$client->user->lastname}}</td>
                                <td>{{$client->user->email}}</td>
                                <td>{{$client->user->phone}}</td>
                                <td>@if($client->is_admin_verified == User::ADMIN_VERIFIED) <span class="badge bg-success"> Verified</span> 
                                @elseif($client->is_admin_verified == User::ADMIN_SUSPENDED) <span class="badge bg-danger">Suspended </span> 
                                @else <span class="badge bg-warnig"> Pending</span></td>
                                @endif
                                {{-- <td> {{$client->user->activities->created_at->format('d/m/y H:I')}}</td>  --}}
                                <td></td>
                                <td> {{$client->user->activities->ip_address}}</td>
                                <td> {{$client->user->created_at}}</td>
                                <td>
                                    <div class="dropdown kanban-main-dropdown">
                                        <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1" style="">
                                            <a class="dropdown-item " href="{{route('admin.client.details', encrypt($client->id))}}" > View User  </a>
                                            <a class="dropdown-item " href="#" > Suspend User <span class="badge bg-danger"> X </span> </a>
                                            {{-- <a class="dropdown-item" href="{{route('client.company.details')}}">View Company</a> --}}
                                            <a class="dropdown-item" href="{{route('admin.client.candidates', encrypt($client->id))}}}"> view Candidates</a>
                                            <a class="dropdown-item" href="#">View Payment History</a>
                                        </div>
                                    </div>
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

