@extends('layouts.landing')

@section('content')
 

<div class="main">
    <section class="hero-equal-height pt-165 pb-100" style="background-color: #162E66; ">
        <div class="hero-bottom-shape-two" style="background: url('img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white z-index position-relative">
                        <h1 class="text-white">BPSS Clearance Reduce risk with a high level of protection</h1>
                        <p class="lead">Choose the perfect plan for your business needs</p>

                        <div class="action-btns mt-3">
                            <a href="{{route('login')}}" style="color:#162E66"  class="bg-white btn secondary-solid-btn">Book a Demo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="hero-animation-img">
                        {{-- <img src="{{asset('/landing_assets/img/bpss-clearance.png')}}" alt="hero" class="img-fluid d-none d-lg-block animation-two" width="180"> --}}
                        {{-- <img src="{{asset('/landing_assets/img/bpss-clearance.png')}}" alt="hero" class="animation-one img-fluid custom-width" style="margin-top:180px;"> --}}
                        <img src="{{asset('/landing_assets/img/bpss-clearance.png')}}"   alt="hero single"  class="img-fluid ">
                    </div>
                </div>
            </div>
        </div>
    </section>

    
     <!--BPSS clearance section start-->
     <section class="about-us-section white-light-bg pt-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="about-content-leftt mb-md-4 mb-lg-0 display-4">
                        <h2 style="color:black" class="display-4">Who is BPSS clearance for?</h2>
                    
                       <ul class="list-unstyled text-sm mb-4 clearance-feature-list ">
                        <li ><img src="{{asset('/landing_assets/img/Subtract.png')}}" 
                            style="width:20px; height:20px; padding-top:3px"><span style="padding-left: 10px;"> Civil servants </span></li>
                        <li ><img src="{{asset('/landing_assets/img/Subtract.png')}}" 
                            style="width:20px; height:20px; padding-top:3px"> <span style="padding-left: 10px;"> Temporary and agency staff in departments </span> </li>
                        <li ><img src="{{asset('/landing_assets/img/Subtract.png')}}" 
                            style="width:20px; height:20px; padding-top:3px"> <span style="padding-left: 10px;"> Members of the armed forces</span></li>
                        <li ><img src="{{asset('/landing_assets/img/Subtract.png')}}" 
                            style="width:20px; height:20px; padding-top:3px"> <span style="padding-left: 10px;"> Government contractors generally </span></li>
                        
                        </ul>
                    </div>
                </div>
                 <div class="col-md-12 col-lg-6">
                    <div class="img-wrap counter-number d-inline-flex align-items-center mb-4" >
                        <img src="{{asset('/landing_assets/img/comment.png')}}" alt="hero single" class="custom-width img-fluid">
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--BPSS clearance section end-->
  
    <section class=" pb-100" style=" margin-bottom:-220px; height: 397px; background-color:#162E66; padding-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-headingfaq mb-5 text-center">
                        <h2 class="text-white">Simple pricing for your business</h2>
                        <p class="lead text-white" style="font-size:18px; font-weight: 400;">
                            Plans that are carefully crafted to suit your business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section start-->
    <section class="promo-block ptb-100 " >
        <div class="container " >
            
            <div class="row" style="background-color: #fff;  border-top-left-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
                <div class="col-md-12 col-lg-5" style="background-color: #F8F8F9;  border-top-left-radius: 15px;">
                    <div class=" text-center single-pricing-pack">
                        <div class="card-header py-4 border-0 simplepricing-header" >
                            <h2 class="pt-4">BPSS Clearance</h2>
                            <p>$329</p>  
                        </div>
                        <div class="simplepricing-headerr" >
                            <p >billed just once</p>   
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn secondary-solid-btn mb-3" target="_blank">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7" style="  border-top-left-radius: 15px;">
                    <div class="card-body">                       
                            
                        <div class="simplepricing-headerr py-4" style="text-align: left" >
                            <p >Access these features when you get this pricing package for your business.</p>   
                        </div>
                       
                       <p style="text-align: left"></p>
                       
                        <ul class="list-unstyled text-sm mb-4 pricing-clearance-list">
                            <li style="d-flex flex-row">
                                <img src="{{asset('/landing_assets/img/circular.png')}}" style="width:18px; height:18px; padding-top:3px" > Basic DBS</li>
                            <li style="d-flex flex-row">
                                <img src="{{asset('/landing_assets/img/circular.png')}}" style="width:18px; height:18px; padding-top:3px" > ID verification</li>
                            <li style="d-flex flex-row">
                                <img src="{{asset('/landing_assets/img/circular.png')}}" style="width:18px; height:18px; padding-top:3px" > RTW check</li>
                            <li style="d-flex flex-row">
                                <img src="{{asset('/landing_assets/img/circular.png')}}" style="width:18px; height:18px; padding-top:3px" > 3 years previous employment reference (including gap analysis)</li>
                        </ul>
                      
                    </div>
                </div>
                
            </div>

            <div class="row justify-content-center" style="padding-top:20px">
                <div class="col-md-6 col-lg-4 dot-bg-shape dot-bg-1">
                    <div class="d-flex flex-row promo-counter  white-bg p-5">
                        <div class="counter-number d-inline-flex align-items-center mb-4 mr-3">
                            <img src="{{asset('/landing_assets/img/guarantee.png')}}" alt="hero single" >
                        </div>
                        <h5 class="mb-0">30 days money back Guarantee</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 dot-bg-shape dot-bg-2">
                    <div class="d-flex flex-row promo-counter  white-bg p-5">
                        <div class="counter-number d-inline-flex align-items-center mb-4 mr-3">
                            <img src="{{asset('/landing_assets/img/hassie.png')}}" alt="hero single" >
                        </div>
                        <h5 class="mb-0">No setup fees 100% hassle-free</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 dot-bg-shape dot-bg-3">
                    <div class="d-flex flex-row promo-counter white-bg p-5">
                        <div class="counter-number d-inline-flex align-items-center mb-4 mr-3">
                            <img src="{{asset('/landing_assets/img/subscription.png')}}" alt="hero single" >
                        </div>
                        <h5 class="mb-0">No additional subscription Pay once and for all</h5>
                    </div>
                </div>
            </div>
           
    </section>
    <!--promo section end-->

    <section class="contact-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2 style="color:#162E66">People are Saying About Oysterchecks</h2>
                        <p class="lead">Everything you need to accept to payment and grow your money of manage anywhere on planet</p>

                        
                        <div class="testimonial-quote-wrap ">
                            <div class="client-say">
                                <span class="fas fa-quote-left"></span>  
                                <p style="font-weight: 500">
                                    I am very helped by this E-wallet application , my days are very easy to use this application and its very helpful in my life , even I can pay a short time 😍
                                </p>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-0">_ Aria Zinanrio</h5>
                            </div>
                            <div class="media author-info mt-3">
                                <div class="author-img mr-3 d-flex flex-row">
                                    <img src="{{asset('/landing_assets/img/client-1.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                    <img src="{{asset('/landing_assets/img/client-2.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                    <img src="{{asset('/landing_assets/img/client-3.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                    <img src="{{asset('/landing_assets/img/client-4.png')}}" alt="client" class="img-fluid rounded-circle mr-3">
                                </div>
                                
                            </div>
                        </div>
                
                    </div>
                </div>
                <div class="col-md-6">
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