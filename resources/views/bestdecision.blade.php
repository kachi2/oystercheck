@extends('layouts.landing')

@section('content')
 

<div class="main">
    <!--hero section start-->
    <section class=" pt-100  pb-100" style="background: url('{{asset('/landing_assets/img/best_decision_bg.png')}}')no-repeat bottom center / cover; height: 700px;">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 col-lg-8">
                    <div class="page-header-content decision  text-left pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="mb-0" >The best decision your lettings business will ever make</h1>
                       
                    </div>
                </div>                
            </div>
            <div class="row">                       
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div  style="background-color: #162E66" class="services-single featureproject text-white animated-hover text-center pt-5 pr-3 pl-3 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <h5 class="text-white">Feature Projects</h5>
                        <p class="mb-2">Very good service, I had all my<br> questions answered and my policy set up very easily.
                        <div class="row">                       
                            <div class="btn-block col-lg-6  tet-white" style="background-color: #292E3D;  border-right: 3px solid white;" >
                                <a href="#" target="_blank" class="text-white detail-link mt-2" previewlistener="true">
                                    <span class="ti-arrow-left text-white"></span> I am an agent </a>
                            </div>
                            <div class="col-lg-6   tet-white" style="background-color: #292E3D">
                                <a href="#" target="_blank" class="btn-block text-white detail-link mt-2" previewlistener="true">
                                    I am a Landlord <span class="ti-arrow-right text-white"></span></a>
                            </div>
                        </div>
                     </div>
                </div>
            </div>           
        </div>
    </section>
    <!--hero section end-->

   

    
    <section class="feature-content-two ptb-50">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-8 col-lg-3">
                    <div class="section-heading text-left mb-0">
                        <h3>Companies We Work With</h3>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5">
                    <div class="section-heading text-left mb-1">
                        <p class="lead">
                            Use this section to describe your company and the products you offer. You could share your company’s story and details about why you are in business. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-4 col-lg-2">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/spotify_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-sm-3 col-md-4 col-lg-2">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/google_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-sm-3 col-md-4 col-lg-2">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/uber_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-sm-3 col-md-4 col-lg-2">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/microsoft_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/shopify_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/evernote_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/adobe_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/paypal_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/amazon_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-4 text-center">
                        <img src="{{asset('/landing_assets/img/asana_img.png')}}" alt="consulting" width="80" class="mb-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    <section class="feature-content-two ptb-100">
        <div class="container">
           
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="feature-feature-list commission p-4 ">
                                <h5 class="mb-2">245%</h5>
                                <p >More revenues for the brand</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="feature-feature-list commission p-4">
                                <h5 class="mb-2">130k+</h5>
                                <p>Audiences reached across platfrom</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="feature-feature-list commission p-4 ">
                                <h5 class="mb-2">50+</h5>
                                <p>Brands work with us</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="feature-feature-list commission p-4 ">
                                <h5 class="mb-2">24+</h5>
                                <p>Use This Section To Describe Your  </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="section-heading commission text-left mb-5 p-4">
                        <h3>Our Commitments</h3>
                        <span class="lead">
                            Use this section to describe your company and the products you offer. You could share your company’s story and details about why you are in business. Use this section to describe your company and the products you offer. You could share your company’s story and details about why you are in business. 
                        </span>
                        <br><br>
                        <a href="#" class="detail-link" style="color:#3461FF">Learn more <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-content-two ptb-100">
        <div class="container">           
            <div class="row">
                <div class="col-md-6 col-lg-6">                    
                    <img src="{{asset('/landing_assets/img/man_img.png')}}" alt="hero single" class="custom-width img-fluid">                               
                </div>
                <div class="col-lg-6 col-md-6 " >
                    <br>
                    <div style="background-color: #162E66" class=" text-white section-heading commission text-left mb-5 p-4" >
                        <h3 class=" text-white">About us</h3>
                        <span class="lead">
                            For more than 30 years we have been delivering world-class checks and we’ve built many lasting
                             relationships along the way. <br> <br> We’ve matured into an industry leader and trusted resource for 
                             those seeking quality, innovation and reliability when building in the U.S. 
                        </span>
                        <br><br>
                        <a href="#" class="btn outline-btn align-items-center" style="background-color: #fff">More on Our History<span class="ti-arrow-right pl-2"></span></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section ptb-100 gray-light-bg">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-2">
                    <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex flex-column justify-content-center" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" href="#feature-tab-1" data-toggle="tab">
                                <h6 class="mb-0">All</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#feature-tab-2" data-toggle="tab">
                                <h6 class="mb-0">Tenant</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#feature-tab-3" data-toggle="tab">
                                <h6 class="mb-0">Landlord</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#feature-tab-4" data-toggle="tab">
                                <h6 class="mb-0">Agent</h6>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8"> 
                    <div class="tab-content feature-tab-content">
                        <div class="tab-pane active" id="feature-tab-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_1.png')}}" class="card-img-top position-relative" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title "><a href="#" class="text-white">Referencing</a></h3>                                           
                                            <p class="card-text">2715 Ash Dr. San Jose, South Dakota</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_2.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Landloard Insurance</a></h3>
                                            <p class="card-text">2972 Westheimer Rd. Santa Ana, Illinois </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_3.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Rent guarantee</a></h3>
                                            <p class="card-text">3517 W. Gray St. Utica, Pennsylvania </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_4.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Legal 4 lettings</a></h3>
                                            <p class="card-text">2464 Royal Ln. Mesa, New Jersey  </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="feature-tab-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_2.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Landloard Insurance</a></h3>
                                            <p class="card-text">2972 Westheimer Rd. Santa Ana, Illinois </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_1.png')}}" class="card-img-top position-relative" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title "><a href="#" class="text-white">Referencing</a></h3>                                           
                                            <p class="card-text">2715 Ash Dr. San Jose, South Dakota</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_3.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Rent guarantee</a></h3>
                                            <p class="card-text">3517 W. Gray St. Utica, Pennsylvania </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_4.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Legal 4 lettings</a></h3>
                                            <p class="card-text">2464 Royal Ln. Mesa, New Jersey  </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="feature-tab-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_1.png')}}" class="card-img-top position-relative" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title "><a href="#" class="text-white">Referencing</a></h3>                                           
                                            <p class="card-text">2715 Ash Dr. San Jose, South Dakota</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_3.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Rent guarantee</a></h3>
                                            <p class="card-text">3517 W. Gray St. Utica, Pennsylvania </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_2.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Landloard Insurance</a></h3>
                                            <p class="card-text">2972 Westheimer Rd. Santa Ana, Illinois </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_4.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Legal 4 lettings</a></h3>
                                            <p class="card-text">2464 Royal Ln. Mesa, New Jersey  </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="feature-tab-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_1.png')}}" class="card-img-top position-relative" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title "><a href="#" class="text-white">Referencing</a></h3>                                           
                                            <p class="card-text">2715 Ash Dr. San Jose, South Dakota</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_2.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Landloard Insurance</a></h3>
                                            <p class="card-text">2972 Westheimer Rd. Santa Ana, Illinois </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_4.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Legal 4 lettings</a></h3>
                                            <p class="card-text">2464 Royal Ln. Mesa, New Jersey  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="single-blog-card card border-0 shadow-sm">
                                        <img src="{{asset('/landing_assets/img/service_3.png')}}" class="card-img-top" alt="blog">
                                        <div class="card-body text-white" style="background-color: #2947A9">
                                            <h3 class="h5 mb-0 card-title text-white"><a href="#" class="text-white">Rent guarantee</a></h3>
                                            <p class="card-text">3517 W. Gray St. Utica, Pennsylvania </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   
            </div>
        </div>
    </section>

    <section class="call-to-action py-5" style="background: url('{{asset('/landing_assets/img/consult_img.png')}}')no-repeat bottom center / cover; height: 250px;">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content text-white">
                        <h3 class="mb-1 text-white">Free consultation with exceptional quality</h3>
                        <p>Just one call away: +84 1102 2703</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="#" class="btn outline-btn align-items-center" style="border-color: #fff; color: #fff;"> Get your consultation </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="row ">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-left">
                        <h3>What Our Client Said about us</h3>
                        <p class="lead">
                            Use this section to describe your company 
                        </p>
                    </div>
                </div>
                <div class="col-md-9 col-lg-8"></div>
            </div>
            <div class="row">               
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5 owl-loaded owl-drag">                   
                                                
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1800px, 0px, 0px); transition: all 0.25s ease 0s; width: 2880px;">
                        <div class="owl-item  active" style="width: 330px; margin-right: 30px; ">
                            <div class="item" >
                                <div class="testimonial-single shadow-sm   p-4" style="background-color:#162E66; border-radius:10px ">
                                    <div class="client-info-wrap d-flex align-items-center mt-1">
                                        <div class="client-img mr-3">
                                            <img src="{{asset('/landing_assets/img/client-1.png')}}" alt="client" width="60" class="img-fluid rounded-circle shadow-sm">
                                        </div>
                                        <div class="client-info text-white">
                                            <h5 class="mb-0 text-white">Amelia Joseph</h5>
                                            <p class="mb-0">Chief Manager</p>
                                        </div>
                                    </div>
                                    <blockquote class="text-white">
                                        Use this section to describe your company and the products you offer. You could share your company’s story and details about why you are in business. 
                                    </blockquote>                                   
                                </div>                               
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 330px; margin-right: 30px;">
                            <div class="item">                                
                                <div class="testimonial-single shadow-sm testimonial-light-bg rounded p-4">
                                    <div class="client-info-wrap d-flex align-items-center mt-1">
                                        <div class="client-img mr-3">
                                            <img src="{{asset('/landing_assets/img/client-3.png')}}" alt="client" width="60" class="img-fluid rounded-circle shadow-sm">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="mb-0">Aminul Islam</h5>
                                            <p class="mb-0">ThemeTags</p>
                                        </div>
                                    </div>
                                    <blockquote>
                                        Use this section to describe your company and the products you offer. You could share your company’s story and details about why you are in business. 
                                    </blockquote>
                                </div>                                
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 330px; margin-right: 30px;">
                            <div class="item">                                
                                <div class="testimonial-single shadow-sm testimonial-light-bg rounded p-4">
                                    <div class="client-info-wrap d-flex align-items-center mt-1">
                                        <div class="client-img mr-3">
                                            <img src="{{asset('/landing_assets/img/client-3.png')}}" alt="client" width="60" class="img-fluid rounded-circle shadow-sm">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="mb-0">Aminul Islam</h5>
                                            <p class="mb-0">ThemeTags</p>
                                        </div>
                                    </div>
                                    <blockquote>
                                        Use this section to describe your company and the products you offer. You could share your company’s story and details about why you are in business.  
                                    </blockquote>
                                </div>                                
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 330px; margin-right: 30px;">
                            <div class="item">
                                <div class="testimonial-single shadow-sm testimonial-light-bg rounded p-4">
                                    <div class="client-info-wrap d-flex align-items-center mt-1">
                                        <div class="client-img mr-3">
                                            <img src="{{asset('/landing_assets/img/client-4.png')}}" alt="client" width="60" class="img-fluid rounded-circle shadow-sm">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="mb-0">Pirtle Karol</h5>
                                            <p class="mb-0">ThemeTags</p>
                                        </div>
                                    </div>
                                    <blockquote>
                                        Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                                    </blockquote>
                                </div>
                            
                            </div>
                        </div>
                        <div class="owl-item" style="width: 330px; margin-right: 30px;">
                            <div class="item">
                                <div class="testimonial-single shadow-sm testimonial-light-bg rounded p-4">
                                    <div class="client-info-wrap d-flex align-items-center mt-1">
                                        <div class="client-img mr-3">
                                            <img src="{{asset('/landing_assets/img/client-2.png')}}" alt="client" width="60" class="img-fluid rounded-circle shadow-sm">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="mb-0">Pirtle Karol</h5>
                                            <p class="mb-0">ThemeTags</p>
                                        </div>
                                    </div>
                                    <blockquote>
                                        Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                                    </blockquote>                                   
                                </div>                           
                            </div>
                        </div>
                        <div class="owl-item" style="width: 330px; margin-right: 30px;">
                            <div class="item">
                                <div class="testimonial-single shadow-sm testimonial-light-bg rounded p-4">
                                    <div class="client-info-wrap d-flex align-items-center mt-1">
                                        <div class="client-img mr-3">
                                            <img src="{{asset('/landing_assets/img/client-3.png')}}" alt="client" width="60" class="img-fluid rounded-circle shadow-sm">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="mb-0">Aminul Islam</h5>
                                            <p class="mb-0">ThemeTags</p>
                                        </div>
                                    </div>
                                    <blockquote>
                                        Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient information without effective meta-services.
                                    </blockquote>                               
                                </div>                            
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev">
                        <span aria-label="Previous">‹</span>
                    </button>
                    <button type="button" role="presentation" class="owl-next">
                        <span aria-label="Next">›</span>
                    </button>
                </div> 
                <div class="owl-dots disabled"></div>
                </div>
            </div>
            </div>
        </div>
    </section>
  
   
    <section class="contact-us-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center">What can us do for you?</h2>
                    <p class="lead text-center">We are ready to work on a project of any complexity, whether it’s commercial or residential.</p>

                    <div class="contact-us-form  rounded p-5">
                        
                        <form action="#" method="POST" id="contactForm1" class="contact-us-form" >
                            <style>
                                .red-asterisk {
                                    color: red; /* Set the color of the asterisk */                                  
                                }
                                
                            </style>
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control red-asterisk" name="name" placeholder="Your name" required="required">
                                        <span class="red-asterisk" aria-hidden="true">*</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter" required="required" >
                                        <span class="red-asterisk" aria-hidden="true">*</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-control" name="reason" required="required">
                                            <option value="" disabled selected>select reason for contacting</option>
                                            <option value="question">Question</option>
                                            <option value="feedback">Feedback</option>
                                            <option value="support">Support</option>
                                        </select>
                                        <span class="red-asterisk" aria-hidden="true">*</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Phone " required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message" data-gramm="false" wt-ignore-input="true"></textarea>
                                    </div>
                                </div>
                                <p><span class="text-danger">*</span>Indicate a required field</p>
                                <div class="col-sm-12 mt-3 text-center">
                                    <button type="submit" style="border-radius:0px; width:40%" class="btn secondary-solid-btn" id="btnContactUs">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 

</div>

@endsection