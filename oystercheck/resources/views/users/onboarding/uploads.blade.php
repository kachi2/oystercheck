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

                    @if(Session::has('alert'))
                    <span class="btn btn-danger">{{Session::get('message')}}</span>
                    @endif
           <!-- end col -->
        </div>   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Upload Documents</h4>
                    </div><!--end card-header-->
                       <form method="post" action="{{route('candidate.FileStore')}}" class="add-candidate-form" enctype="multipart/form-data">
                      @csrf
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                        @foreach ($service as  $ss)
                        
                            <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" style="font-size:11px">Upload File for {{$ss->service->name}}</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <input type="file" id="input-file-now" class="dropify" name="images" value="{{$ss->id}}" />                                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> 
                        @endforeach
                            </div>   
                           <center> <span class=""><button type="submit" class="btn btn-primary w-30 submitbtn p-2 ">Submit Documents</button> </span>                   
                            </center>                         
                        </div><!-- end row --> 
                        </form>  
                    </div><!-- end card-body --> 
                   
                </div> <!-- end card -->                               
            </div> <!-- end col -->  
                
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