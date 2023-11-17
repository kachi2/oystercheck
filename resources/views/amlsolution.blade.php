@extends('layouts.landing')

@section('content')
 

<div class="main">
    <!--hero section start-->
    <section class="hero-equal-height pt-165 pb-100" style="background: url('{{asset('/landing_assets/img/amlsolutionbg-shape.png')}}')no-repeat bottom center / cover; height: 500px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-12">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0" style="font-size: 70px; font-weight:700">AML solutions to mitigate financial crime risks</h1>
                        <div class="custom-breadcrumb">
                            <ol class=" d-inline-block  list-inline py-0">
                                <li class="list-inline-item breadcrumb-item ">Discover how our dynamic, real time data fights financial crime.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

   

    
    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-4 mb-3"> <!-- Add mb-3 class for spacing -->
                    <div class="card shadow" style="border: 1px solid #162E66">
                        <div class="card-body">
                            <h5 class="card-title">PER Screening</h5>
                            <p class="card-text text-justify" id="card-text2">Access our comprehensive data sets, which have been compiled
                                from over 20,000 government sources, allowing you to identify
                                politically exposed persons and their close associates.</p>
                            <a href="#" id="read-more-link2" class="read-more">Read more</a>
                            <div class="action-btns mt-0 ">
                                <a href="#" class="btn outline-btn mt-3">Learn more <i class="fas fa-arrow-right ml-2" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-4 mb-3"> <!-- Add mb-3 class for spacing -->
                    <div class="card shadow" style="border: 1px solid #162E66">
                        <div class="card-body">
                            <h5 class="card-title">Sanction Screening</h5>
                            <p class="card-text text-justify">Screen against thousands of government regulatory and law enforcement watchlists, and over 100 International and National Sanctions lists that are updated daily.</p>
                            <div class="action-btns mt-0 ">
                                <a href="#" class="btn outline-btn mt-3">Learn more <i class="fas fa-arrow-right ml-2" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 mb-3"> <!-- Add mb-3 class for spacing -->
                    <div class="card shadow" style="border: 1px solid #162E66">
                        <div class="card-body">
                            <h5 class="card-title">Know Your Business Check</h5>
                            <p class="card-text text-justify">Primary source company intelligence via Know Your Business (KYB) Solution. Access primary source, company intelligence to optimize your KYC processes.</p>
                            <div class="action-btns mt-0 ">
                                <a href="#" class="btn outline-btn mt-3">Learn more <i class="fas fa-arrow-right ml-2" ></i></a> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>    
            <br>   
            <div class="row  align-items-center">
                <div class="col-md-12 col-lg-4 mb-3">
                    <div class="card shadow" style="border: 1px solid #162E66">
                        <div class="card-body">
                            <h5 class="card-title">AML Consulting Service</h5>
                            <p class="card-text text-justify">Work with our accredited advisers to assess the money
                                laundering and terrorism financing risk to your business.</p><br>
                            <div class="action-btns mt-0 ">
                                <a href="#" class="btn outline-btn mt-3">Learn more <i class="fas fa-arrow-right ml-2" ></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mb-3 ">
                   
                    <div class="card shadow" style="border: 1px solid #162E66">
                        <div class="card-body video-promo-content mb-md-4 mb-lg-0">
                            <h5 class="card-title">ID Verification (IDV)</h5>
                            <p class="card-text text-justify" id="card-text">
                                MemberCheck, a sister company of NameScan, trusted by many companies for their AML/CTF needs, proudly introduces Identity Verification (IDV), a Know Your Customer
                                 (KYC) solution that verifies the identity of individuals.
                            </p>
                            <a href="#" id="read-more-link" class="read-more">Read more</a>
                            <div class="action-btns mt-0 ">
                                <a href="#" class="btn outline-btn mt-3">Learn more <i class="fas fa-arrow-right ml-2" ></i></a> 
                            </div>
                        </div>
                    </div>
                </div><div class="col-md-12 col-lg-4 mb-3 ">
                   
                    <div class="card shadow" style="border: 1px solid #162E66">
                        <div class="card-body video-promo-content mb-md-4 mb-lg-0">
                            <h5 class="card-title">Pre Employment Checks</h5>
                            <p class="card-text text-justify" id="card-text3">
                                Ensures only people with right to work in the UK and the 
                                character work for you. We conduct series of pre-employment 
                                checks such as BPSS, BS7858 Vetting for your company 
                            </p>
                            <a href="#" id="read-more-link3" class="read-more">Read more</a>
                            <div class="action-btns mt-0 ">
                                <a href="#" class="btn outline-btn mt-3">Learn more <i class="fas fa-arrow-right ml-2" ></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <script>
        const cardText2 = document.getElementById('card-text2');
        const readMoreLink2 = document.getElementById('read-more-link2');
    
        const maxLength2 = 135; // Set the maximum character length
    
        if (cardText2.textContent.length > maxLength2) {
            const shortenedText2 = cardText2.textContent.substring(0, maxLength2);
            const remainingText2 = cardText2.textContent.substring(maxLength2);
    
            cardText2.innerHTML = shortenedText2 +
                `<span id="more-text2" style="display:none">${remainingText2}</span>` +
                '<a href="#" id="read-more-link2"';
    
            readMoreLink2.addEventListener('click', function (event) {
                event.preventDefault();
                const moreText2 = document.getElementById('more-text2');
                if (moreText2.style.display === 'none' || moreText2.style.display === '') {
                    moreText2.style.display = 'inline';
                    readMoreLink2.textContent = 'Read less';
                } else {
                    moreText2.style.display = 'none';
                    readMoreLink2.textContent = 'Read more';
                }
            });
        }
    </script>
    <script>
        const cardText = document.getElementById('card-text');
        const readMoreLink = document.getElementById('read-more-link');
    
        const maxLength = 135; // Set the maximum character length
    
        if (cardText.textContent.length > maxLength) {
            const shortenedText = cardText.textContent.substring(0, maxLength);
            const remainingText = cardText.textContent.substring(maxLength);
    
            cardText.innerHTML = shortenedText +
                `<span id="more-text" style="display:none">${remainingText}</span>` +
                '<a href="#" id="read-more-link"';
    
            readMoreLink.addEventListener('click', function (event) {
                event.preventDefault();
                const moreText = document.getElementById('more-text');
                if (moreText.style.display === 'none' || moreText.style.display === '') {
                    moreText.style.display = 'inline';
                    readMoreLink.textContent = 'Read less';
                } else {
                    moreText.style.display = 'none';
                    readMoreLink.textContent = 'Read more';
                }
            });
        }
    </script> <script>
        const cardText3 = document.getElementById('card-text3');
        const readMoreLink3 = document.getElementById('read-more-link3');
    
        const maxLength3 = 185; // Set the maximum character length
    
        if (cardText3.textContent.length > maxLength3) {
            const shortenedText3 = cardText3.textContent.substring(0, maxLength3);
            const remainingText3 = cardText3.textContent.substring(maxLength3);
    
            cardText3.innerHTML = shortenedText3 +
                `<span id="more-text3" style="display:none">${remainingText3}</span>` +
                '<a href="#" id="read-more-link"';
    
            readMoreLink3.addEventListener('click', function (event) {
                event.preventDefault();
                const moreText3 = document.getElementById('more-text3');
                if (moreText3.style.display === 'none' || moreText3.style.display === '') {
                    moreText3.style.display = 'inline';
                    readMoreLink3.textContent = 'Read less';
                } else {
                    moreText3.style.display = 'none';
                    readMoreLink3.textContent = 'Read more';
                }
            });
        }
    </script>

    <section class="our-portfolio-section ptb-50">
        <div class="container">
           
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-container" >
                        <div class="row screening pt-0">
                            <div class="col-md-12 col-lg-4 screening mix ">
                                <div class="hero-slider-content text-white">                                
                                    <p class="screen">
                                        Oysterchecks  is at the frontier of making  screening processes easier Through the automation of deep KYC
                                        background checks on companies and people, Oysterchecks uses the best technology to do the research “heavy lifting” that a human would normally do. To learn more watch our explainer video.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-2 mix screening"></div>
                            <div class="col-md-12 col-lg-6 mix screening d-flex flex-row-reverse align-items-center">
                                <div class="img-wrap counter-number d-inline-flex align-items-center mb-4" >
                                    <img src="{{asset('/landing_assets/img/laptop.png')}}" alt="hero single" class="custom-width img-fluid">
                                </div>
                            </div>
                        </div>   
                        <div class="row screening pt-0">
                            <div class="col-md-12 col-lg-12 screening mix ">
                                <div class=" text-white">                                
                                    <p class="financial">
                                        Financial institutions and, increasingly, corporates are overwhelmed by the scale and
                                        complexity of their KYC / KY3P workloads. They are trying to cope with:
                                    </p>
                                    
                                </div>
                            </div>
                            
                        </div>                        
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-4 mb-3"> <!-- Add mb-3 class for spacing -->
                    <div class=" card shadow" style="border: 1px solid #162E66">
                        <div class="d-flex flex-row  d-inline-flex card-body">
                            <h5 class=" card-text align-items-left" id="card-text2" style="color: #14274E; font-size:16px">
                                A myriad of sources and
                                extensive checklists of
                                information to gather
                                and verify
                            </h5>
                            <div class="counter-number align-items-center mb-4 mr-3">
                                <img src="{{asset('/landing_assets/img/myriad.png')}}" alt="hero single" >
                            </div>                          
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-4 mb-3"> <!-- Add mb-3 class for spacing -->
                    <div class="card shadow" style="border: 1px solid #162E66">
                        <div class="d-flex flex-row  d-inline-flex card-body">
                            <h5 class=" card-text align-items-left" id="card-text2" style="color: #14274E; font-size:16px">
                                Large, diffuse client
                                bases, often
                                international in
                                character
                            </h5>
                            <div class="counter-number align-items-center mb-4 mr-3">
                                <img src="{{asset('/landing_assets/img/comment2.png')}}" alt="hero single" >
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 mb-3"> <!-- Add mb-3 class for spacing -->
                    <div class="card shadow" style="border: 1px solid #162E66">
                        <div class="d-flex flex-row  d-inline-flex card-body">
                            <h5 class=" card-text align-items-left" id="card-text2" style="color: #14274E; font-size:16px">
                                Ever-evolving regulatory requirements coupled
                                with internal pressure to deliver
                            </h5>
                            <div class="counter-number align-items-center mb-4 mr-3">
                                <img src="{{asset('/landing_assets/img/clipboard_icon.png')}}" alt="hero single" >
                            </div>    
                        </div>
                    </div>
                </div>

            </div>    
            <br>   
            <div class="row screening pt-0">
                <div class="col-md-12 col-lg-12 screening mix ">
                    <div class=" ">                                
                        <p class="financial">
                            This is set against a backdrop of the systemic risk of human error along with an aspiration to go further and automatically run batch processes
                            like remediation work or continuous risk monitoring programmes.
                        </p>
                        <p class="financial">
                            By combining artificial intelligence, linguistic and cultural sensitivity and deep domain knowledge, smartKYC sets new standards for KYC quality,
                            transforms productivity and hardwires compliance conformance.
                        </p>
                        
                    </div>
                </div>
                
            </div> 
            
        </div>
    </section>
  
   
    

    <section class="pricing-section ptb-100 gray-light-bg" style="background-color: #FCFCFD">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Pricing</h2>
                        <p class="lead">Efficiently .</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md">
                    <div class="card text-left single-pricing-pack">
                        <div class="pt-4 pl-4"><h5>BS7858 Vetting</h5></div>
                       
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h1  mb-0">$<span class="price font-weight-bolder" >700</span></div>
                            
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left;">
                                <li>Description of the tier list will go here, copy should be concise and impactful.</li>
                            </ul>
                            
                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Amazing feature one.</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Wonderful feature two</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Priceless feature three</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Splended feature four</li>
                            </ul>
                            <a href="#" class="btn outline-btn mb-3 btn-block" target="_blank">Try for free</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md">
                    <div class="card popular-price text-left single-pricing-pack">
                        <div class="pt-4 pl-4"><h5>BPSS clearance</h5></div>
                        
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h1 mb-0">$<span class="price font-weight-bolder">1200</span><sub style="color:#1A1A1A; font-size:12px; line-height:16.8px">/ month</sub></div>


                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left;">
                                <li>Description of the tier list will go here, copy should be concise and impactful.</li>
                            </ul>
                            <hr>
                           <p style="text-align: left">Everything in the Free plan, plus</p>
                           
                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Amazing feature one.</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Wonderful feature two</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Priceless feature three</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Splended feature four</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Delightful feature five</li>
                            </ul>
                            <a href="#" class="btn btn-block secondary-solid-btn mb-3" style="border-radius: 5px;" target="_blank">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md">
                    <div class="card text-left single-pricing-pack">
                        <div class="pt-4 pl-4"><h5>Employment screening</h5></div>
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h1  mb-0">
                                <span class="price font-weight-bolder">Custom</span><sub style="color:#1A1A1A; font-size:12px; line-height:16.8px">yearly billing only</sub>
                            </div>

                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left;">
                                <li>Description of the tier list will go here, copy should be concise and impactful.</li>
                            </ul>
                            <hr>
                           <p style="text-align: left">Everything in the Pro plan, plus</p>
                           
                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Amazing feature one.</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Wonderful feature two</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Priceless feature three</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Splended feature four</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/Check_icon.png')}}" style="width:18px; height:18px; padding-top:3px" > Delightful feature five</li>
                            </ul>
                            <a href="#" class="btn btn-block outline-btn mb-3" target="_blank">Contact Sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="our-portfolio-section ptb-100">
        <div class="container">
           
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-container" >
                        <div class="row screening pt-0">
                            <div class="col-md-12 col-lg-6  ">
                                <div class="hero-slider-content text-white">  
                                    <h5>Solutions</h5>                              
                                    <p class="">
                                        Multiple identifying attributes are used to ensure the right identity
                                        is being profiled, even in media sources. And all sources are
                                        robotically analysed, with semantic precision, in the native language
                                        so that every linguistic nuance is captured – not machine-translated
                                        into English first and then processed.
                                    </p>
                                    <a href="#" class="btn outline-btn align-items-center">Find our more </a>
                                    
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-5 ">
                                <div class="img-wrap counter-number  mb-4" >
                                    <img src="{{asset('/landing_assets/img/solution_bg.png')}}"  alt="hero single" class="custom-width img-fluid">
                                </div>
                            </div>
                        </div>                      
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
 

</div>

@endsection