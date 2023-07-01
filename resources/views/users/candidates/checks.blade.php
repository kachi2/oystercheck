@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col pt-5">
                            <h4 class="page-title">Candidate Verification</h4>
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
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> <span style="color:rgb(13, 100, 132); font-style:italics">VERIFY  {{$candidate->service->name}} </span></h4>
                    </div>
                    <!--end card-header-->
                    <form method="post" action="" id="form1" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body bootstrap-select-1">
                            <div class="row">
                                <div class="row" id="Wrapper" >
                                    
                                    <div class="col-md-6 mb-3">
                                        <label class="badge bg-soft-pink p-2"> Uploaded File for {{$candidate->service->name}}</label> 
                                        <div> <a target="_blank" href="{{asset('assets/candidates/'.$candidate->doc)}}"><p {{asset('assets/candidates/'.$candidate->doc)}} height="300px" width="200px"> </p> </a>  </div>
                                    </div>
                                  
                                </div>
                            
                                <div class="col-md-12 mt-3">
                                    <div class="col-md-7 mb-3">
                                        <div class="media align-items-center p-2 border-start bg-light border-2">
                                          
                                            <div class="media-body" style="font-size:12px;"> You are requesting for  custom verification for {{$candidate->service->name}} </div>
                                        </div>
                                        <div class="media align-items-center p-2"> 
                                            <div class="me-3 align-items-center">
                                                <i class="la la-info-circle"></i>
                                            </div>
                                            <div class="media-body" style="font-size:12px;"> <strong>Note:</strong> You will be charged <strong>₦{{number_format($slug->fee, 2)}}</strong> for each {{$slug->slug}} verification</div>
                                        </div>
                                        <div class="p-2"> </div>
                                        <!-- <div class="bg-soft-primary mb-2 p-1" style="font-size:12px;"> <strong>Note:</strong> You will be charged <strong>₦{{number_format($slug->fee, 2)}}</strong> for each {{$slug->slug}} verification</div> -->
                                        <div class="media align-items-center p-2 border-start bg-light border-2">
                                            <div class="me-3 align-items-center">
                                                <input type="checkbox" name="subject_consent" id="subjectConsent" value="false" required>
                                            </div>
                                            <div class="media-body" style="font-size:12px;"> By checking this box you acknowledge that you have gotten consent from that data subject to use their data for verification purposes on our platform in accordance to our <a href="#"> Privacy Policy</a></div>
                                        </div>
                                    </div>
                                    <div class="float-center p-2">
                                        <button type="submit" id="btnsubmit" class="btn btn-primary w-23">
                                            <i class="fas fa-check-double"></i> Send Request </button>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end card-body -->
                    </form>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
    </div>
    @endsection