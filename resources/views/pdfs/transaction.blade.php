<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Oysterchecks') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Oysterchecks Comprehensive and Exceptional background checks, KYC & AML compliance Solutions</" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{public_path().'/assets/images/favicon.png'}}">
    <!-- App css -->
    <link href="{{public_path().'/assets/css/bootstrap.min.css'}}" rel="stylesheet" type="text/css" />
    <link href="{{public_path().'/assets/css/icons.min.css'}}" rel="stylesheet" type="text/css" />
    <link href="{{public_path().'/assets/css/app.min.css'}}" rel="stylesheet" type="text/css" />
    <!-- <style>
        .mb-4{margin-bottom:3rem !important;}
        .row{display:flex;flex-wrap:wrap;margin-top:0;margin-right:-.5rem;margin-left:-.5rem}
        .col-4{margin-left:auto; margin-right:auto;justify-content:center !important; flex:0 0 auto; width:33.33333%}
        .col-12{flex:0 0 auto; width:100%;max-width:100%;padding-right: .5rem;padding-left: .5rem;margin-top:0}
        .card-body{position: relative;display: flex;flex-direction: column;min-width: 0;word-wrap: break-word;background-clip: border-box;border-radius: 0.25rem;margin-bottom: 16px;background-color: #fff;border: 1px solid #e3ebf6;width:100%}
        .font-14{font-size: 14px !important;}
        .col-6{flex: 0 0 auto;width: 50%;}
        .py-4 {padding-top: 1.5rem !important;padding-bottom: 1.5rem !important;}
.px-4 {padding-right: 1.5rem !important;padding-left: 1.5rem !important;}
.border-bottom {border-bottom: 1px solid #eaf0f9 !important;}
.d-flex {display: flex !important;}
.text-muted {color: #a4abc5 !important;}
.col-8 {
    flex: 0 0 auto;
    width: 66.66667%;
}.m-0 {
    margin: 0 !important;
}.col-5 {
    flex: 0 0 auto;
    width: 41.66667%;
}.col-7{flex: 0 0 auto;
    width: 58.33333%;}
    </style> -->
</head>

<body style="background-color: #fff;">

    <div style="width: 100%; margin-top:3rem !important">
    
            <div class="row mb-4">
                <div class="col-4 mb-4">
                    <img src="{{asset('/assets/images/logo.png')}}" style="width:100%" alt="Oysterchecks Logo" class="logo-light">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <div style="flex: 1 1 auto;padding: 1rem 1rem;">
                            <div class="row">
                                <div class="col-12"">
                                    <div style="align-items:center !important;justify-content:space-between !important;display:flex;margin-top: 1.5rem !important;margin-bottom: 1.5rem !important">
                                        <h4 style="margin: 10px 0;line-height: 22px;font-weight: 500 !important;font-size: 16px !important;color: #1d2c48 !important">Transaction Report - {{$transaction->id}}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div style="background-color: #f1f5fa !important;padding-top: 1rem !important;padding-bottom: 1rem !important;padding-right: 1.5rem !important;padding-left: 1.5rem !important;width:635px">
                                        <h2 style="font-weight:500;font-size: 16px !important;line-height: 1.5 !important;margin: 0 !important;color: #303e67;">Transaction Details</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6" style="border-bottom:1px solid #e3ebf6;padding: 3rem !important;display:flex;">
                                            <div class="m-0 font-14 me-3 text-muted col-5">Transaction Reference:</div>
                                            <div class="font-14 col-7">{{$transaction->ref}}</div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Status:</div>
                                            <div class="font-14 col-8 col-md-7">
                                                @if($transaction->status == 'processing')
                                                <span class="badge badge-soft-purple"> {{ucwords($transaction->status)}}</span>
                                                @elseif($transaction->status == 'successful')
                                                <span class="badge badge-soft-success"> {{ucwords($transaction->status)}}</span>
                                                @elseif($transaction->status == 'reversed')
                                                <span class="badge badge-soft-dark"> {{ucwords($transaction->status)}}</span>
                                                @elseif($transaction->status == 'failed')
                                                <span class="badge badge-soft-danger"> {{ucwords($transaction->status)}}</span>
                                                @elseif($transaction->status == 'declined')
                                                <span class="badge badge-soft-warning"> {{ucwords($transaction->status)}}</span>
                                                @else
                                                <span class="badge badge-soft-secondary"> {{ucwords($transaction->status)}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Payment Method:</div>
                                            <div class="font-14 col-8 col-md-7">{{ucwords($transaction->payment_method)}}</div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Transaction Type:</div>
                                            <div class="font-14 col-8 col-md-7">@if($transaction->type == 'credit')
                                                <span class="badge badge-soft-success rounded-circle me-2 px-1 py-1 fw-bold">
                                                    <i class="mdi mdi-arrow-up font-10"></i>
                                                </span>
                                                @else
                                                <span class="btn btn-soft-success btn-icon-circle btn-icon-circle-sm mr-2">
                                                    <i class="mdi mdi-arrow-down font-16"></i>
                                                </span>
                                                @endif
                                                {{ucwords($transaction->type)}}
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Paid at:</div>
                                            <div class="font-14 col-8 col-md-7">{{date('jS F Y, h:iA', strtotime($transaction->created_at))}}</div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Purpose:</div>
                                            <div class="font-14 col-8 col-md-7">{{ucfirst($transaction->purpose)}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row mt-5">
                                <div class="col-12">
                                    <div class="py-3 px-4 bg-light">
                                        <h2 class="font-16 m-0 lh-base">Payment Breakdown</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Value Added Tax (%):</div>
                                            <div class="font-14 col-8 col-md-7">7.5%</div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Amount (&#x20A6;):</div>
                                            <div class="font-14 col-8 col-md-7">{{moneyFormat($transaction->amount,'NG')}}</div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Value Added Tax (&#x20A6;):</div>
                                            <div class="font-14 col-8 col-md-7">{{moneyFormat($transaction->tax,'NG')}}</div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex py-4 px-4 border-bottom gap-3">
                                            <div class="m-0 font-14 text-muted col-4 col-md-5">Total Amount Payable (&#x20A6;):</div>
                                            <div class="font-14 col-8 col-md-7">{{moneyFormat($transaction->total_amount_payable,'NG')}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div> <!-- end col -->
            
</body>

</html>