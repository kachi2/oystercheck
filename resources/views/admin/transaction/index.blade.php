@extends('layouts.admin')

@section('content')
<style>
    .download-icon {
        width: 16px;   
        height: 16px;  
    }
    .circle {
        width: 50px;           
        height: 50px;          
        background-color: #F2F3F6; 
        border-radius: 50%;      
        display: flex;          
        justify-content: center; 
        align-items: center;   
    }

    .circle i {
        
    }
</style>
<div class="page-content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Wallet Transaction</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">All Transactions Activities and Details</li>
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

       
        <div class="row pt-3">
            <div class="col-md-12">
                <div class="card">
                    
                    <div class="card-body p-2">
                        <div class="col-auto d-flex justify-content-between">
                            <div class="form-group col-md-3 d-flex">
                                <h4>Transaction History</h4>
                            </div>
                            <div class="col-md-2 text-end p-2">
                                <form action="{{ route('admin.transactions.download') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i data-feather="download" class="align-self-end download-icon"></i> Download
                                    </button>
                                </form>
                            </div>
                        </div>
                        

                        <div class="row" >
                            <div class="card">
                                <div class="card-body">
                                    @foreach($transactions as $transaction)
                                        <a href="#" class="" data-bs-toggle="modal" data-bs-target="#depositdrop{{ $transaction->id }}">
                                            <div class="pb-3 d-flex justify-content-between">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-auto align-self-center">
                                                        <div class="report-main-icon bg-light-alt">
                                                            <div class="circle">
                                                                <i class="fas {{ $transaction->type == 'deposit' ? 'fa-arrow-right' : 'fa-arrow-left' }}"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-black mb-0 fw-semibold">
                                                            {{ ucfirst($transaction->type) }} - {{ ucfirst($transaction->status) }}
                                                        </p>
                                                        <p class="m-0 text-black">{{ $transaction->created_at->format('d/m/Y') }} - Thru</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="text-black mb-0 fw-semibold">
                                                        {{moneyFormat($transaction->amount, 'NG')}}
                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                        
                                        <div class="modal fade" id="depositdrop{{ $transaction->id }}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <center>
                                                            <div class="circle" style="background-color: #0E2554">
                                                                <i class="fas fas fa-check" style="color: #fff"></i>
                                                            </div>
                                                            <h4>{{moneyFormat($transaction->amount, 'NG')}}</h4>
                                                        </center>
                                                        <h4>Wallet Details</h4>
                                                        <div class="d-flex justify-content-between">
                                                            <div><h5>Type</h5></div>
                                                            <div><p>{{ ucfirst($transaction->type) }}</p></div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><h5>Transaction Number</h5></div>
                                                            <div class="d-flex">
                                                                <p>{{ $transaction->ref }}</p>
                                                                <i data-feather="copy" class="ms-2" style="width: 18px; color:#10B076"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><h5>Transaction Date</h5></div>
                                                            <div class="d-flex">
                                                                <p>{{ $transaction->created_at->format('M d, Y h:i:s A') }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                        
                                    {{-- <div class="mt-3"> 
                                        {{ $transactions->links() }}
                                    </div> --}}
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
        </div> <!-- end col -->

        <hr/>
    </div>      

    


@endsection