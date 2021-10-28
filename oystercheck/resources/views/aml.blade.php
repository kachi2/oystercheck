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
                        <h1 class="text-white mb-0">AML</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">AML</a></li>
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
                        <h2>Looking For Quality AML Solutions?</h2>
                        <p>You are at the right place because Oysterchecks provides you with a wide range of AML solutions. Our platform runs on the newest technology and infrastructure which places us in a position where we can monitor and interpret the rapid changes around AML areas. We provide work programs, relevant training and insights to our team of professionals so that they can help our clients stay ahead of the rapidly evolving issues. Our market is majorly constituting of high-risk and countries prone to money laundering activities such USA and we have still managed to offer quality solutions.

As a result of collaboration with many international financial institutions across the globe, we are able to provide comprehensive details on best AML practices. These practices help clients to operate and perform their businesses more efficiently and effectively.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 pt-3">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>AML Checks</h2>
                        <p>At Oysterchecks our main is to provide fully automated AML Checks which can be used during client onboarding and monitoring processes. There has been rising complexity and cost of AML compliance checks which has become a huge challenge to businesses. In addressing these challenges, we have partnered with a great number of leading Financial firms across the world to automate AML checks as we strive in streamlining the onboarding process. We provide this through a single API which is easy to integrate with a variety of client onboarding applications. Use of our services will help your organization to cut down on these heavy costs associated with complexity in AML checks while still maintain quality results.</p></div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    



</div>

@endsection