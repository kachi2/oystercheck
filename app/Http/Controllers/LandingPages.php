<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AgentRequest;

class LandingPages extends Controller
{
    //


    public function Index(){
        return view('landing.index');
    }


    public function periodic(){
        return view('landing.periodic');
    }

    public function bookdemo(){
        return view('landing.book-a-demo');
    }

    public function transaction(){
        return view('landing.transaction');
    }

    public function bestdecision(){
        return view('landing.bestdecision');
    }

    public function amlsolution(){
        return view('landing.amlsolution');
    }
    public function bpssClearance(){
        return view('bpss-clearance');
    }

    public function bs7858Vetting(){
        return view('landing.bs7858-vetting');
    }

    public function EmploymentChecks(){
        return view('landing.employment-checks');
    }

    public function WhoWeAre(){
         return view('landing.who-we-are');
    }    

    public function CoreValues(){
         return view('landing.core-values');
     }
     public function AML(){
        return view('landing.aml');
    }
    public function ContactUs(){
        return view('landing.contact-us');
    }
    public function AboutUs(){
        return view('landing.about-us');
    }
    public function Services(){
        return view('landing.services');
    }
    public function Technology(){
        return view('landing.technology');
    }
    public function Mission(){
        return view('landing.mission');
    }
    public function Industry(){
        return view('landing.industry');
    }
    public function Resources(){
        return view('landing.resource');
    }
    public function KYC(){
        return view('landing.kyc');
    }

    public function email(){
        return view('emails.ClientRegistration');
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

    // public function Index(){
    //     return view('index');
    //  }

    //  public function WhoWeAre(){
    //      return view('who-we-are');
    //  }

    //  public function CoreValues(){
    //      return view('core-values');
    //  }
    //  public function AML(){
    //     return view('aml');
    // }
    // public function ContactUs(){
    //     return view('contact-us');
    // }
    // public function AboutUs(){
    //     return view('about-us');
    // }
    // public function Services(){
    //     return view('services');
    // }
    // public function Technology(){
    //     return view('technology');
    // }
    // public function Mission(){
    //     return view('mission');
    // }
    // public function Industry(){
    //     return view('industry');
    // }
    // public function Resources(){
    //     return view('resource');
    // }
    // public function KYC(){
    //     return view('kyc');
    // }

    // public function email(){
    //     return view('emails.ClientRegistration');
    // }

    // public function ContactForm(Request $request){
    //     $data = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'company' => $request->company,
    //         'address' =>$request->address,
    //     ];
    //     mail::to('support@oysterchecks.com')->send(new AgentRequest($data));
    //     return redirect()->back()->with('success', 'Message send successfully');
    // }

    public function knowledgeBase(){
        
    }

    public function Faqs(){
        return view('faq');
    }

    public function Terms(){
        return view('terms');
    }
    
}
