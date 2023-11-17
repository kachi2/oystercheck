<header class="header" >
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent" >
        <div class="container d-flex justify-content-between align-items-center ">
           {{-- <a class="navbar-brand pl-2 pr-2" href="{{route('landing')}}">  --}}
            <a class="navbar-brand" href="{{route('landing')}}">
                <img src="{{asset('/landing_assets/img/logo-white.png')}}" width="200px" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button> 
            <div class="collapse navbar-collapse h-auto justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav menu">
                    <li>
                        <a href="{{route('landing')}}" > Home</a> 
                    </li>
                    <li><a href="#" >About Us</a></li>
                    <li><a href="{{route('employment-checks')}}" >Employment Checks</a></li>
                      <li><a  href="#" class="dropdown-toggle">Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('periodic')}}">Periodic KYC</a></li>
                            <li><a href="{{route('book-a-demo')}}">Book a Demo</a></li>
                            <li><a href="{{route('transaction')}}">Transaction</a></li>
                            <li><a href="{{route('aml-solution')}}">AML Solution</a></li>
                            <li><a href="{{route('bpss-clearance')}}">BPSS Clearance</a></li>
                            <li><a href="{{route('bs7858-vetting')}}">BS7858 Vetting</a></li>
                            <li><a href="{{route('technology')}}">Technology</a></li>
                            <li><a href="{{route('who-we-are')}}">Who we are</a></li>
                            <li><a href="{{route('core-values')}}">Core values</a></li>
                            <li><a href="{{route('mission')}}">Mission </a></li>
                            <li><a href="{{route('about-us')}}">Why Choose Us</a></li>
                        </ul>
                    </li>
                    <li><a  href="{{route('industry')}}">Pricing</a></li>
                    <li><a  href="{{route('contact-us')}}">Contact Us</a></li>
                   
                </ul>
            </div>
            <style>              
                
            </style>
            <div class="collapse navbar-collapse h-auto justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    {{-- <li><a class="btn custom-register p-2 mr-3 ml-3 mb-3" href="{{ route('login') }}" >Book a Demo</a></li> --}}
                    <li><a class="btn custom-register p-2 mr-3 ml-3 mb-3" href="{{ route('login') }}" >Register</a></li>
                    <li><a class="btn custom-login p-2  ml-3 text-white" href="{{ route('login') }}" >Login</a></li>  
                  
                </ul>
            </div>
        </div>
    </nav> 
        
    
</header>