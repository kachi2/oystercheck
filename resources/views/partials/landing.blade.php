<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand pl-2 pr-2" href="{{route('landing')}}">
                <img src="{{asset('/landing_assets/img/logo-white.png')}}" width="200px" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="{{route('landing')}}" > Home</a> </li>
                      <li><a  href="#" class="dropdown-toggle">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('who-we-are')}}">Who we are</a></li>
                            <li><a href="{{route('core-values')}}">Core values</a></li>
                            <li><a href="{{route('mission')}}">Mission </a></li>
                            <li><a href="{{route('about-us')}}">Why Choose Us</a></li>
                        </ul>
                    </li>
                     <li><a  href="#" class="dropdown-toggle">BG Checks</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('kyc')}}">KYC</a></li>
                            <li><a href="{{route('aml')}}">AML</a></li>
                        </ul>
                    </li>
                    <li><a  href="{{route('services')}}">Services</a></li>
                     <li><a  href="{{route('industry')}}">Industry</a></li>
                      <li><a  href="{{route('technology')}}">Technology</a></li>
                       <li><a  href="{{route('resource')}}">Resources</a></li>
                    <li><a class="btn btn-danger p-2" href="{{route('login')}}" >Get Started</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>