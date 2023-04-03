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
                                <div class="col-md-3 col-lg-3">
                                    <div class="card report-card ">
                                        <div class="card-body" >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-0 fw-semibold text-black">Total Candidates</p>
                                                    <h3 class="m-0 text-black">{{count($candidates)}}</h3>
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
                                <div class="col-md-3 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body" >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-black mb-0 fw-semibold">Total Verified Candidates</p>
                                                    <h3 class="m-0 text-black">{{count($verified)}}</h3>
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
                                <div class="col-md-3 col-lg-3">
                                    <div class="card report-card ">
                                        <div class="card-body" >
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-0 fw-semibold text-black">Total Rejected Candidates </p>
                                                         <h3 class="m-0 text-black">{{count($rejected)}}</h3>
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
                                <div class="col-md-3 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-black mb-0 fw-semibold">Pending Candidates</p>
                                                    <h3 class="m-0 text-black">{{count($pending)}}</h3>
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
                                <label class="mb-3" style="font-weight:bolder">First Name</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="first_name" value="{{old('first_name')}}" class="form-control mb-3 custom-select @error('first_name') is-invalid @enderror" placeholder="Enter candidate First Name"> 
                                
                          
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Last Name</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="last_name" value="{{old('last_name')}}" class="form-control mb-3 custom-select @error('last_name') is-invalid @enderror" placeholder="Enter candidate Last Name"> 
                                
                            </div><!-- end col -->
                                <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Email</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="email"  name="email"  value="{{old('email')}}" class="form-control mb-3 custom-select @error('email') is-invalid @enderror" placeholder="Enter candidate Email"> 
                             
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Phone Number</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="phone" value="{{old('phone')}}" class="form-control mb-3 custom-select @error('phone') is-invalid @enderror" placeholder="Enter candidate Phone"> 
                               
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Address </label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="address" value="{{old('addreess')}}" class="form-control mb-3 custom-select @error('address') is-invalid @enderror" placeholder="Enter candidate Address"> 
                               
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">City</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="city" value="{{old('city')}}" class="form-control mb-3 custom-select @error('city') is-invalid @enderror" placeholder="Enter candidate City"> 
                               
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">State</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="state" value="{{old('state')}}" class="form-control mb-3 custom-select @error('state') is-invalid @enderror" placeholder="Enter candidate City"> 
                                
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">country</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="country" value="{{old('country')}}" class="form-control mb-3 custom-select @error('country') is-invalid @enderror" placeholder="Enter candidate City"> 
                               
                            </div>
                             <div class="col-md-6">
                                <label class="mb-3" style="font-weight:bolder">Company Name</label>
                                 <span style="color:red; font-weight:bolder"> * </span> 
                                <input type="text"  name="company" value="{{old('company_name')}}" class="form-control mb-3 custom-select @error('company_name') is-invalid @enderror" placeholder="Enter company name"> 
                               
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
                                {{-- <th>Fee</th> --}}
                                <th>Select </th>
                            </tr> 
                            </thead>
                            <tbody>
                              @foreach ($verifications as $verify)
                            <tr>
                                <td>{{$verify->name}}</td>
                                {{-- <td>{{$verify->fee}}</td> --}}

                                <td><input type="checkbox" class="service-checkbox "  name="verifyServices[]" value="{{$verify->id}}" data-price="{{$verify->fee}}"> </td>
                            </tr>
                              
                                @endforeach
                                <tr>
                                <td></td>
                                {{-- <td>Total</td> --}}
                                {{-- <td class="totalprice">N<strong>0</strong></td> --}}
                            </tr>
                            </tbody>
                        </table> 
                                <span class="pl-5"><button type="submit" class="btn btn-primary w-50 btn-lg submitbtn">Create Candidate</button> </span> 
                         
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