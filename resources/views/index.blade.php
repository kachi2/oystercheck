@extends('layouts.landing')

@section('content')


<div class="main">
    <!--hero section start-->
    <section class="hero-equal-height pt-165 pb-100" style="background: url('{{asset('/landing_assets/img/bg-shape.svg')}}')no-repeat bottom center / cover; margin-bottom:-200px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white">
                        <span class="text-uppercase">Digital Verifications</span>
                        <h1 class="text-white">Background Checking Services</h1>
                        <p class="lead">Comprehensive and Exceptional background<br> checks, KYC & AML compliance Solutions </p>
                        <div class="action-btns mt-3">
                            <a href="{{route('login')}}" class="btn secondary-solid-btn">Get Started Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="img-wrap counter-number d-inline-flex align-items-center mb-4" >
                        <img src="{{asset('/landing_assets/img/landing1.png')}}" alt="hero single" class="custom-width img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <section class="promo-block ptb-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-6 box-1">
                    <div class="single-promo-block animated-hover p-5 text-center">
                        <div class="promo-block-icon mb-3">
                            <span class="fab fa-superpowers icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Had Enough Of Inconsistent KYC Check Results?</h5>
                            <p>This has been a huge challenge to businesses and it always yields substandard results. This has subsequently led to acquisition of misleading information which has put organizations and businesses at a huge risk. As a result of this, Oysterchecks addresses these shortcomings by performing KYC checks on people, ID documents and companies in a more effective way. Our checks are automated which help you in optimizing your business processes and reduce risks while ensuring total compliance.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 box-2">
                    <div class="single-promo-block animated-hover p-5 text-center">
                        <div class="promo-block-icon mb-3">
                            <span class="far fa-clock icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>Looking For Quality AML Solutions?</h5>
                            <p>
You are at the right place because Oysterchecks provides you with a wide range of AML solutions. 
Our platform runs on the newest technology and infrastructure which places us in a position where we can monitor and interpret the rapid changes around AML areas. We provide work programs, 
relevant training and insights to our team of professionals so that they can 
help our clients stay ahead of the rapidly evolving issues. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--about us section start-->
    <section class="about-us-section gray-light-bg p-3">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12 col-lg-6">
                    <div class="about-img-wrap">
                        <img src="{{asset('/landing_assets/img/landing6.jpg')}}" width="400px" alt="video" class="img-fluid rounded shadow-sm color-bip shadow">
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h2>Do you really Know-Your-Customer?</h2>
                        <p>Effectively verifying millions of profiles can be daunting. That’s where our 5000+ data points and 2000+ field agents come in, to help with background checks that meet set standards</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--feature section start-->
     <section class="about-us-section gray-light-bg ptb-100" style="background: #fff no-repeat center center / cover">>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12 col-lg-6">
                    <div class="about-img-wrap">
                        <img src="{{asset('/landing_assets/img/landing2.png')}}" alt="video" class="img-fluid rounded shadow-sm">
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h2>Sector-Specific Solutions</h2>
                        <p>Our single, unified platform, underpinned by powerful next-generation technology, connects suites of finance and HR applications integrated with industry specific solutions, uniquely delivered, transforming the way people work</p>
                        <div class="feature-tabs-wrap"> 
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="feature-tab-1">
                                      <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Health And Social Care</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Charities</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Education</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Hospitality</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Manufacturing</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Recruitment Agencies</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Professional Services</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Warehousing And Logistics</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Bank Service</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Insurance Firms</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--counter section start-->
    <section class="call-to-action "
             style="background: url('{{asset('/landing_assets/img/cta-bg.svg')}}')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="call-to-action-content text-white text-center mb-4">
                        <h2 class="text-white mb-1">For a reason and more</h2>
                     </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-medall-alt icon-md"></span>
                        <h4 class=" text-white">Zero bottlenecks</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-headphone-alt icon-md"></span>
                        <h4 class=" text-white">Reliable Database</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-cup icon-md"></span>
                        <h4 class=" text-white">Wide Verification Capacity</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-user icon-md"></span>
                        <h4 class=" text-white">Ease of Enrollment</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter section end-->

    <!--our work process section start-->
    <section class="work-process-new ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading mb-5">
                        <h2>More with Oysterchecks</h2>
                        <p class="lead">Distinctively grow your business with us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap">
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded">
                                <i class="ti-vector icon-md text-white"></i>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Verify CAC registration</h5>
                                <p>Conduct business (CAC) search report on Nigerian companies </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded">
                                <i class="ti-layout-list-thumb icon-md text-white"></i>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Verify address claims</h5>
                                <p>Verify that the candidate or company is available at the address they claim with address verification </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded">
                                <i class="ti-palette icon-md text-white"></i>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Verify Tax Identification Numbers</h5>
                                <p>Verify Nigerian companies with their Tax Identification Number (TIN)</p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded">
                                <i class="ti-cup icon-md text-white"></i>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Validate business owner identities</h5>
                                <p>Validate the identities of the business owners </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work process section end-->

       <section class="about-us-section ptb-100 border-bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-8">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h3>What Oysterchecks Background Screening Offers You</h3>
                      </p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>High level of customer service – we are not a call centre
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Manage entire process from candidate set up to the final report
                                
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Communication of adverse results/unforeseen delays</li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>High level of security around the information we process</li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Staff that have respect for the information they handle</li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Prompt turnaround time from 1 hour</li>
                       
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card border-0 shadow-sm text-white">
                        <img src="{{asset('/assets/landing6.png')}}" alt="video" class="img-fluid rounded shadow-sm">       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->

    <!--call to action section start-->
    <section class="call-to-action py-5">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Don't have an account?</h3>
                        <p>Our team is ready to setup an account for you. The process is fast and easy.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="#" class="btn secondary-solid-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

</div>

@endsection