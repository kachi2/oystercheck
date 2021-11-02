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
                        <h1 class="text-white mb-0">Why choose us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">About us</a></li>
                                <li class="list-inline-item breadcrumb-item active">Why choose us</li>
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
           <center>  <div class="col-lg-12 pb-5 pl-5">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                         <h2>Why Choose Us</h2>
                        <p>Be as careful of the books you read, as of the company you keep; for your habits and character will be as much influenced by the former as the latter.</p></div>
                </div> <center>
                </div>
                  <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h5><img src="{{asset('/landing_assets/img/icon_1.png')}}" width="50px"> Unbeatable IT Expertise</h5>
                        <p>Oysterchecks provides you an access to a platform built on complex data analytics technology by highly-experienced professionals to help in meeting your specific needs. We provide comprehensive automated Background Checks, KYC , Transaction Monitoring, AML screening services in a single API.</p>
                        
                    </div>
                </div>
                 <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h5><img src="{{asset('/landing_assets/img/icon_2.png')}}" width="50px"> Creative And Innovative</h5>
                        <p>Our IT team consists of highly experienced experts who are always working on improving our platform to accommodate the rapidly evolving changes. Our cutting-edge technology ensures that our platform runs on advanced technology which provides more optimal solutions in a quicker and effective way.</p> </div>
                </div>
                 <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h5><img src="{{asset('/landing_assets/img/icon_3.png')}}" width="50px"> Client Support</h5>
                        <p>Our support team is always keeping touch with our clients to ensure we learn more about their changing needs and help us design new solutions to address their new requirements. Any assistance or need arising from a client is addressed within a short turnaround time of one hour.</p>  </div>
                
            </div>

               <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h5><img src="{{asset('/landing_assets/img/icon_2.png')}}" width="50px"> Data Security</h5>
                        <p>Oysterchecks provides you an access to a platform built on complex data analytics technology by highly-experienced professionals to help in meeting your specific needs. We provide comprehensive automated Background Checks, KYC , Transaction Monitoring, AML screening services in a single API.</p>
                        
                    </div>
                </div>
                 <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h5><img src="{{asset('/landing_assets/img/icon_1.png')}}" width="50px">Operations On Global Basis</h5>
                        <p>We have collaborated with other international bodies which have provided us with global access and processing of data. This has enabled us to conduct various checks on any employee on a global basis. This should eliminate your worry of hiring employees from other countries because our services will provide global background check report.</p> 
                </div>
                
            </div>

             <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                            <h5><img src="{{asset('/landing_assets/img/icon_3.png')}}" width="50px"> Always With You Throughout Your Journey</h5>
                        <p>When you become our client, we assign you a supportive team that will keep close interaction and follow up to ensure that you get the best from our services. The team is able to know about your changing needs and modify earlier solutions to suit your new requirements in a more efficient way. Working with Oysterchecks will never make you feel alone</p></div>
               </div>
               </div>


               
               <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h5><img src="{{asset('/landing_assets/img/icon_2.png')}}" width="50px"> Operations On Global Basis</h5>
                        <p>We have collaborated with other international bodies which have provided us with global access and processing of data. This has enabled us to conduct various checks on any employee on a global basis. This should eliminate your worry of hiring employees from other countries because our services will provide global background check report.</p></div>
                </div>
                 <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h5><img src="{{asset('/landing_assets/img/icon_1.png')}}" width="50px">Oysterchecks Team</h5>
                        <p>Meet the Oyster Check team Building an exceptional background screening, KYC & AML compliance Solutions We are a team of dedicated experts who are determined in offering exceptional and quality services to our clients.</p> </div>
                
            </div>

             <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                            <h5><img src="{{asset('/landing_assets/img/icon_3.png')}}" width="50px"> Automated Services</h5>
                        <p>Our platform provides automated services which can be accessed easily by our clients and provide results in a faster way.</p></div>
               </div>
        </div>
    </section>
    <!--about us section end-->



</div>

@endsection