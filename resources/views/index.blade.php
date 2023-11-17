@extends('layouts.landing')

@section('content')
 

<div class="main">
    <section class="hero-equal-height pt-165 pb-100" style="background: url('{{asset('/landing_assets/img/bg-shape.png')}}')no-repeat center center / cover; margin-bottom:-190px; ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content z-index position-relative">
                        <h1 class="text-white">Instant background checks for the right talent</h1>
                        <p class="lead text-white">A better way to verify a candidate's information and background during the recruitment process. </p>
                       
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="hero-animation-img">
                        <img src="{{asset('/landing_assets/fontpage.png')}}" alt="hero" class="custom-width img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    <!--promo section start-->
    <section class="promo-block ptb-100 ">
        <div class="container " >
            <div class="row no-gutters ">
                <div class="col-md-6 col-lg-4 box-1"  style="height: 100px; border: 2px solid white; border-radius: 10px;">
                    <div   class="d-flex flex-row mb-3 single-promo-block animated-hover p-5 text-center">
                        <div class="promo-block-icon mb-3">
                            <img class="p-2" src="{{asset('/landing_assets/img/bpss.png')}}"/>
                        </div>
                        <div class="p-2 promo-block-content">
                            <h5>BPSS Screening</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 box-1"  style="height: 100px">
                    <div class="d-flex flex-row mb-3 single-promo-block animated-hover p-5 text-center">
                        <div class="promo-block-icon mb-3">
                            <img class="p-2 icon-md" src="{{asset('/landing_assets/img/bs7858.png')}}"/> 
                        </div>
                        <div class="p-2 promo-block-content">
                            <h5>BS7858 Vetting</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 box-1"  style="height: 100px">
                    <div class="d-flex flex-row mb-3 single-promo-block animated-hover p-5 text-center">
                        <div class="promo-block-icon mb-3">
                            <img class="p-2 icon-md" src="{{asset('/landing_assets/img/es.png')}}"/> 
                        </div>
                        <div class="p-2 promo-block-content">
                            <h5>Employment Screening</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--about us section start-->
    <section class="about-us-section white-light-bg p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="about-content-left mb-md-4 mb-lg-0">
                        <h2>Background check screening is a way to verify a candidate’s information and background during the recruitment process</h2>
                        <p>Are the qualifications on their CV correct? What is their employment history?</p>
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="d-flex flex-column-reverse align-items-end ">
                        <div class="action-btns mt-3 " style="padding-top: 40px">
                            <a href="#" class="btn secondary-solid-btn">Learn more <i class="fas fa-arrow-right ml-2" ></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--about us section end-->

    
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
    </script>

    <section class="about-us-section ptb-100 white-light-bg">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="feature-tabs-wrap">
                        <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center " href="#feature-tab-1" data-toggle="tab">
                                    <h6 class="m-1">BPSS Screening</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" href="#feature-tab-2" data-toggle="tab">
                                    <h6 class="m-1 ">BS7858 Vetting</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" href="#feature-tab-3" data-toggle="tab">
                                    <h6 class="m-1">Employment Screening</h6>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content feature-tab-content">
                            <div class="tab-pane" id="feature-tab-1">
                                <div class="row justify-content-around">
                                    <div class="row screening p-3">
                                        <div class="col-md-12 col-lg-5 screening mix ">
                                            <div class="hero-slider-content" style="font-size: 16px">
                                                <P >BS7858 VETTING</P>
                                                <h4 >What is it</h4>
                                                <p class="screen">
                                                    Anyone working in a secure environment where the security and/or safety of people, goods,
                                                    services, data or property is an operational requirement. This could be those working in
                                                    public-facing roles or who hold positions of authority.
                                                    <br><br>
                                                    Anyone working in a secure environment where the security and/or safety of people, goods,
                                                    services, data or property is an operational requirement. This could be those working in
                                                    public-facing roles or who hold positions of authority.
                                                </p>
                                                <div class="action-btns mt-3" style="display: flex; ">
                                                    <a href="{{route('login')}}" class="btn secondary-solid-btn">Get Started Now <i class="fas fa-arrow-right ml-2" ></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-1 mix screening"></div>
                                        <div class="col-md-12 col-lg-6 mix screening d-flex flex-row-reverse align-items-center">
                                            <div class="img-wrap counter-number d-inline-flex align-items-center mb-4" >
                                                <img src="{{asset('/landing_assets/img/laptop.png')}}" alt="hero single" class="custom-width img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active" id="feature-tab-2">
                               
                                <div class="row  pt-4">
                                    <div class="col-md-12 col-lg-6 mix screening d-flex flex-row-reverse align-items-center">
                                        <div class="img-wrap counter-number d-inline-flex align-items-center mb-4" >
                                            <img src="{{asset('/landing_assets/img/laptop.png')}}" alt="hero single" class="custom-width img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-1 mix screening"></div>
                                    <div class="col-md-12 col-lg-5 screening mix ">
                                        
                                        <div class="hero-slider-content" style="font-size: 16px">
                                            <P >BS7858 VETTING</P>
                                            <h4 >What is it</h4>
                                            <p class="screen">
                                                Anyone working in a secure environment where the security and/or safety of people, goods,
                                                services, data or property is an operational requirement. This could be those working in
                                                public-facing roles or who hold positions of authority.
                                                <br><br>
                                                Anyone working in a secure environment where the security and/or safety of people, goods,
                                                services, data or property is an operational requirement. This could be those working in
                                                public-facing roles or who hold positions of authority.
                                            </p>
                                            <div class="action-btns mt-3" style="display: flex; ">
                                                <a href="{{route('login')}}" class="btn secondary-solid-btn">Get Started Now <i class="fas fa-arrow-right ml-2" ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="tab-pane" id="feature-tab-3">
                                <div class="row justify-content-around">
                                    <div class="row  p-3">
                                        <div class="col-md-12 col-lg-5 screening mix ">
                                            <div class="hero-slider-content" style="font-size: 16px">
                                                <P >BS7858 VETTING</P>
                                                <h4 >What is it</h4>
                                                <p class="screen">
                                                    Anyone working in a secure environment where the security and/or safety of people, goods,
                                                    services, data or property is an operational requirement. This could be those working in
                                                    public-facing roles or who hold positions of authority.
                                                    <br><br>
                                                    Anyone working in a secure environment where the security and/or safety of people, goods,
                                                    services, data or property is an operational requirement. This could be those working in
                                                    public-facing roles or who hold positions of authority.
                                                </p>
                                                <div class="action-btns mt-3" style="display: flex; ">
                                                    <a href="{{route('login')}}" class="btn secondary-solid-btn">Get Started Now <i class="fas fa-arrow-right ml-2" ></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-1 mix screening"></div>
                                        <div class="col-md-12 col-lg-6 mix screening d-flex flex-row-reverse align-items-center">
                                            <div class="img-wrap counter-number d-inline-flex align-items-center mb-4" >
                                                <img src="{{asset('/landing_assets/img/laptop.png')}}" alt="hero single" class="custom-width img-fluid">
                                            </div>
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

    

    <section class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-4"><h5>BS7858 Vetting</h5></div>
                       
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h1 text-center mb-0">$<span class="price font-weight-bolder" >700</span></div>
                            
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
                            <a href="#" class="btn outline-btn mb-3" target="_blank">Try for free</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="pt-4"><h5>BPSS clearance</h5></div>
                        
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">1200</span><sub style="color:#1A1A1A; font-size:12px; line-height:16.8px">/ month</sub></div>


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
                            <a href="#" class="btn secondary-solid-btn mb-3" style="border-radius: 5px;" target="_blank">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-4"><h5>Employment screening</h5></div>
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h1 text-center mb-0"><span class="price font-weight-bolder">Custom</span><sub style="color:#1A1A1A; font-size:12px; line-height:16.8px">yearly billing only</sub></div>

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
                            <a href="#" class="btn outline-btn mb-3" target="_blank">Contact Sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 

</div>

@endsection