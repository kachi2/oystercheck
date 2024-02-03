@extends('layouts.guest')
@section('content')
<div class="page-content">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-12">
                           <div class="page-title-box">
                               <div class="row">
                                   <div class="col">
                                       <h4 class="page-title">Employee Reference</h4>
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
                <form method="post" action="{{route('candidate.employer-reference.store.answers', ['user_id' => $user_id, 'candidate_verification_id' => $candidate_verification_id ])}}" class="add-candidate-form">
                    @csrf
                   <div class="card-header">
                       {{-- <h4 class="card-title">Employee Reference </h4> --}}
                   </div><!--end card-header-->
                    
                   <div class="card-body bootstrap-select-1">
                       <div class="row">
                    
                        <input type="hidden" name="employee_reference_id"  value="{{$employee_reference_id}}">
                        @foreach ($questions as  $ss)
                        @if($ss->input_type == "hidden")
                        <hr>
                        <div class="col-md-12">
                            <label class="mb-3" style="font-weight:bolder; color:red"> {{$ss->question}}</label>
                         
                             {{-- <span style="color:red; font-weight:bolder"> * </span>  --}}
                            {{-- <input type="{{$ss->input_type}}"  name="company_name" value="{{old('company_name')}}" class="form-control mb-3 custom-select @error('company_name') is-invalid @enderror"  --}}
                            {{-- placeholder="Enter answer">  --}}
                        </div>
                        @elseif($ss->input_type == "select")
                           <div class="col-md-6">
                               <label class="mb-3" style="font-weight:bolder"> {{$ss->question}}</label>
                                <span style="color:red; font-weight:bolder"> * </span> 
                               <select type="{{$ss->input_type}}"  name="{{$ss->name}}" value="{{old($ss->name)}}" class="form-control mb-3 custom-select @error('company_name') is-invalid @enderror"> 
                                <option value="very poor" style="color:red">Please Select Option</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                               </select>
                           </div>
                           @else
                           <div class="col-md-6">
                            <label class="mb-3" style="font-weight:bolder"> {{$ss->question}}</label>
                             <span style="color:red; font-weight:bolder"> * </span> 
                            <input type="{{$ss->input_type}}"  name="{{$ss->name}}" value="{{old($ss->name)}}" class="form-control mb-3 custom-select @error('company_name') is-invalid @enderror" 
                            placeholder="Enter answer"> 
                        </div>
                           @endif
                        @endforeach
                         
                           </div>       
                                                                 
                       </div><!-- end row --> 
                       <span class="pb-5 pr-5 "><button type="submit" class="btn btn-primary w-25 btn-lg ">Send Reference Request</button> </span> 
                </form> 
                   </div><!-- end card-body --> 
                
               </div> <!-- end card -->                               
           </div> <!-- end col -->  
               
            
@endsection