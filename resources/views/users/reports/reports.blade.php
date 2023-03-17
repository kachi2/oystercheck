
@extends('layouts.app')
@section('content')
  <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Verification Reports</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">Export verifications</li>
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
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                   
 
        @if(Session::has('message'))
        <span class="btn btn-success"> {{Session::get('message')}}</span>
        @endif
         <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Select Verification Type</h4>
                                </div><!--end card-header-->
                                <form method="get" action="{{route('users.getReports')}}" id="formSubmit">
                                @csrf
                                <div class="card-body">
                                      <div class="col-12">
                                    <div class="input-group mb-3">
                                            <select class="form-select" name="verification_id" id="exampleFormControlSelect1">
                                            @foreach ($verifications as  $verify)
                                            <option value="{{encrypt($verify->id)}}">{{$verify->name}}</option>
                                            @endforeach
                                            </select>

                                    </div>
                                    </div> 
                                    
                                
                                   <center> <button type="submit"  id="btnsubmit" class="btn btn-primary btn-lg w-50">Fetch Reports</button>
                                   </center>
                                </div><!--end card-body-->
                                </form>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    @if(isset($reports))
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Payment Transactions log</h4>
                      
                    </div><!--end card-header-->
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Ref</th>
                                <th>Service Reference</th>
                                 <th>Verification Type</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                        @foreach ($reports as $trans )
                            <tr>
                                <td>{{$trans->ref}}</td>
                                <td>@if(isset($trans->service_ref)) {{$trans->service_ref}} @else {{$trans->service_reference}}</td> @endif
                                <td>{{$trans->verification->name}}</td>
                                <td>{{moneyFormat($trans->fee, 'NG')}}</td>
                             @if($trans->status == 'successful') <td class="badge badge-soft-success"> {{$trans->status}}</td> @else 
                             <td class="badge badge-soft-danger"> {{$trans->status}}</td> @endif
                                 <td>{{$trans->created_at->format('d/m/y h:sa')}}</td>    
                            </tr>
                             @endforeach
                          
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
   @endif
                </div><!-- container -->

@endsection
