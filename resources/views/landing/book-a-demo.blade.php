@extends('layouts.landing')

@section('content')
 

<div class="main">
    <section class="hero-equal-height pt-100 pb-100" style="background-color: #162E66; ">
        <div class="hero-bottom-shape-two" style="background: url('img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white z-index position-relative">
                        <h2 class="text-white">
                            Stop Fraud, Build Trust, &
                            Drive Growth with Mobile-First
                            <span style="color: #FA0C00">Fraud Detection</span>
                        </h2>
                        <p class="lead">Know which devices, users, and accounts to trust with the
                            global standard for device identification.</p>
                       
                        <ul class="list-unstyled  text-sm mb-4 pricing-feature-list" style="font-size: 16px">
                            <li style="d-flex flex-row; color:#fff; line-height:15px">
                                <img class="mr-2" src="{{asset('/landing_assets/img/Check_icon.png')}}" 
                                style="width:18px; height:18px; padding-top:3px; line-height:15px" > Stay ahead of new and unknown fraud</li>

                            <li style="d-flex flex-row; color:#fff">
                                <img class="mr-2" src="{{asset('/landing_assets/img/Check_icon.png')}}" 
                                style="width:18px; height:18px; padding-top:3px; line-height:15px" > Stay ahead of new and unknown fraud</li>
                            <li style="d-flex flex-row; color:#fff">
                                <img class="mr-2" src="{{asset('/landing_assets/img/Check_icon.png')}}" 
                                style="width:18px; height:18px; padding-top:3px; line-height:15px" > Stay ahead of new and unknown fraud</li>
                            <li style="d-flex flex-row; color:#fff">
                                <img class="mr-2" src="{{asset('/landing_assets/img/Check_icon.png')}}" 
                                style="width:18px; height:18px; padding-top:3px; line-height:15px" > Stay ahead of new and unknown fraud</li>
                            <li style="d-flex flex-row; color:#fff">
                                <img class="mr-2" src="{{asset('/landing_assets/img/Check_icon.png')}}" 
                                style="width:18px; height:18px; padding-top:3px; line-height:15px" > Stay ahead of new and unknown fraud</li>
                        </ul>
                        <p style="font-size: 12px">Trusted by</p>
                        <style>
                            /* Define the opacity-effect class */
                            .opacity-effect {
                                opacity: 0.7; /* Adjust the opacity level as needed */
                                /* You can also add transition effects for smooth changes */
                                transition: opacity 0.3s ease-in-out;
                            }

                            /* On hover, increase the opacity */
                            .opacity-effect:hover {
                                opacity: 1;
                            }
                        </style>
                        <div class="row">
                            <div class="col">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/inDrive_img.png')}}"   alt="inDrive_img">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/alibaba_img.png')}}"   alt="alibaba_img">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/mpl_img.png')}}"   alt="mpl_img">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/maya_img.png')}}"   alt="mpl_img">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/truemoney_img.png')}}"   alt="truemoney_img">
                                
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/astro_img.png')}}"   alt="astro_img">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/zest_img.png')}}"   alt="zest_img">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/sea_img.png')}}"   alt="sea_img">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/scale_img.png')}}"   alt="mpl_img">
                                <img class="mr-4 opacity-effect" src="{{asset('/landing_assets/img/razer_img.png')}}"   alt="razer_img">
                          
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="contact-us-form  rounded p-5" style="background-color: #fff">
                        <div class="row d-flex justify-content-between">                            
                            <h4>Book a Live Demo</h4>                            
                            <p>*Mandatory fields</p>                          
                        </div>                        
                       
                        <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name*" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name*" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Company Email*" required="required" >
                                     </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="jobtitle" placeholder="Job Title*" required="required" >
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="company" placeholder="Company*" required="required" >
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country" placeholder="Country*" required="required" >
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone" required="required" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p><b>The platform(s) that you are looking to protect:</b></p>
                                </div>
                                <div class="col-6">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Mobile App
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Website
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p><b>What are you looking to protect against:</b></p>
                                </div>
                                <div class="col-4">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                        <label style="font-size: 14px" class="form-check-label" for="flexCheckDefault">
                                            Account takeover
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label style="font-size: 14px" class="form-check-label" for="flexCheckDefault">
                                            Fake accounts
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label style="font-size: 14px" class="form-check-label" for="flexCheckDefault">
                                            Referral & promo abuse
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                        <label style="font-size: 14px" class="form-check-label" for="flexCheckDefault">
                                            Payment fraud
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label style="font-size: 14px" class="form-check-label" for="flexCheckDefault">
                                            Incentive abuse
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label style="font-size: 14px" class="form-check-label" for="flexCheckDefault">
                                            Spam & abuse
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                        <label style="font-size: 14px" class="form-check-label" for="flexCheckDefault">
                                            Identity fraud
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group ml-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label style="font-size: 14px" class="form-check-label" for="flexCheckDefault">
                                            Ad fraud
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder=" " required="required" >
                                     </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn secondary-solid-btn mr-3" style="background-color:#EFEFEF; border:none; color: #B0B0B0; border-radius: 10px; width: 200px; font-size: 14px; padding:0; border-radius:10px" >
                                        Book a Demo
                                    </button>
                                    <p>
                                        By submitting this form, you agree to our <span style="color: #2BB2FF"> Terms of Use </span> and <span style="color:#2BB2FF">Privacy Policy</span>
                                    </p>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

    <section class="our-blog-section ptb-100 white-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading mb-5 text-center">
                        <h3>The Fraud Detection Solution Built for Every Industry</h3>
                        <p class="lead">
                            Leverage real-time fraud signals to eliminate risk blind spots, provide superior user experiences, and accelerate growth.
                        </p>
                    </div>
                </div>
            </div>
            {{-- shadow-sm --}}
            <div class="row">
                <div class="col ">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0  white-bg rounded">
                        <img src="{{asset('/landing_assets/img/ride_img.png')}}" >
                        <p style="font-size: 14px">Ride-Hailing</p>
                    </div>
                </div>
                <div class="col ">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0  white-bg rounded">
                        <img src="{{asset('/landing_assets/img/socialMedia_img.png')}}" >
                        <p style="font-size: 12px">Social Media & Networking</p>
                    </div>
                </div>
                <div class="col">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0 white-bg rounded">
                        <img src="{{asset('/landing_assets/img/superapps_img.png')}}" >
                        <p style="font-size: 14px">Superapps</p>
                     </div>
                </div>
                <div class="col ">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0 white-bg rounded">
                        <img src="{{asset('/landing_assets/img/media_img.png')}}" >
                        <p style="font-size: 14px">Media & Streaming</p>
                     </div>
                </div>
                <div class="col">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0 white-bg rounded">
                        <img src="{{asset('/landing_assets/img/online_deliveryimg.png')}}" >
                        <p style="font-size: 14px">Online Delivery</p>
                     </div>
                </div>
                <div class="col ">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0 white-bg rounded">
                        <img src="{{asset('/landing_assets/img/e-wallet_img.png')}}" >
                        <p style="font-size: 14px">E-wallet</p>
                     </div>
                </div>
                <div class="col ">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0 white-bg rounded">
                        <img src="{{asset('/landing_assets/img/marketplace_img.png')}}" >
                        <p style="font-size: 12px">E-commerce & Marketplace</p>
                     </div>
                </div>
                <div class="col ">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0 white-bg rounded">
                        <img src="{{asset('/landing_assets/img/digital_img.png')}}" >
                        <p style="font-size: 14px">Digital & Neobanking</p>
                     </div>
                </div>
                <div class="col ">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0 white-bg rounded">
                        <img src="{{asset('/landing_assets/img/gaming_img.png')}}" >
                        <p style="font-size: 14px">Gaming</p>
                     </div>
                </div>
                <div class="col">
                    <div class="services-single animated-hover text-center p-0 my-md-3 my-lg-3 my-sm-0 white-bg rounded">
                        <img src="{{asset('/landing_assets/img/casinos_img.png')}}" >
                        <p style="font-size: 14px">Online Casinos</p>
                     </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <img src="{{asset('/landing_assets/img/shield_id.png')}}" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <p class="card-text">Harness the global standard for device
                                identification. Device IDs you can trust, no matter
                                how device parameters change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <img src="{{asset('/landing_assets/img/risk_img.png')}}" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <p class="card-text">
                                Expose tools and techniques used for fraud on
                                your ecosystem. Stop sophisticated attacks
                                before they cause harm.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <img src="{{asset('/landing_assets/img/device_img.png')}}" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <p class="card-text">Identify if a device session can be trusted.
                                Accurate trust signals that empower instant
                                action. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="contact-us-section ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <h2 style="color:#162E66">People are Saying About Oysterchecks</h2>
                    <p class="lead">Everything you need to accept to payment and grow your money of manage anywhere on planet</p>

                    <div class="owl-carousel owl-theme client-testimonial-1 custom-dot owl-loaded owl-drag">                      
                        
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1600px, 0px, 0px); transition: all 0.25s ease 0s; width: 3200px;">
                            <div class="owl-item cloned active" style="width: 370px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="client-say">
                                            <p><span class="fas fa-quote-left"></span> 
                                                I am very helped by this E-wallet application , my days are very easy to use this application and its very 
                                                helpful in my life , even I can pay a short time 😍
                                            </p>
                                        </div>
                                        <div class="media  my-0 d-flex flex-column mb-3">
                                            <h5 class="mb-1">John Charles</h5>
                                            <div class="author-img mr-3  d-flex align-items-start">
                                                <img src="{{asset('/landing_assets/img/client-1.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-2.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-3.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-4.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="client-say">
                                            <p><span class="fas fa-quote-left"></span>  I am very helped by this E-wallet application , my days are very easy to use this application and its very 
                                                helpful in my life , even I can pay a short time 😍</p>
                                        </div>
                                        <div class="media  my-0 d-flex flex-column mb-3">
                                            <h5 class="mb-1">John Charles</h5>
                                            <div class="author-img mr-3  d-flex align-items-start">
                                                <img src="{{asset('/landing_assets/img/client-1.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-2.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-3.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-4.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="client-say">
                                            <p><span class="fas fa-quote-left"></span>  I am very helped by this E-wallet application , my days are very easy to use this application and its very 
                                                helpful in my life , even I can pay a short time 😍</p>
                                        </div>
                                        <div class="media  my-0 d-flex flex-column mb-3">
                                            <h5 class="mb-1">John Charles</h5>
                                            <div class="author-img mr-3  d-flex align-items-start">
                                                <img src="{{asset('/landing_assets/img/client-1.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-2.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-3.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-4.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item " style="width: 370px; margin-right: 30px;">
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="client-say">
                                            <p><span class="fas fa-quote-left"></span>       
                                                I am very helped by this E-wallet application , my days are very easy to use this application and its very 
                                                helpful in my life , even I can pay a short time 😍
                                            </p>
                                        </div>
                                        <div class="media  my-0 d-flex flex-column mb-3">
                                            <h5 class="mb-1">John Charles</h5>
                                            <div class="author-img mr-3  d-flex align-items-start">
                                                <img src="{{asset('/landing_assets/img/client-1.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-2.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-3.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                                <img src="{{asset('/landing_assets/img/client-4.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev">
                            <span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next">
                            <span aria-label="Next">›</span>
                        </button>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="contact-us-form gray-light-bg  p-5" style="background-color: #222938; border-radius:10px">
                    <h4 class="text-center text-white">Get started</h4>
                    <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="text-white">Email</label>
                                    <input type="email" class="form-control" name="name" placeholder="Enter your email" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="text-white">Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" cols="25" placeholder="What are you saying?" data-gramm="false" wt-ignore-input="true"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <button style="border-radius: 3px; background-color: #DA251D; border:none;" type="submit" class="btn-block btn secondary-solid-btn" id="btnContactUs">
                                    Request Demo
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