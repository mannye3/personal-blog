   <!-- ========== Left Sidebar Start ========== -->
   <div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="{{ asset('admin/assets/assets/images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="{{ asset('admin/assets/assets/images/users/avatar-7.jpg') }}" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0">{{ Auth::user()->name}}</h6>
            <span class="pro-user-desc">Administrator</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="pages-profile.html" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>My Account</span>
                </a>


                <div class="dropdown-divider"></div>



                <form  method="POST" id="logout-form" action="{{ route('logout')}}">@csrf</form>
                <a href="#" onclick="document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">User</li>

                <li>
                <a href="{{ route('userDashboard')}}"  {{ Route::currentRouteName() == 'userDashboard' ?
                 'active' : '' }}>
                        <i data-feather="home"></i>

                        <span> Dashboard </span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('userComments')}}" {{ Route::currentRouteName() == 'userComments' ?
                    'active' : '' }}>
                        <i data-feather="list"></i>

                        <span> Comments </span>
                    </a>
                </li>


                @if (Auth::user()->author == true)
                <li class="menu-title">Author</li>

                <li>
                    <a href="{{ route('authorDashboard')}}" {{ Route::currentRouteName() == 'authorDashboard' ?
                    'active' : '' }}>
                        <i data-feather="home"></i>

                        <span> Dashboard </span>
                    </a>
                </li>



                <li>
                    <a href="{{ route('authorPosts')}}" {{ Route::currentRouteName() == 'authorPosts' ?
                    'active' : '' }}>
                        <i data-feather="list"></i>

                        <span> Posts </span>
                    </a>
                </li>






                <li>
                    <a href="{{ route('authorComments')}}" {{ Route::currentRouteName() == 'authorComments' ?
                    'active' : '' }}>
                        <i data-feather="list"></i>

                        <span> Comments </span>
                    </a>
                </li>

                @endif


                @if (Auth::user()->admin == true)


                <li class="menu-title">Admin</li>

                <li>
                    <a href="{{ route('adminDashboard')}}" {{ Route::currentRouteName() == 'adminDashboard' ?
                    'active' : '' }}>
                        <i data-feather="home"></i>

                        <span> Dashboard </span>
                    </a>
                </li>



                <li>
                    <a href="{{ route('adminPosts')}}" {{ Route::currentRouteName() == 'adminPosts' ?
                    'active' : '' }}>
                        <i data-feather="list"></i>
                        <span> Posts </span>
                    </a>
                </li>




                <li>
                    <a href="{{ route('adminComments')}}" {{ Route::currentRouteName() == 'adminComments' ?
                    'active' : '' }}>
                        <i data-feather="list"></i>

                        <span> Comments </span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('adminUsers')}}" {{ Route::currentRouteName() == 'adminUsres' ?
                 'active' : '' }}>
                        <i data-feather="users"></i>
                        <span> Users </span>
                    </a>
                </li>

                @endif











                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
