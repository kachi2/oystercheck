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
                  <div class="col-lg-12 align-self-center">
                  <div class="card">
                                <div class="card-body">
                                            <div class="single-pro-detail">
                                                <div class="custom-border mb-3"></div>
                                                <h3 class="pro-title">Verification Services</h3>
                                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>Service Name</th>
                                                <th>Status</th>
                                                <th>Document</th>
                                                <th>QA Status</th>
                                                <th>QA Review</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @foreach ($service as $ss )
                                            <tr>
                                                <td>{{$ss->service->name}}</td>
                                                @if($ss->status == "approved")
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                 @elseif($ss->status == "failed")
                                                <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                @else
                                                 <td><span class="badge badge-soft-warning">Pending</span></td>
                                                @endif
                                                <td>{{$ss->doc}}</td>
                                                 @if($ss->QA_approved == "approved")
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                @elseif($ss->QA_approved == "failed")
                                                <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                @else
                                                 <td><span class="badge badge-soft-warning">Pending</span></td>
                                                @endif
                                                <td><p style="font-size:9px">{{$ss->QA_review}}</p></td>
                                                 
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                                                     
                                            </div>
                                        </div><!--end col-->
                                        </div>
                                        </div>                          
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

       
</script>

@endsection