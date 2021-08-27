    <body class="dark-sidenav navy-sidenav">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="{{route('index')}}" class="logo">
                    <span>
                        <img src="{{asset('/assets/images/logo.png')}}"  width="150px" alt="logo-large" class="logo-light"> 
                    </span>  
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="#"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                        
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Identity Verification</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @foreach($sidebar as $menu)
                             <li class="nav-item"><a class="nav-link" href="{{route('verifyIndex',$menu->slug)}}"><i class="ti-control-record"></i>{{$menu->slug}}</a></li>
                             @endforeach
                        </ul>
                    </li> 
                         <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Address Verification</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                             <li class="nav-item"><a class="nav-link" href="{{route('verifyIndex','nin')}}"><i class="ti-control-record"></i>Individual Address</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Reference Address</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Business Address </a></li>
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Business Verifications</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                             <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Tax Identification Number</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Business Address</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Company Search (CAC)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Bank Account Verification</a></li>
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Organisations</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                             <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Police / Criminal Record </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Political Exposed Persons </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Professional Certificate</a></li>
             
                        </ul>
                    </li>  <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Account</li>
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Wallet</span></a>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Transactions</span></a>
                    </li> 
                    </li>  <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Administrative Task</li>
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Reports</span></a>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Settings</span></a>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Users</span></a>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Activity Log</span></a>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Manage Verifications</span></a>
                    </li> 
                            
                </ul>
    
              
            </div>
        </div>
        <!-- end left-sidenav-->