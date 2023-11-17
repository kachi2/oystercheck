@extends('layouts.landing')

@section('content')
 

<div class="main">
    <!--hero section start-->
    {{-- <section class="hero-equal-height pt-165 pb-100" style="background: url('{{asset('/landing_assets/img/bg-shape.png')}}')no-repeat bottom center / cover; margin-bottom:-190px; height: 500px;"> --}}
        
    <section class="pricing-section ptb-100" style="background-color: #162E66">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2 class="text-white" style="font-size: 32px">Employment Checks</h2>
                        <p class="lead text-white" style="font-size: 18px">Choose the perfect plan for your business needs.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg col-md">
                    <div class="card text-center single-employment-pack">
                        <div class="pt-4"><h5>GDPR screening package</h5></div>
                       
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000;">
                            <div class="h2 text-center mb-0"><span class="price font-weight-bolder" style="font-size: 32px">£55+VAT</span><sub style="color:#1A1A1A; font-size:12px; line-height:16.8px">/ month</sub></div>
                            
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left; font-weight:600; font-size:16px; color:#18181B">
                                <li>What you get:</li>
                            </ul>
                            
                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > DBS check</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Credit check (including PEP & sanctions)</li>
                            </ul>
                            <a href="#" class="btn secondary-solid-btn mb-3" style="border-radius: 5px;" target="_blank">Get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md">
                    <div class="card popular-price text-center single-employment-pack">
                        <div class="pt-4"><h5>Entryscreening package </h5></div>
                        
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h2 text-center mb-0"><span class="price font-weight-bolder" style="font-size: 32px">£75+VAT</span><sub style="color:#1A1A1A; font-size:12px; line-height:16.8px">/ month</sub></div>


                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left; font-weight:600; font-size:16px; color:#18181B">
                                <li>What you get:</li>
                            </ul>
                           <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > DBS check</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Credit check (including PEP & sanctions)</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > ID verification</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > RTW check</li>
                            </ul>
                            <a href="#" class="btn secondary-solid-btn mb-3" style="border-radius: 5px;" target="_blank">Get started </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md">
                    <div class="card text-center single-employment-pack">
                        <div class="pt-4 d-flex">
                            <h5>Mid-tier package</h5>
                            <div class="action-btns mb-3 ml-2" style="white-space: nowrap;">
                                <button class="btn secondary-solid-btn" style="background-color: red; border: none; font-size: 12px;">Most Popular</button>
                            </div>
                            
                        </div>
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h2 text-center mb-0"><span class="price font-weight-bolder">£135+VAT</span><sub style="color:#1A1A1A; font-size:12px; line-height:16.8px">/ month</sub></div>

                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left; font-weight:600; font-size:16px; color:#18181B">
                                <li>What you get:</li>
                            </ul>
                           <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > DBS check</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Credit check (including PEP & sanctions)</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > ID verification</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > RTW check</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > 3-year employment referencing (including gap analysis)</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Adverse media, social media & undercover journalistic checks</li>
                            </ul>
                            <a href="#" class="btn secondary-solid-btn mb-3" style="border-radius: 5px;" target="_blank">Get started </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md">
                    <div class="card text-center single-employment-pack">
                        <div class="pt-4"><h5>Director & senior management package</h5></div>
                        <div class="card-header py-4 border-0 pricing-header" style="color: #000">
                            <div class="h2 text-center mb-0"><span class="price font-weight-bolder" style="font-size: 32px">£195+VAT</span><sub style="color:#1A1A1A; font-size:12px; line-height:16.8px">/ month</sub></div>

                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left; font-weight:600; font-size:16px; color:#18181B">
                                <li>What you get:</li>
                            </ul>
                           <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > DBS check</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Credit check (including PEP & sanctions)</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > ID verification</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > RTW check</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > 3-year employment referencing (including gap analysis)</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Adverse media, social media & undercover journalistic checks</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Qualification verification</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Directorship check</li>
                            </ul>
                            <a href="#" class="btn secondary-solid-btn mb-3" style="border-radius: 5px;" target="_blank">Get started </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    
    <section class="about-us-section pt-100 ptb-50">
        <div class="container">
            <div class="row ">
                <table class="table">
                    <thead>
                      <tr style="background-color: #E4E4E7">
                        <th scope="col" style="font-weight: bold">Optional extra checks</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Adverse media & undercover journalism check 
                            <img src="{{asset('/landing_assets/img/circle_question.png')}}" >
                        </th>
                        <td></td>
                        <td>100</td>
                        <td>100</td>
                        <td><span style="color: #059669">Unlimited</span></td>
                      </tr>
                      <tr>
                        <th scope="row">Character reference  <img src="{{asset('/landing_assets/img/circle_question.png')}}"> </th>
                        <td> <img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td> - </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">DBS basic <img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td ><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">DBS enhanced <img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> - </td>
                        <td > - </td>
                        <td> - </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">DBS standard <img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> <img src="{{asset('/landing_assets/img/green_check.png')}}" > </td>
                        <td> <img src="{{asset('/landing_assets/img/green_check.png')}}" > </td>
                        <td> <img src="{{asset('/landing_assets/img/green_check.png')}}" > </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">DBS volunteer <img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> -  </td>
                        <td> - </td>
                        <td> <img src="{{asset('/landing_assets/img/green_check.png')}}" > </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">UK directorship check<img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> -  </td>
                        <td> <img src="{{asset('/landing_assets/img/green_check.png')}}" > </td>
                        <td> <img src="{{asset('/landing_assets/img/green_check.png')}}" > </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">UK driving license check<img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> -  </td>
                        <td> - </td>
                        <td> - </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">Previous reference<img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> -  </td>
                        <td> - </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">Two previous references<img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> -  </td>
                        <td> - </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">Employment history (including gap analysis)<img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> -  </td>
                        <td> - </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                      <tr>
                        <th scope="row">Mobile App Integration<img src="{{asset('/landing_assets/img/circle_question.png')}}"></th>
                        <td> -  </td>
                        <td> - </td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                        <td><img src="{{asset('/landing_assets/img/green_check.png')}}" ></td>
                      </tr>
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </section>

    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-lg-6 mb-3"> <!-- Add mb-3 class for spacing -->
                    <div class="card popular-price  single-employment-pack" style="border: 3px solid  #162E66; border-radius:10px">
                        <div class="pt-4 align-items-center text-center " style="background-color: #162E66; "><h5 class="text-white"><center>BS7858 SCREENING </center></h5></div>
                        
                        <div class="card-header align-items-left py-4 border-0 pricing-header text-left" style="color: #000;">
                            <div class="h2  mb-0">
                                <span class="price font-weight-bolder" style="font-size: 32px;">£150+VAT</span>
                                <sub style="color: #1A1A1A; font-size: 12px; line-height: 16.8px">/ month</sub>
                            </div>
                        </div>
                        <a href="#" class="btn secondary-solid-btn mb-3 ml-3 mr-3" style="border-radius: 5px; background-color: #162E66; border: none; color: white; font-weight:600; font-size:16px" target="_blank">Get started</a>
                        
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left; font-weight:600; font-size:16px; color:#18181B">
                                <li>You will get:</li>
                            </ul>
                           <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > ID verification</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > RTW check</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > 5 years previous employment reference (including gap analysis)</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Basic DBS</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Credit check (including PEP and sanctions)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 mb-3" > <!-- Add mb-3 class for spacing -->
                    <div class="card   single-employment-pack" style="border: 3px solid #DA251D; border-radius:10px">
                        <div class="pt-4" style="background-color: #DA251D; "><h5 class="text-white"><center>Entryscreening package </center></h5></div>
                        
                        <div class="card-header align-items-left py-4 border-0 pricing-header text-left" style="color: #000;">
                            <div class="h2  mb-0">
                                <span class="price font-weight-bolder" style="font-size: 32px;">£89.50+VAT</span>
                                <sub style="color: #1A1A1A; font-size: 12px; line-height: 16.8px">/ month</sub>
                            </div>
                        </div>
                       <a href="#" class="btn secondary-solid-btn mb-3 ml-3 mr-3" style="border-radius: 5px; background-color: #DA251D; border: none; color: white; font-weight:600; font-size:16px" target="_blank">Get started</a>
                        
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4 .pricing-feature-para" style="text-align: left; font-weight:600; font-size:16px; color:#18181B">
                                <li>You will get:</li>
                            </ul>
                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > ID verification</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > RTW check</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > 3 years previous employment reference (including gap analysis)</li>
                                <li style="d-flex flex-row"><img src="{{asset('/landing_assets/img/checkmark.png')}}" style="width:18px; height:18px; padding-top:3px" > Basic DBS</li>
                                <li style="d-flex flex-row"><br> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>  
        </div>
    </section>
  
   

    {{-- faq --}}
    <section class="promo-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-headingfaq mb-5 text-center">
                        <h2>Frequently Asked Questions</h2>
                        <p class="lead" style="font-size:18px; font-weight: 400;">
                            Can’t find the anwser you’re looking for ? Reach out to customer support team.
                        </p>
                    </div>
                </div>
            </div>
            <!--pricing faq start-->
            <div class="row">
                <div class="col-lg-6">
                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                <h6 class="mb-0">Nulla voluptate ullamco ipsum anim ?</h6>
                            </div>
                            <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Nulla voluptate ullamco ipsum anim.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 2 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                <h6 class="mb-0"> Id aliquip laborum nulla ?</h6>
                            </div>
                            <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Id aliquip laborum nulla.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                <h6 class="mb-0">Pariatur incididunt sint voluptate dolor in veniam ?
                                </h6>
                            </div>
                            <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Pariatur incididunt sint voluptate dolor in veniam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                                <h6 class="mb-0"> Sit magna excepteur velit fugiat magna deserunt ?</h6>
                            </div>
                            <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2">
                                <div class="card-body">
                                    <p> Sit magna excepteur velit fugiat magna deserunt</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 2 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                <h6 class="mb-0"> How do I get access to a theme?</h6>
                            </div>
                            <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Quickly recaptiualize revolutionary meta-services and multimedia based channels. Seamlessly impact diverse deliverables rather than cooperative strategic theme areas.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button" data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                                <h6 class="mb-0"> Anim do deserunt incididunt ad qui aliqui ?
                                </h6>
                            </div>
                            <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Anim do deserunt incididunt ad qui aliqui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--pricing faq end-->
        </div>
    </section>

   

    
 

</div>

@endsection