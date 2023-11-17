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
                            <h4 class="page-title">Activity Logs</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Activity Logs</li>
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
    
        <!--end row-->
        <div class="pb-4">
            <ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile_tab" data-bs-toggle="pill" href="#profile">Activity Logs</a>
                   
            </ul>
        </div>
        <!--end card-body-->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active " id="profile" role="tabpanel" aria-labelledby="profile_tab">
                      
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Activities</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-hover dt-responsive rap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th class="px-2 py-3">Initiator</th>
                                                        <th class="px-2 py-3">Activity</th>
                                                        <th class="px-2 py-3">IP Address</th>
                                                        <th class="px-2 py-3">Device</th>
                                                        <th class="px-2 py-3">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($activities as $activity )
                                                    <tr>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">{{$activity->user->firstname}}</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" >
                                                                <div class="px-2 py-3">{{$activity->activity}}</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">{{$activity->ip_address}}</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">{{substr($activity->user_agent,0,100)}}</div>
                                                            </a>
                                                        </td>
                                                        <td class="px-0 py-0">
                                                            <a class="table-link" href="">
                                                                <div class="px-2 py-3">{{$activity->created_at}}</div>
                                                            </a>
                                                        </td>

                                                        
                                                    </tr> 
                                                    @empty
                                                        
                                                    @endforelse
                                                 
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end tab-pane-->
                    <!--end tab-pane-->
                </div>
                <!--end tab-content-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    @endsection

    @section('script')


    <script src="{{asset('plugins/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.form-wizard.init.js')}}"></script>

