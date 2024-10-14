 @extends('layouts.admin')
 @section('content')
 <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row"> 
                                    <div class="col">
                                        <h4 class="page-title">{{$slug->name}}</h4>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap">
                                @foreach($address as $add)
                                    <a class="btn m-2 {{ request()->is('admin/address/'.$add->slug) ? 'btn-primary' : 'btn-secondary' }}" href="{{route('admin.addressIndex',$add->slug)}}">
                                        {{ strlen($add->slug) == 3 ? strtoupper($add->slug) : ucwords(str_replace('-', ' ', $add->slug)) }} Verification
                                    </a> 
                                @endforeach

                             
                            </div><!--end flex container-->
                        </div><!--end col-->
                    </div><!--end row-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$slug->name}} log</h4>
                    </div><!--end card-header-->
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Candidate Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Verified by</th>
                                <th>Fee</th>
                                <th>Status</th> 
                                <th>Date</th>
                                 <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $index => $trans )
                                <tr> 
                                <td>{{ $index + 1 }}</td>
                                <td>{{$trans->service_reference}}</td>
                                <td>{{$trans->last_name}} {{$trans->first_name}} </td>
                                <td>{{$trans->email}}</td>
                                <td style="white-space: nowrap">
                                    @foreach ($trans->addressVerificationDetail as $detail)
                                        @php
                                            $agentDetails = json_decode( $detail->agent )
                                        @endphp
                                        {{ $agentDetails->lastName }} {{ $agentDetails->firstName }}
                                    @endforeach
                                </td>
                                <td>
                                    <p>₦{{ number_format($trans->verification->fee, 2) }}</p>
                                </td>
                                <td>@if($trans->status == 'successful') <span class="text-success"> {{$trans->status}}</span> @elseif($trans->status == 'pending')<span class="text-warning"> {{$trans->status}}</span>  @else <span class="text-danger"> {{$trans->status}}</span> @endif  </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($trans->created_at)->format('jS F Y, h:ia') }}


                                </td>
                                <td> 
                                    <a href="{{ url('admin/address/details/' . encrypt($trans->id)) }}">View Details</a>
                                    {{-- <a href="{{ route('address.details', encrypt($trans->id)) }}">View Details</a> --}}
                                </td>
                            </tr>
                             @endforeach
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
        </div>                  
@endsection
@section('script')
   <script>     
          $('#btnsubmit').on('click', function(){
                  $('#btnsubmit').html('<span class="spinner-grow text-secondary spinner-grow-sm" role="status" aria-hidden="true"></span>Please Wait....');
             let  reference = $('#reference').val();
              let first_name = $('#first_name').val();
              let last_name = $('#last_name').val();
            $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
            });
        $.ajax({
         url: "{{route('StoreVerify',$slug->slug)}}",
          type:'GET',
          data:{
            reference: reference,
            first_name: reference,
            last_name: last_name
          },
           cache:false,
          dataType: "json",
          success:function(response){
           // console.log(response.status);
           if(response.status == 'success'){
               console.log(response);
                     $('#btnsubmit').html('<span class="" role="status" aria-hidden="true">Verify Candidate</span>');
                    $('#result').html('<span class="btn btn-success" role="status" aria-hidden="true">Verification Completed Successfull</span>');
                    $('#details').attr('hidden', false);
                    window.location.reload();
           }
         },
   });
    });

   </script>

@endsection