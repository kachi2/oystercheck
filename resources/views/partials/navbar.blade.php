   <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-end mb-0">  
                                          
            
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="align-self-center topbar-icon"></i>
                                <span class="badge bg-danger rounded-pill noti-icon-badge">@if(isset($notify)){{count($notify)}} @else 0 @endif</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                            
                                <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                    Notifications <span class="badge bg-primary rounded-pill">@if(isset($notify)){{count($notify)}} @else 0 @endif</span>
                                </h6> 
                                <div class="notification-menu" data-simplebar>
                                <!--end-item-->
                                    <!-- item-->
                                    @if(isset($notify) && count($notify) > 0)
                                    @foreach ($notify as $ss )
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">{{$ss->created_at->DiffForHumans()}}</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i class="las la-user-clock bg-soft-primary thumb-sm rounded-circle"></i>  
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">{{$ss->title}}</h6>
                                                <small class="text-muted mb-0">{{$ss->message}}</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    @endforeach
                                    @endif
                                   <!--end-item-->
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                             <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm ">{{ucwords(auth()->user()->firstname)}}</span>
                                @if(auth()->user()->image == null)
                                <div style="display: inline-flex;width:32px;height:32px;background-color:rgba(59, 130, 246, 0.5);vertical-align:middle;align-items:center;justify-content:center;overflow:hidden" class="rounded-circle">
                                    <div class="fw-semibold text-white" style="color:#ffffff;">{{strtoupper(substr(auth()->user()->firstname,0,1))}}</div>
                                </div>
                                @else
                                <img src="{{auth()->user()->image}}" alt="logo-large" class="rounded-circle thumb-xs"> 
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{route('user.profile')}}"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                                <a class="dropdown-item" href="{{route('user.profile')}}"><i data-feather="settings" class="align-self-center icon-xs icon-dual me-1"></i> Settings</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>

                           <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
                           </form>
                        </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button">Client Dashboard</a>
                            </div>                                
                        </li>  
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" >Wallet Balance: ₦{{number_format($client_balance->avail_balance,2)}}</a>
                            </div>                                
                        </li>                          
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->