<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AgentRequest;

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

    public function ContactForm(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'address' =>$request->address,
        ];
        mail::to('support@oysterchecks.com')->send(new AgentRequest($data));
        return redirect()->back()->with('success', 'Message send successfully');
    }
    
}
