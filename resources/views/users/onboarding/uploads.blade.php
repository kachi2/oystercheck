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
                        <h4 class="card-title">Upload Documents  <span style="color:rgb(17, 128, 175); font-size:14px"> <br> 
                            Note:  File must be image or pdf file</span></h4>
                    </div><!--end card-header-->
                       <form method="post" action="{{route('candidate.FileStore')}}" class="add-candidate-form" enctype="multipart/form-data">
                      @csrf
                      @if(count($service ) > 0)
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                     
                        @foreach ($service as  $ss)
                        
                            <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" style="font-size:11px; color:rgb(5, 5, 114)">Upload File for <span style="color:red"> {{$ss->service->name}} </span></h4>
                                </div><!--end card-header-->
                                
                                <div class="card-body">
                                    <p> <a target="_blank" href="{{asset('/assets/candidates/'.$ss->service->sampled_doc)}}" class="btn-outline-info p-2"> Download Sample File</a>
                                     <span style="float:right"> <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDefault{{$ss->id}}">
                                        <small> Read Instructions</small> 
                                    </button> </span>
                                    </p>
                                    

                                    <input type="file" id="input-file-now" class="dropify" multiple name="images[]" va/>   
                                    <input type="hidden" name="candidate[]" value="{{$ss->id}}">                                            
                                </div><!--end card-body-->
                            
                            </div><!--end card-->
                        </div> 
                        @include('users.onboarding.instructions')
                        @endforeach
                            </div>                       
                        </div><!-- end row --> 
                        <div class="p-4">
                            <button type="submit" class="btn btn-primary w-30 submitbtn p-2 ">Submit Documents</button> 
                        </span> 
                    @else 
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title" style="font-size:11px; color:rgb(5, 5, 114)">You dont have any pending documents to submit </span></h4>
                                    </div><!--end card-header-->
                                
                                </div><!--end card-->
                            </div> 
                        </div><!--end card-->
                    </div> 
                        
                    @endif 
                    </div> 
                        </form>  
                    </div><!-- end card-body --> 
                   
                </div> <!-- end card -->                               
            </div> <!-- end col -->  
                
@endsection

