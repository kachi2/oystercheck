 @extends('layouts.app')
 @section('content')
     <div class="page-content">
         <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title" style="font-weight: bolder">{{$slug->name}}</h4>
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
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="row justify-content-left">
                        <div class="col-md-6 col-lg-4">
                            <div class="card report-card ">
                                <div class="card-body" >
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="mb-0 fw-semibold text-black">Total Candidates</p>
                                            <h3 class="m-0 text-black"></h3>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card report-card">
                                <div class="card-body" >
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-black mb-0 fw-semibold">Pending Requests</p>
                                            <h3 class="m-0 text-black"></h3>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card report-card">
                                <div class="card-body" >
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-black mb-0 fw-semibold">Results Received</p>
                                            <h3 class="m-0 text-black"></h3>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                       <div class="col-md-12 col-lg-12">
                            <div class="card report-card">
                                <div class="card-body" >
                                    <div class="row d-flex justify-content-center">
                                        <div class="row">
                                        <div class="col-3">
                                            {{-- <p class="text-black mb-0 fw-semibold">Select Verification Type</p> --}}
                                            <h4 class="m-0 text-black">Selected Verification Type</h4>
                                          <strong> {{$slug->name}} </strong> 
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-light-alt" style="font-size: 30px">
                                                <form method="get" id="verify" action="{{route('showVerificationDetailsForm', ['slug' => ' ', 'service_ref' => $service_ref])}}" >
                                                    @csrf
                                              <select class="form-control" name="slug" onChange="document.getElementById('verify').submit()" >
                                                <option readonly>Select Verification Type</option>
                                                @foreach ($address as $addresses)
                                                <option value="{{encrypt($addresses->slug)}}"> 
                                                     <button   type="button"  class="dropdown-itemb tn btn-info">{{ucfirst($addresses->slug)}} Address Verifications</a> 
                                                    </option>
                                                @endforeach
                                              </select>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="col-2 align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                {{-- <i data-feather="users" class="align-self-center text-muted icon-sm"></i> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                 
                        <!--end col-->
                           {{--  
                        <div class="col-md-6 col-lg-4">
                            <div class="card report-card">
                                <div class="card-body" >
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                             <p class="text-black mb-0 fw-semibold">Requests Awaiting Reschedule</p>
                                            <h3 class="m-0 text-black">{{$awaiting_reschedule}}</h3>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div> 
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-md-6 col-lg-4">
                            <div class="card report-card">
                                <div class="card-body" >
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-black mb-0 fw-semibold">Verification not Requested</p>
                                            <h3 class="m-0 text-black">{{$not_requested}}</h3>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> --}}
                        <!--end col-->
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">{{ $slug->name }}</h4>
                         </div>
                         <!--end card-header-->
                         <form method="post" action="{{ route('AddressStore', $service_ref) }}">
                             @csrf
                             <div class="card-body bootstrap-select-1">
                                 <div class="row">
                                     @foreach ($fields as $input)
                                         <div class="col-md-6">
                                             <label class="mb-3" style="font-weight:500">{{ $input->label }}</label>
                                             @if ($input->is_required == 1)
                                                 <span style="color:red; font-weight:bold"> * </span>
                                             @endif
                                             @if($input->name != 'state')
                                             <input type="{{ $input->type }}" value="{{ old($input->name) }}"
                                                 id="{{ $input->inputid }}" name="{{ $input->name }}"
                                                 class="form-control mb-3 custom-select @error($input->name) is-invalid @enderror"
                                                 placeholder="{{ $input->placeholder }}"
                                                 @if ($input->is_required == 1) required @endif>
                                            @else
                                            <input class="form-control mb-3 "  placeholder="Select State" 
                                            list="states" name="state" value="{{old('state')}}" id="state" autocomplete="off">
                                           
                                            <datalist id="states">
                                             @foreach ($states as $item)
                                             <option value="{{$item->name}}"> {{$item->name}}</option>
                                             @endforeach
                                            </datalist>
                                            @endif

                                            
                                           
                                             @error($input->name)
                                                 <span class="invalid-feedback" role="alert">
                                                     {{ $message }}
                                                 </span>
                                             @enderror
                                         </div><!-- end col -->
                                         <!-- end col -->
                                     @endforeach
                                     <input type="text" value="{{ $slug->slug }}" name="slug" hidden>
                                     <div class="col-md-12">
                                         @if (Session::has('message'))
                                             <span class="btn btn-{{ Session::get('alert') }}">
                                                 {{ Session::get('message') }}
                                             </span>
                                         @endif
                                         <div class="col-md-6 p-3">
                                             <span style="color:red; font-size:11px;"> Note: You will be charged
                                                 ₦{{ number_format($slug->fee, 2) }} for each {{ $slug->name }}</span>
                                             <br>
                                             <span style="color:darkblue; font-size:11px;">Your wallet Balance is
                                                 ₦{{ number_format($wallet->avail_balance, 2) }}</span> <br>

                                             <input type="checkbox" required name="subject_consent" id="subject_consent">
                                             <span style="font-size:11px;"> By checking this box you acknowledge that you
                                                 have gotten consent from that data subject to use their data for
                                                 verification purposes on our platform in accourdance to our <a
                                                     href="#"> Privacy Policy</a></span>
                                         </div>
                                         <span class="float-center p-2"><button type="submit"
                                                 class="btn btn-primary w-23">Submit Address to Verify</button> </span>
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
         <!-- <script>
             $('#btnsubmit').on('click', function() {
                 $('#btnsubmit').html(
                     '<span class="spinner-grow text-secondary spinner-grow-sm" role="status" aria-hidden="true"></span>Please Wait....'
                     );
                 let reference = $('#reference').val();
                 let first_name = $('#first_name').val();
                 let last_name = $('#last_name').val();
                 $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                 });
                 $.ajax({
                     url: "{{ route('StoreVerify', $slug->slug) }}",
                     type: 'GET',
                     data: {
                         reference: reference,
                         first_name: reference,
                         last_name: last_name
                     },
                     cache: false,
                     dataType: "json",
                     success: function(response) {
                         // console.log(response.status);
                         if (response.status == 'success') {
                             console.log(response);
                             $('#btnsubmit').html(
                                 '<span class="" role="status" aria-hidden="true">Verify Candidate</span>'
                                 );
                             $('#result').html(
                                 '<span class="btn btn-success" role="status" aria-hidden="true">Verification Completed Successfull</span>'
                                 );
                             $('#details').attr('hidden', false);
                             window.location.reload();
                         }
                     },
                 });
             });
         </script> -->
     @endsection
