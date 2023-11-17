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
                        <h1 class="text-white mb-0">Technology</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Technology</a></li>
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
                        <h2>Our Technology</h2>
                        <p>Imagine Obtaining Background check, KYC and AML report, Automated AML Transaction Monitoring Services all from a single platform! Yes, this is possible when you use Oysterchecks to perform any kind of check you wish. Our platform has a user-friendly user interface which makes it extremely simple and easy to use. The platform uses complex data analytics technology which enables it to perform a wide variety of checks very fast and deliver optimal results in a timely manner. The reports generated are fully verified and validated and this helps your company to have an access to trusted information which is essential in decision making. Our IT team is always keen on emerging developments and changes across all industries ensuring that the platform runs on the most updated version which addresses all the current requirements.

Some of the clients might want to use the platform while on transit and we have made this easier by making the platform easily accessible from a wide range of devices such as PCs, tablets and smartphones. We also have a mobile app which makes the interaction easier by allowing access to our services via smart phones and tablets. Within a click of a button from your smart phone, you can initiate a screening process on an individual and get rapid responses in real time.

Our IT team has made our platform in a way that it can be integrated easily with other onboarding applications ensuring easy and quicker access to our services. Our platform is also customizable allowing room for addition of more features to suit your specific needs in a more effective way while still maintaining high level of performance. Let us be part of the solutions you are looking for ad you will always delight on our services.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->
</div>
@endsection