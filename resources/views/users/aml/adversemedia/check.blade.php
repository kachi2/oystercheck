@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col pt-5">
                            <h4 class="page-title">{{strtoupper($slug['name'])}}</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"></li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> <span style="color:rgb(13, 100, 132); font-style:italics">  <strong> {{$slug->name}} </strong> </span></h4>
                    </div>
                    <!--end card-header-->
                    <form method="post" action="{{route('user.aml_adverse_media_verify',$slug->slug)}}" id="form1" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body bootstrap-select-1">
                            <div class="row">
                                


                        
                                <div class="col-md-6 mb-3">
                                    <span> Select Search Type  </span> <br>
                                    <div class="btn-group " role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" value="business"  name="query_type" id="btnradio1" autocomplete="off" checked="">
                                        <label class="btn btn-lg btn-outline-info"  for="btnradio1">Business</label>
                                      &nbsp;   &nbsp;
                                        <input type="radio" class="btn-check" value="individual" name="query_type" id="btnradio2" autocomplete="off">
                                        <label class="btn btn-lg btn-outline-info" for="btnradio2">Individual</label>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label class="form-label" for="exampleInputEmail1">Business Registration Name/ Individual first Name</label>
                                        <input type="text"  value="{{old('query_name')}}" name="query_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                        <small id="emailHelp" class="form-text text-muted">Business Registration Name/ Individual first Name</small>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        {{-- <label class="mb-3">Country</label>  --}}
                                      
                                        <select class="select2 mb-3 select2-multiple select2-hidden-accessible" 
                                              style="width: 100%" multiple="" name="queryCountry[]" data-placeholder="Select Countries" tabindex="-1" aria-hidden="true">
                                            <optgroup label="countries">
                                                <option value="ag" >Argentina</option>
                                                <option value="aus">Australia</option>
                                                <option value="by">Belarus</option>
                                                <option value="be">Belgium</option>
                                                <option value="cy">Cyprus</option>
                                                <option value="cn">China</option>
                                                <option value="ca">Canada</option>
                                                <option value="eg">Egypt</option>
                                                <option value="gh">Ghana</option>
                                                <option value="ng" selected>Nigeria</option>
                                                <option value="za">South Africa</option>
                                                <option value="us" >United States</option>
                                                <option value="uk" >United Kingdom</option>
                                            </optgroup>
                                        </select>
                                        <small class="text-warning">Select the countries you want your search to be streamlined to.</small>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        {{-- <label class="mb-3">Country</label>  --}}
                                      
                                        <select class="select2 mb-3 select2-multiple select2-hidden-accessible" 
                                              style="width: 100%" multiple="" name="queryTags[]" data-placeholder="Select Category" tabindex="-1" aria-hidden="true">
                                            <optgroup label="Category">
                                                @forelse ($category as $cat )
                                                <option value="{{$cat->name}}" selected>{{str_replace('-', ' ',$cat->name)}}</option>
                                                @empty
                                                @endforelse
                                             
                                              
                                            </optgroup>
                                        </select>
                                        <small class="text-info">Select category tags</small>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                 
                                        <label class="form-label" for="exampleInputEmai">Select Search Date Range</label> <br>
                                        <div class="input-group">  
                                            <input type="text" name="daterange"  id="reportrange" class="form-control" value="2022-10-23">
                                            <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                        </div>
                                    </div>

                                </div><!-- end col -->
                             
                               
                                <div class="col-md-12 mt-3">
                                    <div class="col-md-7 mb-3">
                                        <div class="media align-items-center p-2">
                                           @if(UserEnvironment() == 0 && $slug->test_data != '' && $slug->test_data != null  )
                                           <div class="col-md-12 ">
                                              <div class="card" >
                                                  <div class="card-header" style="background: rgb(140, 206, 206); color:#fff">
                                                      <h4 class="card-title" style=" color:#110e0e">Test Data</h4>
                                                      <p class="mb-0" style="color:#100f0f">
                                                    

                                                        We have provided some details you can use to test this service in test mode.</p>
                                                  </div>
                                                  <!--end card-header-->
                                                  <div class="card-body">
                                                      <p id="clipboardParagraph" class="border p-3">
                                                        @php
                                                        $data = json_decode($slug->test_data, true);
                                                        echo 'First Name: ' .$data['query'] .'<br>'; 
                                                        echo 'Search Type: '.$data['type'] 
                                                          @endphp
                                                   
                                                      </p>
                                                      <div class="mt-3">
                                                              <button type="button" class="btn btn-outline-info btn-clipboard" 
                                                              data-clipboard-action="copy"
                                                               data-clipboard-target="#clipboardParagraph">
                                                               <i class="far fa-copy me-2"></i>Copy</button>
                                                      </div>
                                                  </div><!--end card-body--> 
                                              </div>
                                           </div>
                                            @else 
                                            <div class="me-3 align-items-center">
                                              <i class="la la-info-circle"></i>
                                          </div>
                                            <div class="media-body" style="font-size:12px;"> <strong>Note:</strong> You will be charged <strong>₦{{number_format($slug->fee, 2)}}</strong> for each {{$slug->name}} verification</div>
                                            @endif
                                        </div>
                                        <!-- <div class="bg-soft-primary mb-2 p-1" style="font-size:12px;"> <strong>Note:</strong> You will be charged <strong>₦{{number_format($slug->fee, 2)}}</strong> for each {{$slug->slug}} verification</div> -->
                                        <div class="media align-items-center p-2 border-start bg-light border-2">
                                            <div class="me-3 align-items-center">
                                                <input type="checkbox" name="subject_consent" id="subjectConsent" value="false" required>
                                            </div>
                                            <div class="media-body" style="font-size:12px;"> By checking this box you acknowledge that you have gotten consent from that data subject to use their data for verification purposes on our platform in accordance to our <a href="#"> Privacy Policy</a></div>
                                        </div>
                                    </div>
                                    <div class="float-center p-2">
                                        <button type="submit" id="btnsubmit" class="btn btn-primary w-25">
                                            <i class="fas fa-check-double"></i> Fetch Intelligence</button>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end card-body -->
                    </form>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
    </div>
    @endsection

    @section('script')
    <script>

 $(function() {
    $('#reportrange').daterangepicker({
        // minDate: new Date('2018/11/2'),
        locale: {
            format: 'YYYY/MM/DD',
        }
    });
});

    </script>
    @endsection