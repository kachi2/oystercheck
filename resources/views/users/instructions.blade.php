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
                            <h4 class="page-title">Getting Started</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Overview of things to complete </li>
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
        <!--end row-->
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Getting Started</h4>
                            </div>
                            <!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Today<i class="las la-angle-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Yesterday</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <ul class="list-group custom-list-group mb-n3">
                            <li class="list-group-item align-items-center d-flex justify-content-between pt-0">
                                <div class="media">
                                    <div class="me-3 align-self-center rounded">
                                        <i class="mdi mdi-numeric-1-circle-outline font35"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="m-0">Complete Your Profile</h5>
                                        <p class="mb-0 text-muted">Please, provide the necessary information for your profile and business to endeavour us activate your account and enjoy hassle-free verification process.</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <div class="align-self-center">
                                    <a href="{{route('user.profile')}}" class="btn btn-sm btn-soft-primary">Let's Go <i class="las la-external-link-alt font-15"></i></a>
                                </div>
                            </li>
                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                <div class="media">
                                    <div class="me-3 align-self-center rounded">
                                        <i class="mdi mdi-numeric-2-circle-outline font35"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="m-0">Fund Your Wallet</h5>
                                        <p class="mb-0 text-muted">Manage and fund your wallet to be able to make a verification request.</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <div class="align-self-center">
                                    <a href="{{route('user.transactions')}}" class="btn btn-sm btn-soft-primary">Let's Go<i class="las la-external-link-alt font-15"></i></a>
                                </div>
                            </li>
                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                <div class="media">
                                    <div class="me-3 align-self-center rounded">
                                        <i class="mdi mdi-numeric-3-circle-outline font35"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="m-0">Dashboard Tour</h5>
                                        <p class="mb-0 text-muted">Need help navigating your Dashboard? Lets give you a tour of your entire dashboard.</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <div class="align-self-center">
                                    <a href="#" class="btn btn-sm btn-soft-primary" data-id="dashboardTour">Let's Go <i class="las la-external-link-alt font-15"></i></a>
                                </div>
                            </li>
                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                <div class="media">
                                    <div class="me-3 align-self-center rounded">
                                        <i class="mdi mdi-numeric-4-circle-outline font35"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="m-0">Knowledge Base</h5>
                                        <p class="mb-0 text-muted">Need help carrying out an action? check here to access a pool of How to's</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <div class="align-self-center">
                                    <a href="{{route('knowledgeBase')}}" class="btn btn-sm btn-soft-primary">Let's Go <i class="las la-external-link-alt font-15"></i></a>
                                </div>
                            </li>
                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                <div class="media">
                                    <div class="me-3 align-self-center rounded">
                                        <i class="mdi mdi-numeric-5-circle-outline font35"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="m-0">FAQs</h5>
                                        <p class="mb-0 text-muted">Check our FAQs to get clarity on our platform.</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <div class="align-self-center">
                                    <a href="{{route('faqs')}}" class="btn btn-sm btn-soft-primary">Let's Go <i class="las la-external-link-alt font-15"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-block align-self-center justify text-center">
                            <h5 class="mt-1 mb-2">Verifications are very easy! takes less than 3 minutes.</h5>
                            <p class="mb-2 text-muted">Want to verify an Individual's identity?
                                <a href="{{route('identityIndex', ['slug'=>'nin'])}}" class="text-primary">Start here <i class="las la-arrow-right"></i></a>
                            </p>
                            <p class="mb-2 text-muted">Want to verify a Business?
                                <a href="{{route('identityIndex', ['slug'=>'cac'])}}" class="text-primary">Start here <i class="las la-arrow-right"></i></a>
                            </p>
                            <p class="mb-0 text-muted">Want to verify an Address?
                                <a href="{{route('identityIndex', ['slug'=>'individual-address'])}}" class="text-primary">Start here <i class="las la-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
        </div>
        <!--end row-->

    </div><!-- container -->
    @endsection

    @section('script')
    <script type="text/javascript">
        // let dashboardTourButton = document.querySelector('[data-id=dashboardTour]');
        // dashboardTourButton.addEventListener('click', (e)=>{
        //     e.preventDefault();
        //     document.body.appendChild('<div style="position: absolute;width:100%;height:100%;backgroundColor:rgba(0,0,0,0.5);z-index:100000000000"></div>')

        // });


    </script>
    @endsection