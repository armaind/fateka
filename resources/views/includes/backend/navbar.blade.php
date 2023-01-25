<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="img-fluid" src="../assets/images/logo/logo.png" alt="">
                </a>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="sliders"></i>
            </div>
        </div>
        <div class="left-header col horizontal-wrapper pl-0">
            <ul class="horizontal-menu">
                <li class="mega-menu outside d-block d-md-none">
                    <a class="nav-link" href="{{route('logout')}}" onclick=" event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i>
                        <span>
                            Log out
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
        
                <li class="onhover-dropdown">
                    <div>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Notifikasi"></a>
                        <i data-feather="bell"> </i>
                    </div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li>
                            <i data-feather="bell"></i>
                            <h6 class="f-18 mb-0">Notifikasi</h6>
                        </li>
                        <li class="text-left">
                            <p class="text-left">Dapatkan informasi seputar alumni terbaru dari kami</p>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="mode">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Light Mode">
                            <i data-feather="sun"></i>
                        </a>
                    </div>
                </li>
                <li class="maximize">
                    <a data-toggle="tooltip" data-placement="bottom" title="Full Screen" class="text-dark" href="#!"
                        onclick="javascript:toggleFullScreen()">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
                <li class="profile-nav onhover-dropdown p-0 ml-2 mr-0">
                    <div class="media profile-media">
                        <img class="b-r-10"
                            src="https://source.boringavatars.com/beam/120/{{Auth::user()->name}}?square&colors=FAD089,FF9C5B,F5634A,ED303C,3B8183"
                            width="40px">
                        <div class="media-body">
                            <span>{{Auth::user()->name}}</span>
                            <p class="mb-0 font-roboto">Mahasiswa
                                <i class="middle fa fa-angle-down"></i>
                            </p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li>
                            <a href="{{url('/')}}">
                                <i data-feather="home"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/')}}">
                                <i data-feather="settings"></i>
                                <span>Edit Profile</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{route('logout')}}" onclick=" event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i data-feather="log-out"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>