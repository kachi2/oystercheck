 @extends('layouts.admin')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Create Client</h4>
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

                    @if(Session::has('alert'))
                    <span class="btn btn-danger">{{Session::get('message')}}</span>
                    @endif

           <!-- end col -->
        </div>   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new Client</h4>
                    </div><!--end card-header-->
                       <form method="post" action="{{route('admin.client.store')}}" class="add-candidate-form" enctype="multipart/form-data">
                      @csrf
                    <div class="card-body bootstrap-select-1">
                        <div class="row p-3">
                        
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control"  name="name" id="floatingInput" placeholder="Full Name">
                                        <label for="floatingInput">Contact Person</label>
                                    </div>
                            </div><!-- end col -->
                                <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="floatingInput">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div><!-- end col -->
                            <h4 class="card-title  p-2" style="color:#000">Company Details</h4> 
                            <hr>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="company_name" id="floatingInput">
                                        <label for="floatingInput">Company Name</label>
                                    </div>
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="company_email" id="floatingInput" >
                                        <label for="floatingInput">Company Email</label>
                                    </div>
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="company_phone" id="floatingInput" >
                                        <label for="floatingInput">Company Phone</label>
                                    </div>
                            </div><!-- end col -->
                            
                             <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control"  name="company_address" id="floatingInput" >
                                        <label for="floatingInput">Company Full Address</label>
                                    </div>
                            </div><!-- end col -->
                             <div class="col-md-12">
                                <div class="form-floating mb-3">
                                        <input type="file" class="form-control"  name="image" id="floatingInput" >
                                        <label for="floatingInput">Company Logo</label>
                                    </div>
                            </div><!-- end col -->
                              <center><button type="submit" class="btn btn-primary btn-lg w-20">Create Client Acccount</button> 
                            </center></div>       
                                                                  
                        </div><!-- end row --> 
                    </div><!-- end card-body --> 
                   
                </div> <!-- end card -->                               
            </div> <!-- end col -->  


              <!-- end col -->   
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

        jQuery(document).on('click', '.submitbtn', function(e){
      e.preventDefault();
      var valid = 'true';

      if( jQuery('.service-checkbox:checked').length < 1 ){
        jQuery('.msg-box').text('Please select atleast one Service!');
        
        valid = 'false';

        setInterval(function(){ 
          jQuery('.msg-box').text('');
        }, 5000);
      }

     });

      jQuery(document).on('click', '.submitbtn', function(e){
    e.preventDefault();
      jQuery('.add-candidate-form').submit();
  });

  jQuery(document).on('click', '.cancelbnt', function(e){
    e.preventDefault();
    jQuery('.add-candidate-form').trigger("reset");  
  });
</script>

@endsection