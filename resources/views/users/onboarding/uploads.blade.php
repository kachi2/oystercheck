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
                                    <input type="file" id="input-file-now" class="dropify" name="images[]" va/>   
                                    <input type="hidden" name="candidate[]" value="{{$ss->id}}">                                            
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

