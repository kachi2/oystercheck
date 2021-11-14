 @extends('layouts.admin')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Create Administrator</h4>
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
                        <h4 class="card-title">Create new Administrator</h4>
                    </div><!--end card-header-->
                       <form method="post" action="{{route('administratorStore')}}" class="add-candidate-form">
                      @csrf
                    <div class="card-body bootstrap-select-1">
                        <div class="row p-3">
                        
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"  value="{{old('name')}}" name="name" id="floatingInput" placeholder="Full Name">
                                        <label for="floatingInput">Full Name</label>
                                   @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    {{$message}}
                                    </span>
                                    @enderror
                                    </div>
                                    
                            </div><!-- end col -->
                                <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" id="floatingInput">
                                        <label for="floatingInput">Email address</label>
                                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    {{$message}}
                                    </span>
                                    @enderror
                                    </div>
                                </div><!-- end col -->
                            <h4 class="card-title  p-2" style="color:#000">Other Details</h4> 
                            <hr>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('company_name') is-invalid @enderror"value="{{old('company_name')}}"  name="company_name" id="floatingInput">
                                        <label for="floatingInput">Company Name</label>
                                         @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                    {{$message}}
                                    </span>
                                    @enderror
                                    </div>
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('company_email') is-invalid @enderror" value="{{old('company_email')}}" name="company_email" id="floatingInput" >
                                        <label for="floatingInput">Company Email</label>
                                         @error('company_email')
                                    <span class="invalid-feedback" role="alert">
                                    {{$message}}
                                    </span>
                                    @enderror
                                    </div>
                            </div><!-- end col -->
                             <div class="col-md-6">
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="{{old('company_phone')}}" name="company_phone" id="floatingInput" >
                                        <label for="floatingInput">Company Phone</label>
                                    </div>
                            </div><!-- end col -->

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select name="role" class="form-control" value="{{old('role')}}"> 
                                    @foreach ($roles as $role )
                                    <option value="{{$role->id}}"> {{$role->name}} </option>
                                    @endforeach
                                    </select>
                                        <label for="floatingInput">Select Administrator Role</label>
                                    </div>
                            </div><!-- end col -->
                            
                              <center><button type="submit" class="btn btn-primary btn-lg w-20">Create Administrator</button> 
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