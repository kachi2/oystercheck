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
                        <h1 class="text-white mb-0">Resources</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Resources</a></li>
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
                <div class="col-md-12 col-lg-6">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h4><img src="{{asset('/landing_assets/img/screening.jpg')}}" width="100px">Screening Regulations</h4>
                        <p>Compliance knowledge and expertise is very important for organizations which provide employee screening services. At Oysterchecks we are always at the fore front ensuring that our screening services are in compliance with the dynamic regulatory requirements. We are committed and dedicated to ensure that we are in compliance with the latest regulatory programs in the industry.</p></div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h4><img src="{{asset('/landing_assets/img/data.jpg')}}" width="100px"> Data Protection Compliance</h4>
                        <p>Oysterchecks is registered with the Information Commissioner’s Office and strictly operates in compliance with rules stipulated under the Data Act 1998. This act regulates how a company gathers, handles, stores, retains and disposes personal information.</p>
            </div>
        </div>

          <div class="col-md-12 col-lg-12 pt-2">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h4><img src="{{asset('/landing_assets/img/com.jpg')}}" width="100px">Data Protection Compliance</h4>
                        <p>Oysterchecks is registered with the Information Commissioner’s Office and strictly operates in compliance with rules stipulated under the Data Act 1998. This act regulates how a company gathers, handles, stores, retains and disposes personal information.</p>
                         <ul class="list-unstyled tech-feature-list">
                         <li class="py-1"><span class="ti-check-box mr-2 color-secondary"> Anonymity of collected data to protect privacy</span> </li>
                          <li class="py-1"><span class="ti-check-box mr-2 color-secondary"> Asking for consent from the data owners before processing it</span> </li>
                         <li class="py-1"><span class="ti-check-box mr-2 color-secondary"> Providing notifications when there are data breaches</span> </li>
                         <li class="py-1"><span class="ti-check-box mr-2 color-secondary"> Easy and safe way of handling data across the borders</span> </li>
                         <li class="py-1"><span class="ti-check-box mr-2 color-secondary"> Allocation of GDPR compliance officer to oversee a company’s data handling activities</span> </li>
                        
                         </ul>
            </div>
        </div>

         <div class="col-md-12 col-lg-6 pt-2">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h4><img src="{{asset('/landing_assets/img/criminal.jpg')}}" width="100px"> Criminal Checks Records Compliance</h4>
                        <p>Oysterchecks ensures that any data collected about an individual or company is treated with at most confidentiality as required in Police Act 1997 and Data Act 1998. We have access to global databases and we will help you in conducting global employment screening with a lot of ease.</p></div>
                </div>

             <div class="col-md-12 col-lg-6 pt-2">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2><img src="{{asset('/landing_assets/img/com.jpg')}}" width="100px">Compliance Standards</h2>
                        <p>We offer a wide range of screening packages which you can chose from to meet your requirements. In addition, we provide custom packages tailor-made to suit your specific needs and requirements. Our payment gateways for purchasing these packages are secure and are in compliance with HMG Baseline Personnel Security Standard, the Payment Card Industry Data Security Standard and the British Standard 7858:2012.</p></div>
                </div>
        </div>
        </div>
    </section>
    <!--about us section end-->
       <!--about us section start-->
  

    



</div>

@endsection