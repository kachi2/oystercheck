@extends('layouts.landing')

@section('content')
 

<div class="main">
    <!--hero section start-->
    <section class="hero-equal-height pt-165 pb-100" style="background: url('img/bg-illustration.svg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="action-btns mt-3">
                        <div href="#" class="btn " style="background-color: #E4EDFE; border-radius:10px">
                            AML Transaction Monitoring</div>
                    </div>
                    <div class="hero-slider-content  z-index position-relative">
                        <h1 class="">Never let a bad
                            transaction slip past</h1>
                        <p class="lead">Transaction fraud is on the rise, with total losses expected to
                            exceed $48 billion in 2023. Deter financial fraud and maintain
                            compliance with a powerful transaction monitoring tool
                            designed for compliance and risk teams.</p>

                        <div class="action-btns mt-3">
                            <a href="#" class="btn accent-solid-btn">Get Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="hero-animation-img">
                        {{-- <img src=" {{asset('/landing_assets/img/transaction_bg.png')}}" alt="hero" class="img-fluid d-none d-lg-block animation-two" width="180"> --}}
                        <img src=" {{asset('/landing_assets/img/transaction_bg.png')}}" alt="hero" class="animation-one img-fluid custom-width">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <section class="promo-block ptb-100">
        <div class="container">
            <div class="row justify-content-around justify-content-center">
                <div class="col-md-6 col-lg-4  dot-bg-shape dot-bg-1">
                    <div class="single-promo-block promo-hover-bg-1 hover-image p-5 text-center box-1 rounded">
                        <div class="promo-block-icon mb-3">
                            <img src=" {{asset('/landing_assets/img/efficiency_icon.png')}}" alt="hero" sty>
                        </div>
                        
                        <div class="promo-block-content">
                            <h5>Boost team efficiency</h5>
                            <p>Use one tool to manage the whole
                                process, with less false positives and
                                easier case management</p>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4  dot-bg-shape dot-bg-2">
                    <div class="single-promo-block promo-hover-bg-2 hover-image p-5 text-center box-1 rounded">
                        <div class="promo-block-icon mb-3">
                            <img src=" {{asset('/landing_assets/img/safeguard_icon.png')}}" alt="hero" >
                        </div>
                        <div class="promo-block-content">
                            <h5>Safeguard your revenue</h5>
                            <p>Detect signs of fraud in real-time.
                                Data-driven approaches help you
                                prevent money losses</p>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4  dot-bg-shape dot-bg-3">
                    <div class="single-promo-block promo-hover-bg-3 hover-image text-center box-1 rounded" style="padding: 38px">
                        <div class="promo-block-icon mb-3">
                            <img src=" {{asset('/landing_assets/img/document_icon.png')}}" alt="hero" >
                        </div>
                        <div class="promo-block-content">
                            <h5>Stay AML-compliant</h5>
                            <p>Connect KYC, AML, and KYB
                                verification with transaction monitoring
                                to detect and report any suspicious
                                activity</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="customer-testimonial-section ptb-100 bg-left-shape">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h3>Get one solution that alerts
                            you to all red flags</h3>
                        
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
               
                <div class="col-md-6 col-lg-12">
                    <div class="row">
                        <div class="col-md-6 px-0">
                            <div class="single-counter shadow-sm p-4 rounded text-center border" >
                                <h4 class="m-5">Sign Up</h4>
                                <br>
                            </div>
                        </div>
                        
                        <div class="col-md-4 px-0">
                            <div class="single-counter shadow-sm p-4 rounded text-center border" >
                                <h4 class="m-5">User Verification</h4>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-2 px-0">
                            <div class="single-counter shadow-sm  rounded text-center border" >
                                <br>
                                <h5 class="m-5 text-center">AML Screening</h5>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="single-counter shadow-sm p-4 rounded text-center border" >
                                <h4 class="m-5">Fraud Monitoring </h4>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="single-counter shadow-sm p-4 rounded text-center border" >
                                <h4 class="m-5">Transactions </h4>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-2 px-0">
                            <div class="single-counter shadow-sm  rounded text-center border" >
                                <br>
                                <h5 class="m-5">Login </h5>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customer-testimonial-section ptb-100 bg-left-shape" style="background-color: rgba(10, 20, 47, 0.239)">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-lg-4">
                    <div class="section-headingWorks mb-4">
                        <h2>Works where you work</h2>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8">
                   
                    <div class="single-counter shadow-sm p-4 m-4 text-left border" style="border-radius: 20px; color: #001133; color: #fff; background-color: #fff;">
                        <div class="row">
                            <div class="col-sm-2 col-lg-2">
                                <img src="{{ asset('/landing_assets/img/fintech_img.png') }}" alt="hero">
                            </div>
                            <div class="col-sm-8 col-lg-10">
                                <h4 class="mb-2">Fintech</h4>
                                <p style="color: #333C4D">
                                    Meet regulatory requirements and stop all types of fraud, including payment/chargeback fraud.
                                    Monitor suspicious activity with a risk-scoring approach and easily report when it’s detected.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="single-counter shadow-sm p-4 m-4 text-left border" style="border-radius: 20px; color: #001133; color: #fff; background-color: #fff;">
                        <div class="row">
                            <div class="col-sm-2 col-lg-2">
                                <img src="{{ asset('/landing_assets/img/banking_img.png') }}" alt="hero">
                            </div>
                            <div class="col-sm-8 col-lg-10">
                                <h4 class="mb-2">Banking</h4>
                                <p style="color: #333C4D">
                                    Ensure AML compliance to stop all fraud, including bank card theft. Use
                                    transaction monitoring to run bank card risk scoring for credit requests and
                                    thresholds checking
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="single-counter shadow-sm p-4 m-4 text-left border" style="border-radius: 20px; color: #001133; color: #fff; background-color: #fff;">
                        <div class="row">
                            <div class="col-sm-2 col-lg-2">
                                <img src="{{ asset('/landing_assets/img/gambling_img.png') }}" alt="hero">
                            </div>
                            <div class="col-sm-8 col-lg-10">
                                <h4 class="mb-2">Gambling</h4>
                                <p style="color: #333C4D">
                                    Prevent promo and deposit abuse, as well as unfair chargebacks. Detect
                                    specific fraud patterns including multi-accounting, arbitrage betting, and
                                    affiliate fraud
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="single-counter shadow-sm p-4 m-4 text-left border" style="border-radius: 20px; color: #001133; color: #fff; background-color: #fff;">
                        <div class="row">
                            <div class="col-sm-2 col-lg-2">
                                <img src="{{ asset('/landing_assets/img/ecommerce_img.png') }}" alt="hero">
                            </div>
                            <div class="col-sm-8 col-lg-10">
                                <h4 class="mb-2">Ecommerce</h4>
                                <p style="color: #333C4D">
                                    Stop payment fraud, including illegal chargebacks and credit card fraud. Also,
                                    your users are securely protected from account takeovers
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
  
    
 

</div>

@endsection