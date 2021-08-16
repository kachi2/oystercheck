 @extends('layouts.app')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Phone Verifications</h4>
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
                                                    <p class="mb-0 fw-semibold text-white">Successful verifications</p>
                                                    <h3 class="m-0 text-white">50000</h3>
                                                    <p class="mb-0 text-truncate text-white"><span class="text-success">+50</span> this week</p>
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
                                                    <p class="text-white mb-0 fw-semibold">Failed verifications</p>
                                                    <h3 class="m-0 text-white">200</h3>
                                                    <p class="mb-0 text-truncate text-white"><span class="text-danger">+5</span> this week</p>
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
                                                    <p class="text-white mb-0 fw-semibold">Pending Request</p>
                                                    <h3 class="m-0 text-white">500</h3>
                                                    <p class="mb-0 text-truncate text-white"><span class="text-success">+20</span> this week</p>
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

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Phone Number Verify</h4>
                        <p class="text-muted mb-0">Our phone number verification allows you to verify details used in regestring the phone number.
                        </p>
                    </div><!--end card-header-->
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="mb-3">Enter Phone number</label>
                                <input type="text" class="form-control mb-3 custom-select" placeholder="phone number"> 
                            </div><!-- end col -->                                     
                             <!-- end col -->
                             
                             <div class="col-md-12">
                            <span class="float-end"><button type="submit" class="btn btn-primary w-100"> Verify Phone</button> </span> 
                            </div>                                               
                        </div><!-- end row --> 
                    </div><!-- end card-body --> 
                </div> <!-- end card -->                               
            </div> <!-- end col -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Note!</h4>
                        <p class="text-muted mb-0">Phone Number verification is an instant verification, you will be charged N500 per verification </p>
                    </div><!--end card-header-->
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="mb-3">Wallet Balance</label> 
                                <button class="btn btn-soft-primary"> N3000</button>  
                            </div>
                            <hr>  <!-- end row -->  
                            <div class="col-md-12">

                                <label class="mb-3 text-danger">Your wallet balance is too low for this transaction</label>  
                            </div>                                
                            <!-- end row -->
                        </div><!-- end row -->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->                               
            </div> <!-- end col -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Phone Verification log</h4>
                      
                    </div><!--end card-header-->
                    <div class="card-body">  
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#S/N</th>
                                <th>Phone</th>
                                <th>verified by</th>
                                <th>Fee</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                            </thead>


                            <tbody>
                           
                            <tr>
                                <td>1</td>
                                <td>2348039366207</td>
                                <td>Kachi</td>
                                <td>N400</td>
                                <td><span class="text-success">success</span></td>
                                <td>24/6/2021</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2348039366207</td>
                                <td>Kachi</td>
                                <td>N400</td>
                                <td><span class="text-info">pending</span></td>
                                <td>24/6/2021</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2348039366207</td>
                                <td>Kachi</td>
                                <td>N400</td>
                                <td><span class="text-danger">failed</span></td>
                                <td>24/6/2021</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2348039366207</td>
                                <td>Kachi</td>
                                <td>N400</td>
                                <td><span class="text-info">pending</span></td>
                                <td>24/6/2021</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2348039366207</td>
                                <td>Kachi</td>
                                <td>N400</td>
                                <td><span class="text-success">success</span></td>
                                <td>24/6/2021</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2348039366207</td>
                                <td>Kachi</td>
                                <td>N400</td>
                                <td><span class="text-danger">failed</span></td>
                                <td>24/6/2021</td>
                            </tr>
                      
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> 
                    

                </div><!-- container -->

                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> All Rights Reserved, Oysterchecks.com <span class="text-muted d-none d-sm-inline-block float-end"> 
                        with <i class="mdi mdi-heart text-danger"></i> by Morgans Consortium</span>
                </footer><!--end footer-->
            </div>
@endsection