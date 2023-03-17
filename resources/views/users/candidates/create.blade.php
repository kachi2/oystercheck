 @extends('layouts.app')
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
                                <div class="col-md-4 col-lg-4">
                                    <div class="card report-card ">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-0 fw-semibold text-white">Total Candidates</p>
                                                    <h3 class="m-0 text-white">{{count($candidates)}}</h3>
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
                                <div class="col-md-4 col-lg-4">
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
                                <div class="col-md-4 col-lg-4">
                                    <div class="card report-card ">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-0 fw-semibold text-white">Total Rejected Candidates </p>
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
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body" style="background:rgb(36, 16, 82)">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Pending Candidates</p>
                                                    <h3 class="m-0 text-white">{{count($pending)}}</h3>
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

           <!-- end col -->
        </div>   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new Candidate</h4>
                    </div><!--end card-header-->
                       <form method="post" action="{{route('candidate.store')}}" class="add-candidate-form">
                      @csrf
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Full Name</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="name" class="form-control mb-3 custom-select" placeholder="Enter candidate Name"> 
                            </div><!-- end col -->
                                <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Email</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="email"  name="email" class="form-control mb-3 custom-select" placeholder="Enter candidate Email"> 
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Phone Number</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="phone" class="form-control mb-3 custom-select" placeholder="Enter candidate Phone"> 
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Address </label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="address" class="form-control mb-3 custom-select" placeholder="Enter candidate Address"> 
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">City</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="city" class="form-control mb-3 custom-select" placeholder="Enter candidate City"> 
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">State</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="state" class="form-control mb-3 custom-select" placeholder="Enter candidate City"> 
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">country</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="country" class="form-control mb-3 custom-select" placeholder="Enter candidate City"> 
                            </div>
                             <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Company Name</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="company" class="form-control mb-3 custom-select" placeholder="Enter company name"> 
                            </div><!-- end col -->
                            </div>       
                                                                  
                        </div><!-- end row --> 
                    </div><!-- end card-body --> 
                   
                </div> <!-- end card -->                               
            </div> <!-- end col -->  


              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="display:inline">Select Verification to carryout for this Candidate</h4>
                        
                    </div><!--end card-header-->
                    
                    <div class="card-body">  
                        <table id="table" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Verification</th>
                                <th>Fee</th>
                                <th>Action </th>
                            </tr> 
                            </thead>
                            <tbody>
                              @foreach ($verifications as $verify)
                            <tr>
                                <td>{{$verify->name}}</td>
                                <td>{{$verify->fee}}</td>

                                <td><input type="checkbox" class="service-checkbox" name="verifyServices[]" value="{{$verify->id}}" data-price="{{$verify->fee}}"> </td>
                            </tr>
                              
                                @endforeach
                                <tr>
                                <td></td>
                                <td>Total</td>
                                <td class="totalprice">N<strong>0</strong></td>
                            </tr>
                            </tbody>
                        </table> 
                                <span class=""><button type="submit" class="btn btn-primary w-50 submitbtn">Create Candidate</button> </span> 
                         
                      <span class="msg-box"></span>
                    </div>
                </div>

            </div> <!-- end col -->   
             </form>    
             
@endsection

@section('script')

<script>

 jQuery(document).on('change', '.service-checkbox', function(e){
      e.preventDefault();
      var totalprice = parseFloat(jQuery('.totalprice strong').text());
     // alert(totalprice);
      var thisprice = parseFloat(jQuery(this).attr('data-price'));
      if( jQuery(this).is(':checked') ){
         totalprice = totalprice+thisprice;
      }else{
         totalprice = totalprice-thisprice;
      }
         jQuery('.totalprice strong').text(totalprice);
         jQuery('input[name="totalprice"]').val(totalprice);
    });
</script>

@endsection