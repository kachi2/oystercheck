@extends('layouts.landing')

@section('content')


<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('{{asset('/landing_assets/img/header-bg-5.jpg')}}')no-repeat center center / cover">
        <div class="hero-bottom-shape-two" style="background: url('img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">KYC</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">KYC</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

   
    <!--promo section end-->

    <!--about us section start-->
    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Had Enough Of Inconsistent KYC Check Results?</h2>
                        <p>This has been a huge challenge to businesses and it always yields substandard results. This has subsequently led to acquisition of misleading information which has put organizations and businesses at a huge risk. As a result of this, Oysterchecks addresses these shortcomings by performing KYC checks on people, ID documents and companies in a more effective way. Our checks are automated which help you in optimizing your business processes and reduce risk while ensuring total compliance</p>
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 pt-3">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>KYC Checks</h2>
                        <p>Performing Know Your Customer (KYC) checks is a very essential and critical element of client onboarding process especially for the financial services sector. In addition to having KYC checks as a compliance issue, it has a become an integral part of running a business. With increasing regulations and digitization of KYC processes, Oysterchecks provides a highly digitized platform which aims at improving the process while facilitating scalability and cost efficiency to an organization. As part of the KYC process, we offer in-depth regulatory checks such as adverse media/negative news screening, Political Exposed Person (PEP) checks and sanctions checks. These sanctions check ensure compliance to regulatory requirements in line with UK, USA and EU jurisdiction by adhering to United Nations (UN), European Union (EU) and HM Treasury (HMT) sanction lists.</p> </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    



</div>

@endsection