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
                        <h1 class="text-white mb-0">Mission</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">About us</a></li>
                                <li class="list-inline-item breadcrumb-item active">Mission</li>
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
            <div class="col-md-12 col-lg-4">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                          <h2><img src="{{asset('/landing_assets/img/mission.jpg')}}" width="300px"></h2>
                      
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Mission</h2>
                        <p>To Achieve Market Dominance In Providing Exceptional And Extensive Background, KYC And AML Screening Services Across The World..</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->
</div>

@endsection