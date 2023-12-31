@extends('layouts.frontend.minor')


@section('title', 'Tentang — Fateka')
@section('content')

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
                        <li>
                            <a href="{{url('/')}}">Beranda</a>
                        </li>
                        <li class="active">
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
                        <a href="{{url('/login')}}" class="user-login mr-4">
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
                        Gedung Panambulai Lt. 2 Jl. Telekomunikasi Terusan Buah Batu Bandung 40257 Indonesia
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

<!--====== Page title area Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content text-center mt-5">
            <h1 class="page-title">Tentang</h1>
            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="active">Tentang</li>
            </ul>
        </div>
    </div>
    <div class="page-title-effect d-none d-md-block">
        <img class="particle-1 animate-zoom-fade" src="{{url('landio/assets/img/particle/particle-1.png')}}"
            alt="particle One">
        <img class="particle-2 animate-rotate-me" src="{{url('landio/assets/img/particle/particle-2.png')}}"
            alt="particle Two">
        <img class="particle-3 animate-float-bob-x" src="{{url('landio/assets/img/particle/particle-3.png')}}"
            alt="particle Three">
        <img class="particle-4 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-4.png')}}"
            alt="particle Four">
        <img class="particle-5 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-5.png')}}"
            alt="particle Five">
    </div>
</section>
<!--====== Page title area End ======-->

<!-- ===== About Area Start ===== -->
<section class="about-us-area p-t-100 p-b-100 border-bottom-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-6 col-md-10">
                <div class="preview-image-showcase p-r-70 p-r-lg-40 p-r-md-0 p-b-md-40">
                    <div class="images-left">
                        <div class="image-hover-zoom-overly">
                            <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-1.jpg')}}"
                                alt="About thumbnail one">
                        </div>
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-3.jpg')}}"
                            alt="About thumbnail three">
                    </div>
                    <div class="images-right">
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-2.jpg')}}"
                            alt="About thumbnail two">
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-4.jpg')}}"
                            alt="About thumbnail four">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="about-us-content">
                    <div class="common-heading tagline-boxed m-b-30">
                        <span class="tagline">Apa itu Fateka?</span>
                        <h2 class="title">Forum Alumni Teknik Komputer, Universitas Telkom </h2>
                    </div>
                    <p>
                        Fateka dibuat sebagai platform yang berfungsi untuk menyediakan informasi meliputi data alumni, kegiatan, sharing session alumni sekaligus menyediakan fitur untuk interaksi antara alumni dengan civitas akademika Teknik Komputer Universitas Telkom melalui ruang virtual.
                    </p>
                    <a href="{{url('/login')}}" class="template-btn bordered-btn m-t-40">Login Sekarang <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== About Area End ===== -->

<!-- ===== Service Section Start ===== -->
<section class="service-area p-t-100 p-b-100 bg-secondary-color-5">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="common-heading heading-white tagline-boxed text-center m-b-30">
                        <span class="tagline">Mengapa Fateka Hadir?</span>
                        <h2 class="title ">Hal yang melatarbelakangi aplikasi Fateka ini dibuat</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center common-heading heading-white iconic-boxes-v1">
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30" style="border-radius: 25px">
                        <div class="icon icon-gradient-3">
                            <i class="far fa-database"></i>
                        </div>
                        <h4 class="title">Data Alumni</h4>
                        <p style="color: white">
                        Belum ada platform khusus untuk pencarian data alumni
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30"  style="border-radius: 25px">
                        <div class="icon icon-gradient-4">
                            <i class="far fas fa-briefcase"></i>
                        </div>
                        <h4 class="title">Lowongan karir</h4>
                        <p style="color: white">
                        Pendistribusian lowongan karir yang masih konvensional
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30"  style="border-radius: 25px">
                        <div class="icon icon-gradient-5">
                            <i class="fas fa-retweet"></i>
                        </div>
                        <h4 class="title">Media interaksi</h4>
                        <p style="color: white">
                        Belum ada media interaksi alumni dengan civitas akademika
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ===== Service Section End ===== -->

<!-- ==== Fitur start ==== -->
<section class="service-details-area p-t-130 p-b-130">
    <div class="service-tab">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading text-center m-b-65">
                        <div class="common-heading tagline-boxed m-b-30">
                            <span class="tagline">Fitur Fateka</span>
                            <h2 class="title">Berikut fitur yang dapat anda gunakan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="service-tab-nav">
                <ul class="nav nav-tabs service-tab-nav" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem1" role="tab">
                            <i class="far fa-users"></i> Data Alumni 
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem2" role="tab">
                            <i class="far fa-megaphone"></i> Info dan Kegiatan
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem3" role="tab">
                            <i class="far fa-briefcase"></i> Lowongan Kerja
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem4" role="tab">
                            <i class="far fa-video"></i> Virtual Meet 
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="service-tab-content container-fluid">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabItem1" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/data_alumni.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                            filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem2" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/info.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem3" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/kerja.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem4" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{url('landio/assets/img/virtual_meet.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== Fitur end ==== -->


<!--====== Start Call To Action ======-->
<section class="cta-section bg-cover-center p-t-90 p-b-90" style="background-image: url(./../landio/assets/img/cta/cta-bg-2.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="cta-content text-center">
                    <div class="common-heading heading-white m-b-65">
                        <span class="tagline">Ingin mengakses semua fitur?</span>
                        <h2 class="title">Ayo segera masuk ke Aplikasi Fateka</h2>
                    </div>
                    <a href="{{url('/login')}}" class="template-btn white-bg bordered-btn">Masuk Sekarang 
                    <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-6 cta-absolute-image d-none d-lg-block wow fadeInUp" data-wow-delay="0.3s">
            <img src="{{url('landio/assets/img/cta/cta-absolute-img3.png')}}" alt="" width="400px">
        </div> 
    </div>
</section>        

@endsection