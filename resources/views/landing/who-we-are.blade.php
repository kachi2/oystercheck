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
                        <h1 class="text-white mb-0">Who We Are</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">About us</a></li>
                                <li class="list-inline-item breadcrumb-item active">Who we are</li>
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
             <div class="col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2><img src="{{asset('/landing_assets/img/who.png')}}"></h2>
                        </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Who We Are</h2>
                        <p>Oysterchecks trade as The Morgans Consortium Consulting Limited (TMC) a private registered company with a registration number 09045481 We specialize in providing comprehensive automated Background Screening, KYC , Transaction Monitoring & AML solutions across the globe. We are part of the UK fastest growing companies in providing overall and extensive recruitment solutions all in one platform. Our services are extensive and secure which helps in managing potential risks and improve your recruitment process. We are a team of professionals who are ready to walk with you throughout your journey. At first, we start by learning about your business needs in a great depth, the risk factors your business is exposed to and provide tailor made solutions to suit your business needs. Our platform runs on modern technology which allows access to thousands of databases across the world in order to provide international background screening services. We offer KYC and AML checks which help in ensuring that your business is safe from potential financial crimes. It also saves you from risks associated with failures to comply to set rules and regulations.

We enjoy a big market share of regions and countries which are prone to financial crimes such as South Florida in USA. We have always managed to offer unbeatable services to many businesses and companies situated in these regions. We take pride in our undisputed services for the past many years and we would like to be part of your life-changing story in the fight against financial crimes as well ensuring compliance to set regulations.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->



</div>

@endsection