 @extends('layouts.admin')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">All Administrators</h4>
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
                        <h4 class="card-title" style="display:inline">All Administrators</h4>
                            <span style="float:right" class="btn btn-primary"><i class="fa fa-user"></i> <a style="color:#fff" href="{{route('administratorCreate')}}">Add Administrator</a></span>
                      </div><!--end card-header-->
                    
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company Name</th>
                                <th>Company Email </th>
                                 <th>Company Phone</th>
                                <th>Created On</th>
                                 <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($admins as $admin )
                               <tr>
                                <td>{{$admin->user->name}}</td>
                                <td>{{$admin->user->email}}</td>
                                <td>{{$admin->company_name}}</td>
                                <td>{{$admin->company_email}}</td>
                                
                                <td>{{$admin->company_phone}}</td>
                                <td> {{$admin->created_at}}</td>
                                <td> {{$admin->role->name}}</td>
                                <td><a href="#"> Edit</a></td>
                            </tr>
                                 @endforeach
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
        </div>                  
@endsection