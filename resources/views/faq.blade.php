@extends('layouts.landing')
@section('content')

<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 gradient-overlay" style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="hero-bottom-shape-two" style="background: url('img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">FAQ</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Faq</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->

    <!--promo section end-->

    <section class="gray-light-bg ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-3 text-center">
                        <h2>Frequently Asked Questions</h2>
                        <p class="lead">
                            Quickly morph client-centric results through performance based applications. Proactively facilitate professional human capital for cutting-edge.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single-faq mt-4">
                        <h5>The Company</h5>
                        
                    </div>
                    <div class="col-lg-12">
                        <div id="accordion-1" class="accordion accordion-faq">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                    <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Who is Oysterchecks?</h6>
                                </div>
                                <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>Oysterchecks trade as The Morgans Consortium Consulting Limited (TMC) a private registered company with a registration number 09045481 We specialize in providing comprehensive automated Background Screening, KYC , Transaction Monitoring & AML solutions across the globe. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                    <h6 class="mb-0"><span class="ti-gallery mr-3"></span> Where is Oysterchecks Located?</h6>
                                </div>
                                <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>UK Address: International House 24 Holborn Viaduct London EC1A 2BN United Kingdom,
                                            Nigeria Address: 2nd Floor, 1 Adeola Adeoye Street, Off Toyin Street, Ikeja, Lagos Nigeria</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span> What Industries Do  Oysterchecks serve?
                                    </h6>
                                </div>
                                <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>Oysterchecks takes pride in providing background screening, KYC and AML checks services to a variety of clients in different industries. We have a great team of IT experts who ensure that our services meet the needs of our diverse clients. Our services are fully tested and automated for businesses in the following sectors:
                                            <ul> 
                                         <li> HR and Recruitment</li>   
                                         <li> Public sector</li>    
                                         <li> Finance </li>  
                                         <li>  Construction</li>  
                                         <li> Hospitality</li>   
                                            <li>  Retail </li>  
                                            <li>  Fintech</li>  
                                            <li> Asset and wealth management.</li>  
                                            <li> Bank.</li>  
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-faq mt-4">
                        <h5>Our Products</h5>
                    </div>
                    <div class="col-lg-12">
                        <div id="accordion-1" class="accordion accordion-faq">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-4" data-toggle="collapse" role="button" data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span> What Products we offer?
                                    </h6>
                                </div>
                                <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            Which verification services does  Oysterchecks provide?
                                            We provide the following SaaS and PaaS compliance products: 
                                            
                                             
                                           <ul>
                                            
                                            <li> <strong> Know Your Customer (KYC) </strong> 
                                            
                                            Our KYC solution helps you perform full KYC verification globally to satisfy compliance. These include ID, address, biometric, and phone number verification.
                                             Additionally, you can AML screen and criminal/ fraud check customers for PEP and sanction listing. 
                                        </li>
                                             
                                            
                                            <li> <strong>  Know Your Business (KYB)</strong>
                                            
                                            The Oysterchecks KYB solution helps you verify the legal existence and registry of a business including its address,
                                             incorporation documents, the identity of directors and ultimate beneficial owners. 
                                        </li>
                                        </ul> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-5" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                    <h6 class="mb-0"><span class="ti-gallery mr-3"></span> How do you perform KYC?</h6>
                                </div>
                                <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            Oysterchecks’s KYC process primarily includes document scan, selfie-based liveness check, facial compare, biometrics verification and automated sanction/ watchlist screening. However, you can tailor the process to exclude some or include more depending on the needs of your business.
                                            
                                            
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button" data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span> Which documents do you accept?
                                    </h6>
                                </div>
                                <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            Oysterchecks accepts government or state-backed documents from different countries globally.
                                             Our AI is able to automatically scan and extract vital information from those documents for verification.
                                              On a general note, these include Passports, ID cards, Driving licenses and other jurisdiction-specific documents.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="single-faq mt-4">
                        <h5>Verification Solutions</h5>
                    </div>
                    <div class="col-lg-12">
                        <div id="accordion-1" class="accordion accordion-faq">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-4" data-toggle="collapse" role="button" data-target="#collapse-2-4" aria-expanded="false" aria-controls="collapse-2-4">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span> Which verification services does Oysterchecks provide?
                                    </h6>
                                </div>
                                <div id="collapse-2-4" class="collapse" aria-labelledby="heading-2-4" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            We offer KYC verification in the form of identity verification and address verification. We also offer Business verification services to meet your KYB requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-3-2" data-toggle="collapse" role="button" data-target="#collapse-3-2" aria-expanded="false" aria-controls="collapse-3-2">
                                    <h6 class="mb-0"><span class="ti-gallery mr-3"></span> How do you perform KYC?</h6>
                                </div>
                                <div id="collapse-3-2" class="collapse" aria-labelledby="heading-3-2" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            We perform KYC by utilizing our authoritative government data sources to verify identity documents and also carry out physical address verification.
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-3-3" data-toggle="collapse" role="button" data-target="#collapse-3-3" aria-expanded="false" aria-controls="collapse-3-3">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span>Which documents do you accept for KYC?
                                    </h6>
                                </div>
                                <div id="collapse-3-3" class="collapse" aria-labelledby="heading-3-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            We accept all recognized ID like International Passport, Driver’s license, and other relevant government-accepted IDs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header py-4" id="heading-4-3" data-toggle="collapse" role="button" data-target="#collapse-4-3" aria-expanded="false" aria-controls="collapse-4-3">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span>How are identity verification results compiled and reported to businesses?
                                    </h6>
                                </div>
                                <div id="collapse-4-3" class="collapse" aria-labelledby="heading-4-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            The identity verification report returns a dataset of personally identifiable information as a response when an ID verification call is made
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header py-4" id="heading-5-3" data-toggle="collapse" role="button" data-target="#collapse-5-3" aria-expanded="false" aria-controls="collapse-5-3">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span>How do you perform address verification?
                                    </h6>
                                </div>
                                <div id="collapse-5-3" class="collapse" aria-labelledby="heading-5-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            Address verification is performed physically by our agent network across all states in supported locations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-faq mt-4">
                        <h5>Customer Verification Process</h5>
                    </div>
                    <div class="col-lg-12">
                        <div id="accordion-1" class="accordion accordion-faq">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-6-4" data-toggle="collapse" role="button" data-target="#collapse-6-4" aria-expanded="false" aria-controls="collapse-6-4">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span> How long does it take to verify a user?
                                    </h6>
                                </div>
                                <div id="collapse-6-4" class="collapse" aria-labelledby="heading-6-4" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            All verifications are real-time, except address verification which has a turnaround time of 24-72 hours depending on location..
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-7-2" data-toggle="collapse" role="button" data-target="#collapse-7-2" aria-expanded="false" aria-controls="collapse-7-2">
                                    <h6 class="mb-0"><span class="ti-gallery mr-3"></span> What does the verification process entail?</h6>
                                </div>
                                <div id="collapse-7-2" class="collapse" aria-labelledby="heading-7-2" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            Our verification process is designed to be flexible and adapt to customer needs. You can design your verification process to suit your specific industry and business needs. However, our KYC procedure involves ID verification, Address verification, biometric verification, facial matching, and compare
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-8-3" data-toggle="collapse" role="button" data-target="#collapse-8-3" aria-expanded="false" aria-controls="collapse-8-3">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span>How long do you store user data?
                                    </h6>
                                </div>
                                <div id="collapse-8-3" class="collapse" aria-labelledby="heading-8-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            We perform our verification services on behalf of our clients for a variety of different reasons. Those reasons are identified by our clients, and we rely on them to tell us when they no longer need us to store the information we’ve collected on their behalf. Once instructed, either through our agreement with the client or through an ad hoc request, we delete the information we have collected about users when performing the requested verification services
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header py-4" id="heading-9-3" data-toggle="collapse" role="button" data-target="#collapse-9-3" aria-expanded="false" aria-controls="collapse-9-3">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span>How do you secure data?
                                    </h6>
                                </div>
                                <div id="collapse-9-3" class="collapse" aria-labelledby="heading-9-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            Presently, we use data centres in European Union (“EU”) where data privacy is governed by the General Data Protection Regulation (“GDPR”), visit https://gdpr.eu/faq/ for more information on the EU regulation. In scenarios where we have to process and store highly sensitive government data, we only store the data on the premises of the government agency or an approved local data centre. Read more about how securely we store and manage user data on our privacy policy page.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header py-4" id="heading-9-4" data-toggle="collapse" role="button" data-target="#collapse-9-4" aria-expanded="false" aria-controls="collapse-9-4">
                                    <h6 class="mb-0"><span class="ti-wallet mr-3"></span>How do you perform address verification?
                                    </h6>
                                </div>
                                <div id="collapse-9-4" class="collapse" aria-labelledby="heading-9-4" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>
                                            Address verification is performed physically by our agent network across all states in supported locations.
                                        </p>
                                    </div>
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

