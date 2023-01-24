<!--====== Start Header ======-->
<header class="template-header navbar-left absolute-header nav-primary-5 submenu-primary-5 sticky-header">
    <div class="container-fluid fluid-gap-70">
        <div class="header-inner">
            <div class="header-left">
                <nav class="navbar">
                    <div class="container">
                      <a class="navbar-brand" href="/">
                        <img src="\landio\assets\img\logotk.png" alt="logo" width="60">
                      </a>
                    </div>
                </nav>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li>
                            <a href="#">|</a>
                        </li>
                        <li class="active">
                            <a href="{{url('/')}}"> Beranda</a>
                        </li>
                        <li>
                            <a href="{{url('tentang')}}">Tentang</a>
                        </li>
                        <li>
                            <a href="{{url('kontak')}}">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
    
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        @auth
                        <div class="dropdown">
                            <a href="{{ route('dashboard') }}" class="template-btn primary-bg-5 p-r-20 m-r-20" href="#" id="userName" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               @php
                                   auth()->user()->name
                               @endphp 
                                Dashboard<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        @else
                        <a href="{{url('/login')}}" class="user-login">
                            <i class="far fa-user-circle"></i>Masuk Aplikasi
                        </a>
                        <li class="d-none d-md-block">
                            <a href="{{url('/register')}}" class="template-btn primary-bg-5">
                                Daftar Sekarang <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                    </li>
                    @endauth
                    <li class="d-none d-xl-block">
                        <a href="#" class="off-canvas-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                    <div class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <nav class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{('/')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{('/tentang')}}">Tentang</a>
                    </li>
                    <li>
                        <a href="{{('/kontak')}}">Kontak Kami</a>
                    </li>
                    @auth
                        <a class="btn" href="{{ '/dashboard' }}" role="button">{{ auth()->user()->name }}</a>
                    @else
                    <li>
                        <a href="{{('/login')}}">Masuk Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/register')}}">Daftar Akun</a>
                    </li>
                    @endauth
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->

    <!-- Off Canvas -->
    <div class="off-canvas-wrapper">
        <div class="canvas-overlay"></div>
        <div class="canvas-inner">
            <div class="canvas-logo">
                <img src="\landio\assets\img\logotk.png" alt="logo" width="110">
            </div>
            <div class="about-us">
                <h5 class="canvas-widget-title">Tentang</h5>
                <p>
                    Fateka adalah platform yang berfungsi untuk menyediakan informasi dan media interaksi untuk menjembatani civitas akademika dengan seluruh alumni Teknik Komputer, Universitas Telkom.
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Kontak Kami</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        Gedung TULT Jl. Telekomunikasi No.1, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40267 Indonesia Phone: +62 22 7566456 info@telkomuniversity.ac.id
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:info@telkomuniversity.ac.id">info@telkomuniversity.ac.id</a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+62227566456">+62227566456</a></span>
                    </li>
                </ul>
            </div>
            <a href="#" class="canvas-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
</header>
<!--====== End Header ======-->