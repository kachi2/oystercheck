@extends('layouts.app')
@section('content')
<div class="page-content">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-12">
                           <div class="page-title-box">
                               <div class="row">
                                   <div class="col">
                                       <h4 class="page-title">Create Employee Reference</h4>
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
       </div>   
       <div class="row">
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                       <h4 class="card-title">Create Employee Reference </h4>
                   </div><!--end card-header-->
                      <form method="post" action="{{route('candidate.employer-reference.store', ['user_id' => $user_id, 'id' => $id ])}}" class="add-candidate-form">
                     @csrf
                   <div class="card-body bootstrap-select-1">
                       <div class="row">
                           <div class="col-md-6">
                               <label class="mb-3" style="font-weight:bolder"> Company Name</label>
                                <span style="color:red; font-weight:bolder"> * </span> 
                               <input type="text"  name="company_name" value="{{old('company_name')}}" class="form-control mb-3 custom-select @error('company_name') is-invalid @enderror" 
                               placeholder="Company Name"> 
                               
                         
                           </div><!-- end col -->
                           <div class="col-md-6">
                               <label class="mb-3" style="font-weight:bolder">Company Contact's Person</label>
                                <span style="color:red; font-weight:bolder"> * </span> 
                               <input type="text"  name="company_contact" value="{{old('company_contact')}}" class="form-control mb-3 custom-select @error('company_address') is-invalid @enderror"
                                placeholder="Company Contact Person"> 
                               
                           </div><!-- end col -->
                               <div class="col-md-6">
                               <label class="mb-3" style="font-weight:bolder">Contact Person's Email</label>
                                <span style="color:red; font-weight:bolder"> * </span> 
                               <input type="email"  name="company_email"  value="{{old('company_email')}}" class="form-control mb-3 custom-select @error('company_contact') is-invalid @enderror"
                                placeholder="Contact Person Email"> 
                            
                           </div><!-- end col -->

                           <div class="col-md-6">
                            <label class="mb-3" style="font-weight:bolder">Employee Position</label>
                             <span style="color:red; font-weight:bolder"> * </span> 
                            <input type="text"  name="position" value="{{old('position')}}" class="form-control mb-3 custom-select @error('position') is-invalid @enderror" 
                            placeholder="Employee Position"> 
                           
                        </div><!-- end col -->
                            <div class="col-md-6">
                               <label class="mb-3" style="font-weight:bolder">Employee Start Year</label>
                                <span style="color:red; font-weight:bolder"> * </span> 
                               <input type="text"  name="start_year" value="{{old('start_year')}}" class="form-control mb-3 custom-select @error('start_year') is-invalid @enderror" 
                               placeholder="yyyy-mm-dd"> 
                              
                           </div><!-- end col -->
                            <div class="col-md-6">
                               <label class="mb-3" style="font-weight:bolder">Employee End Year</label>
                                <span style="color:red; font-weight:bolder"> * </span> 
                               <input type="text"  name="end_year" value="{{old('end_year')}}" class="form-control mb-3 custom-select @error('end_year') is-invalid @enderror"
                                placeholder="yyyy-mm-dd"> 
                              
                           </div><!-- end col -->

                           </div>       
                                                                 
                       </div><!-- end row --> 
                   </div><!-- end card-body --> 
                  
               </div> <!-- end card -->                               
           </div> <!-- end col -->  


             <div class="col-12">
                <span class="pl-5 "><button type="submit" class="btn btn-primary w-25 btn-lg submitbtn">Send Reference Request</button> </span> 
           </div> <!-- end col -->   
            </form>    
            
@endsection
