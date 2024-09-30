 <body class="dark-sidenav navy-sidenav">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="{{route('admin.index')}}" class="logo">
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
                        <a href="{{route('index')}}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                        
                    </li>
                    <hr class="hr-dashed hr-menu">
                    <li>
                        <a href="{{route('admin.verify','nip')}}">
                            <i data-feather="user" class="align-self-center menu-icon"></i>
                            <span>Identity Verification</span><span class="menu-arrow">
                            </span>
                        </a>
                    </li> 
                     <li>
                        <a href="{{route('admin.businessIndex','cac')}}"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Business Verifications</span><span class="menu-arrow">
                            </span>
                        </a>
                    </li> 
                    <li>
                        <a href="{{route('admin.addressIndex','individual-address')}}"><i data-feather="map-pin" class="align-self-center menu-icon"></i><span>Address Verification</span>
                        </a>
                    </li> 
 
                  <hr class="hr-dashed hr-menu">
                    
                   <li class="menu-label my-2">Administrative Task</li>
                       
                    <li>
                        <a href="{{route('admin.users.report')}}"><i data-feather="trending-up" class="align-self-center menu-icon"></i><span>Audit Reports</span></a>
                    </li> 
                    <li> 
                        <a href="{{route('admin.user.profile')}}"><i data-feather="settings" class="align-self-center menu-icon"></i><span>Settings</span></a>
                    </li> 
                    <li>
                        <a href="{{route('admin.users.activity')}}"><i data-feather="activity" class="align-self-center menu-icon"></i><span>Activity Log</span></a>
                    </li>  
                     <li>
                        <a href="{{route('admin.user.transactions')}}"><i data-feather="credit-card" class="align-self-center menu-icon"></i><span>Wallets Transactions</span></a>
                    </li>
                     
                   <li class="menu-label my-2">Manage Users</li>
                    
                        <li><a class="nav-link" href="{{route('admin.user.candidates')}}"> <i data-feather="users" class="align-self-center menu-icon"></i>Candidates</a></li>
                        <li><a class="nav-link" href="{{route('admin.user.clients')}}"> <i data-feather="user" class="align-self-center menu-icon"></i>Clients</a></li>
                            {{-- <li><a class="nav-link" href="{{route('administratorIndex')}}"> <i data-feather="user" class="align-self-center menu-icon"></i>Administrators</a></li> --}}
                        
                 </ul>
            </div>
          
        </div>
       
        <!-- end left-sidenav-->