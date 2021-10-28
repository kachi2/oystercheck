<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPages extends Controller
{
    //

    public function Index(){
        return view('index');
     }

     public function WhoWeAre(){
         return view('who-we-are');
     }

     public function CoreValues(){
         return view('core-values');
     }
     public function AML(){
        return view('aml');
    }
    public function ContactUs(){
        return view('contact-us');
    }
    public function AboutUs(){
        return view('about-us');
    }
    public function Services(){
        return view('services');
    }
    public function Technology(){
        return view('technology');
    }
    public function Mission(){
        return view('mission');
    }
    public function Industry(){
        return view('industry');
    }
    public function Resources(){
        return view('resource');
    }
    public function KYC(){
        return view('kyc');
    }
    
}
