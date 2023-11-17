@extends('layouts.landing')

@section('content')
<style>
    /* Define the opacity-effect class */
    .opacity-effect {
        /* Adjust the opacity level as needed */
        /* You can also add transition effects for smooth changes */
        transition: opacity 0.3s ease-in-out;
        background-color: #162E66;
    }

    
</style>

<div class="main">
 
    <section class="hero-equal-height pt-165 ptb-100" style="background: url('{{asset('/landing_assets/img/periodic_img.png')}}') no-repeat bottom center / cover;  ">
        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #162e6660; "></div>
        <div class="" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-12">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0" style="font-size: 70px; font-weight: 700;">Periodic KYC Refresh</h1>
                            <p style="font-size: 24px;">Receive alerts on material changes to client risk profiles as reported in corporate databases, registries, or open web media. Ensure those alerts are relevant, genuinely new information, and are delivered with appropriate timing.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--hero section end-->

    <section class="contact-us-section ptb-50  pt-100 ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <h2 style="color:#162E66">What is Periodic KYC?</h2>
                    <p class="lead" style="font-size:16px">Periodic refresh or Periodic KYC is the process used to regularly review,
                        verify and update information relating to clients after they have been
                        onboarded.</p>
                    <p style="font-size:16px; font-weight:600; color:#14274E">Often used by banks or financial institutions, periodic refresh includes
                        activities such as:</p>
                    
                    <ul class="list-unstyled  text-sm mb-4 pricing-feature-list" style="font-size: 16px">
                        <li style="d-flex flex-row; ">
                            <img class="mr-2" src="{{asset('/landing_assets/img/red_circular.png')}}" 
                            style="width:18px; height:18px; padding-top:3px; line-height:15px" > re-verifying customer information</li>

                        <li style="d-flex flex-row; ">
                            <img class="mr-2" src="{{asset('/landing_assets/img/red_circular.png')}}" 
                            style="width:18px; height:18px; padding-top:3px; line-height:15px" > reviewing and updating customer risk profiles</li>
                        <li style="d-flex flex-row;">
                            <img class="mr-2" src="{{asset('/landing_assets/img/red_circular.png')}}" 
                            style="width:18px; height:18px; padding-top:3px; line-height:15px" > monitoring customer transactions and online presence to detect
                            suspicious activity for financial crime such as money laundering.</li>
                        <li style="d-flex flex-row; ">
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6">
                
                    <div class="img-wrap counter-number d-inline-flex align-items-center mb-4" >
                        <img src="{{asset('/landing_assets/img/kyc_img.png')}}" alt="hero single" class="custom-width img-fluid">
                    </div>
                    
                </div>
            </div>
            <p>Traditionally, KYC is conducted periodically, after a specified amount of time has elapsed.</p>

            <p>The frequency at which periodic refresh is performed at pre-defined frequencies can vary depending on the regulatory requirements of the
                jurisdiction, the financial risk appetite of the financial institution and on the risk profile of the customer.</p>

            <p>If the customer has a low-risk small retail profile, refresh can be done at yearly or even three yearly intervals. However, if the customer has a
                high-risk corporate profile, periodic refresh can be done between monthly or annual intervals.</p>

            <h2>Why Periodic Refresh is Needed</h2>
            <p>Regulatory authorities require financial institutions to identify and verify their customers, as well as regularly monitor customer activity. </p>
            <p>Periodic refresh helps ensure customer information used by institutions is accurate and that systems are able to detect suspicious activity. </p>
            <p>By regularly reviewing and updating customer information financial institutions can detect any changes in a customer’s information or activity
                that may indicate financial crime and take appropriate action to prevent financial crimes such as money laundering and terrorist financing.</p>

            <h2>Problems with Current Solutions</h2>
            <p style="font-weight:600; font-size:16px">Since periodic refresh is done at pre-defined frequencies, information relating to the customer can be missed in between the
                intervals that periodic refresh is performed.</p>

            <ul class="list-unstyled  text-sm mb-4 pricing-feature-list" style="font-size: 16px">
                <li style="d-flex flex-row; ">
                    <img class="mr-2" src="{{asset('/landing_assets/img/red_circular.png')}}" 
                    style="width:18px; height:18px; padding-top:3px; line-height:15px" >
                    If information on the company is updated on a corporate registry, the change won’t be detected until the next periodic refresh 
                    interval
                    leading to information associated with the customer to not be updated.</li>

                <li style="d-flex flex-row; ">
                    <img class="mr-2" src="{{asset('/landing_assets/img/red_circular.png')}}" 
                    style="width:18px; height:18px; padding-top:3px; line-height:15px" > 
                    Another example of this can be when the customer has been reported to commit money laundering in the media, the periodic refresh
                    system will not be able to detect this <a href="#"><span style="color:#FF4B55">adverse media</span></a> as it happens and so the risk profile of this customer will have changed without the
                    financial institution realising.
                </li>
            </ul>
            <br>
            <h2>Oysterchecks’s Solution</h2>

            <p>
                With Oysterchecks’s <a href="#"><span style="color: #E7A625">award-winning technology</span></a>, businesses can eliminate the need for manual methods of document verification and can instead
                use artificial intelligence identity verification solutions. 
            </p>
            <p>
                With smartKYC, you will not just receive alerts on material changes to client risk profiles as reported in corporate databases, registries or open
                web media, but we also ensure those alerts are relevant, genuinely new information and are delivered with appropriate timing.
            </p>

            <h2>Discover our Automated KYC Solution</h2>
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