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
                        <h1 class="text-white mb-0">SERVICES</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">SERVICES</a></li>
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
                        <h2>Why Employee Screening & Background Checks?</h2>
                        <p>Employees are regarded as the real assets of any organization and they are expected to be professional and ethical in their career. In order to have suitable employees, companies perform background checks to reduce chances for negligent hiring. Having ethical and professional employees leads to increased productivity as well as reducing potential risks which could result from hiring unsuitable employees. In addition, having appropriate candidates leads to creation of a good working environment which leaves the supervisors and HR to concentrate on other activities.</p></div>
                </div>
                <div class="col-md-12 col-lg-12 pt-3">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Why Use Our Services</h2>
                        <p>Oysterchecks is focused on simplifying your pre-employment checks by 
                        performing extensive checks in a smooth and a quicker way and at the same 
                        time meeting the essential regulatory and professional standards. If you are
                         hiring employees from outside the country, you will be able to obtain global
                          background check report by using our services. We have access to global data 
                          which enables us to deliver such results easily and quickly. We are able to
                           provide support and assistance when integrating our platform with your onboarding application.
                         This will enable you to access screening solutions more easily and rapidly..</p>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!--about us section end-->

    



</div>

@endsection