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
                        <a href="#"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                        
                    </li>
                    <hr class="hr-dashed hr-menu">
                    <li>
                        <a href="javascript: void(0);"><i data-feather="user" class="align-self-center menu-icon"></i><span>Identity Verification</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @foreach($sidebar as $menu)
                             <li class="nav-item"><a class="nav-link" href="{{route('admin.verify',$menu->slug)}}"><i class="ti-control-record"></i>{{$menu->slug}} Verification</a></li>
                             @endforeach
                        </ul>
                    </li> 
                     
                     <li>
                        <a href="javascript: void(0);"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Business Verifications</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                        @foreach($business as $biz )
                             <li class="nav-item"><a class="nav-link" href="{{route('admin.businessIndex',$biz->slug)}}"><i class="ti-control-record"></i>{{$biz->name}}</a></li>
                           @endforeach
                        </ul>
                    </li> 
                  
                         <li>
                        <a href="javascript: void(0);"><i data-feather="map-pin" class="align-self-center menu-icon"></i><span>Address Verification</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                        @foreach ($address as $add)
                             <li class="nav-item"><a class="nav-link" href="{{route('admin.addressIndex',$add->slug)}}"><i class="ti-control-record"></i>{{$add->name}}</a></li>
                         @endforeach
                        </ul>
                    </li> 
 
                  <hr class="hr-dashed hr-menu">
                    
                   
                   <li class="menu-label my-2">Administrative Task</li>
                       
                    <li>
                        <a href="{{route('users.report')}}"><i data-feather="trending-up" class="align-self-center menu-icon"></i><span>Audit Reports</span></a>
                    </li> 
                    <li>
                        <a href="{{route('user.profile')}}"><i data-feather="settings" class="align-self-center menu-icon"></i><span>Settings</span></a>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="activity" class="align-self-center menu-icon"></i><span>Activity Log</span></a>
                    </li>  
                     <li>
                        <a href="{{route('user.transactions')}}"><i data-feather="credit-card" class="align-self-center menu-icon"></i><span>Wallets Transactions</span></a>
                    </li>
                     
                   <li class="menu-label my-2">Manage Users</li>
                    
                           <li><a class="nav-link" href="{{route('admin.user.candidates')}}"> <i data-feather="users" class="align-self-center menu-icon"></i>Candidates</a></li>
                            <li><a class="nav-link" href="{{route('admin.user.clients')}}"> <i data-feather="user" class="align-self-center menu-icon"></i>Clients</a></li>
                                     <li><a class="nav-link" href="{{route('administratorIndex')}}"> <i data-feather="user" class="align-self-center menu-icon"></i>Administrators</a></li>
                        
                        
                 </ul>
            </div>
          
        </div>
       
        <!-- end left-sidenav-->