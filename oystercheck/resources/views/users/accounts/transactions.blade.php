
@extends('layouts.app')
@section('content')
  <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Transactions</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">This Dashboard shows overview of your transactions</li>
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
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                   
  <div class="row ">
                    <div class="card">
                    <h3 class="pt-2 pl-2"> Balances </h3>
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-6">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="mb-0 fw-semibold">Previous Balance</p>
                                                    <h3 class="m-0 ">{{moneyFormat($balances->prev_balance, 'NG')}}</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class=" mb-0 fw-semibold">Available Balances</p>
                                                    <h3 class="m-0 ">{{moneyFormat($balances->avail_balance, 'NG')}}</h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                              </div> <!--end col--> 
                              
                              <!--end col-->                               
                            </div><!--end row-->                
                        </div>
                        </div>
        </div>
        @if(Session::has('message'))
        <span class="btn btn-success"> {{Session::get('message')}}</span>
        @endif
         <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">WALLET TOPUP</h4>
                                    <p class="text-muted mb-0">Easily Add money to your wallet</p>
                                </div><!--end card-header-->
                                <form method="post" action="{{route('fundRequest')}}" id="formSubmit">
                                @csrf
                                <div class="card-body">
                                      <div class="col-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Amount ({{naira()}})</span>
                                        <input type="text" id="customAmount"  name="amount" class="form-control"  aria-label="Amount (to the nearest dollar)" required/>
                                        <span class="input-group-text">.00</span>
                                        <span class="btn btn-danger Error" hidden> </span>
                                    </div>

                                    </div> 
                                    <span > Payment Method</span>
                                        <div class="card-body">    
                                    <div class="radio radio-info form-check-inline">
                                        <input type="radio" id="inlineRadio1"  class="paymentMethod" value="card" name="paymentMethod" checked="">
                                        <label for="inlineRadio1"> Card Payment</label>
                                    </div>
                                    <div class="radio  radio-info form-check-inline">
                                        <input type="radio" id="bank_transfer" class="cardMethod" value="bank_transfer" name="paymentMethod">
                                        <label for="bank_transfer"> Bank Transfer</label>
                                    </div>
                                </div>
                                    
                                </form>
                                    <form >
                                    <script src="https://checkout.flutterwave.com/v3.js"></script>
                                    <button type="button"  id="btnsubmit" class="btn btn-primary btn-lg w-50">Complete Payment</button>
                                    </form>
                                </div><!--end card-body-->
                                
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Payment Transactions log</h4>
                      
                    </div><!--end card-header-->
                    <div class="card-body">  
                        <table id="datatable-buttons" class=" orders table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Ref</th>
                                <th>External Ref</th>
                                <th>Amount</th>
                                <th>Purpose</th>
                                <th>Type</th>
                                <th>Prev Balance</th>
                                 <th>Avail Balance</th>
                                 <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach ($transactions as $trans )
                            <tr>
                                <td>{{$trans->id}}</td>
                                <td>{{$trans->ref}}</td>
                                <td>{{$trans->external_ref}}</td>
                                <td>{{moneyFormat($trans->amount, 'NG')}}</td>
                                <td>{{$trans->purpose}}</td>
                               @if($trans->type == 'DEBIT') <td class="badge badge-soft-danger">{{$trans->type}}</td> @else <td class="badge badge-soft-success"> {{$trans->type}}</td>@endif
                                 <td>{{moneyFormat($trans->prev_balance, 'NG')}}</td>
                                  <td>{{moneyFormat($trans->avail_balance, 'NG')}}</td>
                                <td> {{$trans->created_at}}</td>
                            </tr>
                             @endforeach
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div> <!-- end col -->
                </div><!-- container -->

@endsection
@section('script')

<script>
$('#btnsubmit').on('click', function(){
    if(document.getElementById("customAmount").value == ''){
        $('.Error').attr('hidden', false);
        $('.Error').html('this field is required');
        return;
    }
    let amount = document.getElementById("customAmount").value;
    if(document.getElementById('bank_transfer').checked == true){
 const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})
swalWithBootstrapButtons.fire({
  title: 'Transfer'+ ' ₦' + amount +' to the following account',
  html: "Account Name: Morgans Consortium <br> Account No: 000892392389   <br> Bank: Access Bank!",
  showCancelButton: true,
  confirmButtonText: 'Yes, Tranfer Completed! ',
  cancelButtonText: 'No, close!',
  reverseButtons: true
}).then((result) => {
   // console.log(result.value);
  if (result.value == true) {
  $('#formSubmit').submit();
  } 
})
    }else{
        makePayment(this);
    }
});

var ref = {!! json_encode(GenerateRefs())!!}
var _token = {!! json_encode(config('app.FLUTTERWAVE_KEY')) !!};
let email = {!! json_encode(auth()->user()->email) !!};
let phone = {!! json_encode(auth()->user()->client->company_phone) !!};
let name = {!! json_encode(auth()->user()->name) !!};

 function makePayment() {
    FlutterwaveCheckout({
      public_key: _token,
      tx_ref: ref,
      amount: 1000,
      currency: "NGN",
      country: "NG",
      payment_options: "card, ussd",
     // redirect_url: // specified redirect URL
       // https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
      meta: {
        consumer_id: 1,
        consumer_mac: "92a3-912ba-1192a",
        purpose: "Payment for Order",
        
      },
      customer: {
        email: email,
        phone_number: phone,
        name: name,
      },
      
       callback: function (response) {
          var trx_id = response.transaction_id;
          // console.log(response);
          $.ajax({
              url: 'http://oystercheck.com/user/payment/'+ trx_id,
              method: 'get',
              success: function (response) {
                // console.log(response);
                // the transaction status is in response.data.status
                var data = $.parseJSON(response);
                console.log(data);
                if(data.data.status == 'successful' ){
                        $('#formSubmit').submit(); 
                }
            },
      });
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "Oysterchecks",
        description: "Wallet Top-up",
       logo: "http://oystercheck.com/assets/images/logo.png",
      },
    });
  }

  function thousands_separators(num)
  {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return num_parts.join(".");
  }
  
</script>
@endsection